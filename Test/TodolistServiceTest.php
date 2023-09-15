<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistRepository->todolist[] = "Belajar OOP";
    $todolistRepository->todolist[] = "Membuat Aplikasi Todolist";
    $todolistRepository->todolist[] = "Object Oriented Programming";

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

testShowTodolist();
