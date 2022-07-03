<?php

declare(strict_types=1);

namespace App\BinaryTree;

class BinaryNode
{

    public ?int $value = null; // node value
    public ?BinaryNode $left = null; // left child
    public ?BinaryNode $right = null; // right child

    public function __construct(int $value)
    {
        $this->value = $value;
    }

}
