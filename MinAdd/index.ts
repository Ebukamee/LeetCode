function minAddToMakeValid(s: string): number {

    let balance = 0
    let moves = 0

    for (const c of s) {

        if (c === "(") {
            balance++
        } else {

            if (balance > 0) {
                balance--
            } else {
                moves++
            }
        }
    }

    return moves + balance
}