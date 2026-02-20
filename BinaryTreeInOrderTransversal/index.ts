function inorderTraversal(root :TreeNode | null):number[] {
	let result: number[] = []


	function transverse (node:TreeNode |null) {
		if (node == null) {
			return
		}
		transverse(node.left)
		result.push(node.val)
		transverse(node.right)
	}
	transverse(root)
	return result
}