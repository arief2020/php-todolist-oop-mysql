<?php
require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/service/TodoListService.php";
require_once __DIR__ . "/view/TodoListView.php";
require_once __DIR__ . "/config/database.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi Todo List" . PHP_EOL;
 
$connection  = \Config\Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($connection);
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();