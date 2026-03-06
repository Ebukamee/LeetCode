function maximum69Number(num: number): number {

    let str = num.toString()

    let result = ""

    let changed = false

    for (let char of str) {

        if (char === "6" && !changed) {
            result += "9"
            changed = true
        } else {
            result += char
        }
    }

    return Number(result)
}