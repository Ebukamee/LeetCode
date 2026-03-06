function arrayStringsAreEqual(word1: string[], word2: string[]): boolean {

    let str1 = word1.join("")
    let str2 = word2.join("")

    return str1 === str2
}