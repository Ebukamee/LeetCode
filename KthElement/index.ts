function kthSmallest(root: TreeNode | null, k: number): number {

    let count = 0
    let result = 0

    function inorder(node: TreeNode | null) {
        if (!node) return

        inorder(node.left)

        count++
        if (count === k) {
            result = node.val
            return
        }

        inorder(node.right)
    }

    inorder(root)
    return result
}