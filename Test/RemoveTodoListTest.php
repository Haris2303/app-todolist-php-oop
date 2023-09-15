<?php

require_once '../Model/TodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/RemoveTodoList.php';

addTodoList('Berenang');
addTodoList('Masak');
addTodoList('Belajar');
addTodoList('Makan');
addTodoList('Tidur');

removeTodoList(2);

showTodoList();
