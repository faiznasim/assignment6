<?php

class queue
{
    private $queue;
    private $position;

    function __construct()
    {
        $this->queue = array();
        $this->position = 0;
        $this->pos = 0;
    }

    function enqueue($item)
    {
        $this->queue[$this->position] = $item;
        $this->position++;
    }

    function dequeue()
    {
         return $this->queue[$this->pos++];
    }
}

$queue = new queue();

$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

echo $queue->dequeue()."<br/>";
echo $queue->dequeue()."<br/>";

$queue->enqueue(40);
$queue->enqueue(50);

echo $queue->dequeue()."<br/>";
echo $queue->dequeue()."<br/>";