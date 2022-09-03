<?php

use Config\Database;

require_once __DIR__ . '/database.php';

$db = \Config\Database::getConnection();
echo "Sukses manual koneksi ke database";