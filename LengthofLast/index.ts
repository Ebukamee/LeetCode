function lengthOfLastWord(s: string): number {
    let length = 0;
    let i = s.length - 1;

    // Skip trailing spaces
    while (i >= 0 && s[i] === ' ') {
        i--;
    }

    // Count letters of the last word
    while (i >= 0 && s[i] !== ' ') {
        length++;
        i--;
    }

    return length;
}
