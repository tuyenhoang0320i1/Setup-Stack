<?php


class Stack
{
    private $stack;
    private $limit;

    public function __construct($stack, $limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    public function top()
    {
        return array_shift($this->stack);
    }

    public function isEmpty()
    {
        if (empty($this->stack))
        {
            return "Stack rong";
        } else
        {
            return "Khong phai stack rong";
        }
    }
}

$myStack = new Stack(5,5);
$myStack->push(5);
$myStack->push(7);
$myStack->push(9);
$myStack->push(10);
$myStack->push(1);

echo "<pre>";
print_r($myStack);
echo "</pre>";

$myStack->pop();
$myStack->pop();
$myStack->pop();

echo "<pre>";
print_r($myStack);
echo "</pre>";

$myStack->push(4);
$myStack->push(3);

echo "<pre>";
print_r($myStack);
echo "</pre>";

echo "<pre>";
print_r($myStack->isEmpty());
echo "</pre>";

$myStack->pop();
$myStack->pop();
$myStack->pop();
$myStack->pop();
//echo "<pre>";
//print_r($myStack->top() . " : la phan tu tren cung cua stack");
//echo "</pre>";

echo "<pre>";
print_r($myStack->isEmpty());
echo "</pre>";


