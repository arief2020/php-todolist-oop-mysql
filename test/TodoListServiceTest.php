<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../config/database.php";


use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(){

    

    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    $todolistService = new TodoListServiceImpl($todolistRepository);
    
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");

    $todolistService->showTodoList();
}

function testAddTodoList():void {

    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");
    
    $todolistService->showTodoList();
}
function testRemoveTodoList():void {
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    
    $todolistService = new TodoListServiceImpl($todolistRepository);

    echo $todolistService->removeTodoList(15) . PHP_EOL;
    echo $todolistService->removeTodoList(14) . PHP_EOL;
    echo $todolistService->removeTodoList(3) . PHP_EOL;
    echo $todolistService->removeTodoList(2) . PHP_EOL;
    echo $todolistService->removeTodoList(1) . PHP_EOL;
}

testRemoveTodoList();