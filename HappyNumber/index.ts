function isHappy(n: number): boolean {
    const seen = new Set<number>();

    while (n !== 1) {
        if (seen.has(n)) {
            return false;
        }

        seen.add(n);
        n = sumOfSquares(n);
    }

    return true;
}

function sumOfSquares(num: number): number {
    let sum = 0;

    while (num > 0) {
        const digit = num % 10;
        sum += digit * digit;
        num = Math.floor(num / 10);
    }

    return sum;
}