<?php

require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/../View/ViewShowTodoList.php';

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Masukkan Nomor Todo (x untuk batal): ");

    if ($pilihan == 'x') {
        echo "Batal menghapus todo" . PHP_EOL;
        viewShowTodoList();
    } else {
        $isRemove = removeTodoList($pilihan);

        if ($isRemove) {
            echo "Berhasil hapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal hapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
