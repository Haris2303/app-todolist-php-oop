<?php

require_once '../View/ViewShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList('Memasak');
addTodoList('Main Bola');
addTodoList('Bantu Emak');

viewShowTodoList();
