function countCharacters(words: string[], chars: string): number {

    let totalLength = 0

    const baseCount: Record<string, number> = {}

    for (let char of chars) {
        baseCount[char] = (baseCount[char] || 0) + 1
    }

    for (let word of words) {

        const tempCount: Record<string, number> = {}

        let valid = true

        for (let char of word) {

            tempCount[char] = (tempCount[char] || 0) + 1

            if (tempCount[char] > (baseCount[char] || 0)) {
                valid = false
                break
            }
        }

        if (valid) totalLength += word.length
    }

    return totalLength
}