<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {

        public array $todolist = array();

        public function save(Todolist $todolist): void
        {
        }

        public function remove(int $number): bool
        {
        }

        public function findAll(): array
        {
            return $this->todolist;
        }
    }
}
