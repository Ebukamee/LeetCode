<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
	if ($root == null) {
		return true;
	}
	return $this->isMirror($root->left, $root->right);
}

function isMirror($a, $b) {
	if ($a == null && $b == null) {
		return true;
	}
	if ($a == null || $b == null) {
		return false;
	}
	if ($a->val !=  $b->val) {
		return false;
	}

	return $this->isMirror($a->left, $b->right) && $this->isMirror($a->right, $b->left);
}
}