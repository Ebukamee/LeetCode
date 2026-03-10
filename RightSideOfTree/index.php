<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function rightSideView($root) {

    if ($root == null) return [];

    $result = [];
    $queue = [$root];

    while (count($queue) > 0) {

        $levelSize = count($queue);

        for ($i = 0; $i < $levelSize; $i++) {

            $node = array_shift($queue);

            if ($i == $levelSize - 1) {
                $result[] = $node->val;
            }

            if ($node->left) $queue[] = $node->left;

            if ($node->right) $queue[] = $node->right;
        }
    }

    return $result;
}
}