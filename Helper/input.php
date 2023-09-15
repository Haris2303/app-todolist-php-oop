<?php

function input(string $message)
{
    echo $message;
    return trim(fgets(STDIN));
}
