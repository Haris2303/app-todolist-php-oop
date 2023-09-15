<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Helper/input.php';

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "==== MENU ====" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. keluar" . PHP_EOL;

        $pilihan = input("Pilih menu: ");

        switch ($pilihan) {
            case '1':
                viewAddTodoList();
                break;
            case '2':
                viewRemoveTodoList();
                break;
            case 'x':
                echo "Bye." . PHP_EOL;
                return false;
            default:
                echo "Pilihan tidak diketahui! Masukkan [1, 2, x]." . PHP_EOL;
                break;
        }
    }
}
