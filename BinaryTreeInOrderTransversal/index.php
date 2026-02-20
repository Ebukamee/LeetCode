<?php
class Solution {

    function inorderTraversal($root) {
        $result = [];

        $traverse = function ($node) use (&$result, &$traverse) {
            if ($node === null) {
                return;
            }

            $traverse($node->left);
            $result[] = $node->val;
            $traverse($node->right);
        };

        $traverse($root);
        return $result;
    }
}
