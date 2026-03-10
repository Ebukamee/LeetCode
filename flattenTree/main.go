package flattentree

func flatten(root *TreeNode) {

	current := root

	for current != nil {

		if current.Left != nil {

			rightMost := current.Left

			for rightMost.Right != nil {
				rightMost = rightMost.Right
			}

			rightMost.Right = current.Right

			current.Right = current.Left

			current.Left = nil
		}

		current = current.Right
	}
}
