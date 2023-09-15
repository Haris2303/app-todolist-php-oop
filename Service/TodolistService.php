<?php

namespace Service {

    use Repository\TodolistRepository;

    interface TodolistService
    {

        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todolistRepository->findAll() as $number => $item) {
                echo "$number. $item" . PHP_EOL;
            }
        }

        public function addTodolist(string $todo): void
        {
        }

        public function removeTodolist(int $number): void
        {
        }
    }
}
