<?php

declare(strict_types=1);

namespace App\BinaryTree;

class TreeInversion
{
    public static function invert(BinaryNode $root): BinaryNode
    {
        return self::invertTree($root);
    }

    private static function invertTree($node)
    {
        [$node->left, $node->right] = [$node->right, $node->left];
        if ($node->left || $node->right) {
            self::invertTree($node->left);
            self::invertTree($node->right);
        }
        return $node;
    }

}
