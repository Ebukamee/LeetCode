function isSymmetric(root : TreeNode | null): boolean {
	if (root == null) {
		return true
	}
	return isMirror(root.left, root.right)
}

function isMirror(a:TreeNode | null, b:TreeNode | null): boolean {
	if (a == null && b == null) {
		return true
	}
	if (a == null || b == null) {
		return false
	}
	if (a.val != b.val) {
		return false
	}

	return isMirror(a.left, b.right) && isMirror(a.right, b.left)
}