function checkRecord(s: string): boolean {
    let absentCount = 0;
    let lateStreak = 0;

    for (let char of s) {
        if (char === 'A') {
            absentCount++;
            lateStreak = 0;
        } else if (char === 'L') {
            lateStreak++;
            if (lateStreak === 3) return false;
        } else {
            lateStreak = 0;
        }

        if (absentCount === 2) return false;
    }

    return true;
}