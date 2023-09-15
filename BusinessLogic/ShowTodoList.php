<?php

/**
 * Show all todolist
 */
function showTodoList()
{
    global $todolist;

    echo 'TODOLIST: ' . PHP_EOL;

    if (empty($todolist)) {
        echo "Todolist Masih Kosong!" . PHP_EOL;
    } else {
        foreach ($todolist as $num => $value) {
            echo "$num. $value" . PHP_EOL;
        }
    }
}
