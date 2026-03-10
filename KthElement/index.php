<?php
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {

    $count = 0;
    $result = 0;

    $inorder = function($node) use (&$count, &$result, $k, &$inorder) {

        if (!$node) return;

        $inorder($node->left);

        $count++;

        if ($count == $k) {
            $result = $node->val;
            return;
        }

        $inorder($node->right);
    };

    $inorder($root);

    return $result;
}
}