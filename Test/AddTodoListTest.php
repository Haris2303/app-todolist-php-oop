<?php

require_once '../Model/TodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList("Memasak");
addTodoList("Bermain Game");
addTodoList("Belajar");

var_dump($todolist);
