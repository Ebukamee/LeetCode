<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return NULL
     */
    function flatten(&$root) {

    $current = $root;

    while ($current != null) {

        if ($current->left != null) {

            $rightMost = $current->left;

            while ($rightMost->right != null) {
                $rightMost = $rightMost->right;
            }

            $rightMost->right = $current->right;

            $current->right = $current->left;

            $current->left = null;
        }

        $current = $current->right;
    }
}
}