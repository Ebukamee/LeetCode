function findTheDifference(s: string, t: string): string {
    let xor = 0;

    for (const ch of s) {
        xor ^= ch.charCodeAt(0);
    }

    for (const ch of t) {
        xor ^= ch.charCodeAt(0);
    }

    return String.fromCharCode(xor);
}