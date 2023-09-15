<?php

require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../View/ViewShowTodoList.php';

function viewAddTodoList()
{
    echo "MENAMBAHKAN TODOLIST" . PHP_EOL;

    $todo = input("Masukkan Todo (x untuk batal): ");

    if ($todo == 'x') {
        echo "Batal menambahkan todo" . PHP_EOL;
        viewShowTodoList();
    } else {
        addTodoList($todo);
    }
}
