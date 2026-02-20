package binarytreeinordertransversal

func inorderTraversal(root *TreeNode) []int {
	result := []int{}

	var transverse func(node *TreeNode)

	transverse = func(node *TreeNode) {
		if node == nil {
			return
		}
		transverse(node.Left)
		result = append(result, node.Val)
		transverse(node.right)
	}
	transverse(root)
	return result
}
