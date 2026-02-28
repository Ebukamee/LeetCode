function reverseWords(s: string): string {
    const words = s.split(" ");
    const reversed = words.map(word =>
        word.split("").reverse().join("")
    );
    return reversed.join(" ");
}