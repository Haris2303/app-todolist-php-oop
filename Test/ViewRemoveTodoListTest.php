<?php

require_once '../View/ViewRemoveTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';

addTodoList('Melihat Gajah');
addTodoList('Makan Sore');
addTodoList('Buang Sampah');

showTodoList();

viewRemoveTodoList();

showTodoList();
