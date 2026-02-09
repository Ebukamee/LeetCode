 function convert(s: string, numRows: number): string {
    if(numRows === 1) return s
    const rows: string[] = new Array(numRows).fill('')
    let currentRow = 0
    let goingDown = true

    for (const letter of s) {
        rows[currentRow] += letter
        if(currentRow === 0) goingDown = true
        if(currentRow === numRows - 1) goingDown = false
        currentRow += goingDown ? 1 : -1
    }

    return rows.join('')
};