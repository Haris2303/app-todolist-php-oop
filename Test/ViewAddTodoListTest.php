<?php

require_once '../View/ViewAddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList('Bangun Pagi');
addTodoList('Gosok Gigi');
addTodoList('Cuci Muka');
addTodoList('Main Lagi');

showTodoList();

viewAddTodoList();

showTodoList();
