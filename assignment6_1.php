<?php

class stack
{
    private $stack;
    private $position;

    function __construct()
    {
        $this->stack = array();
        $this->position = 0;
    }

    function push($item)
    {
        $this->stack[$this->position] = $item;
        $this->position++;
    }

    function pop()
    {
         $this->position--;
         return $this->stack[$this->position];
    }
}

$stack = new stack();

$stack->push(10);
$stack->push(20);
$stack->push(30);

echo $stack->pop()."<br/>";
echo $stack->pop()."<br/>";

$stack->push(40);
$stack->push(50);

echo $stack->pop()."<br/>";
echo $stack->pop()."<br/>"; 