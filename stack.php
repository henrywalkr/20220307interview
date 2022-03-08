<?php

class stack
{
    public $number;
    public $next;
}

class linkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function push($newNumber)
    {
        $newStack = new stack();
        $newStack->number = $newNumber;
        $newStack->next = $this->head;
        $this->head = $newStack;
    }

    public function pop()
    {
        if ($this->head != null) {
            $temp = $this->head;
            $this->head = $this->head->next;
            $temp = null;
        }
    }

    public function size()
    {
        $temp = new stack();
        $temp = $this->head;
        $i = 0;
        while ($temp != null) {
            $i++;
            $temp = $temp->next;
        }
        return $i;
    }

    public function printList()
    {
        $temp = new stack();
        $temp = $this->head;
        if ($temp != null) {
            echo "The stack contains: ";
            while ($temp != null) {
                echo $temp->number . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The stack is empty.\n";
        }
    }
};

$stack = new linkedList();
$stack->printList(); // empty
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->printList(); // 3 2 1
echo $stack->size() . "\n"; // 3
$stack->pop(); // 3 
echo $stack->size() . "\n"; // 2 
$stack->printList();// 2 1
