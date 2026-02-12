function letterCombinations(digits: string): string[] {
    if (digits.length === 0) return []

    const map : Record<string,string> = {
        "2": "abc",
        "3": "def",
        "4": "ghi",
        "5": "jkl",
        "6": "mno",
        "7": "pqrs",
        "8": "tuv",
        "9": "wxyz"
    }
    const result : string[] = []

    function RecursiveBuild(i:number,current:string) {

        if(i==digits.length) {
            result.push(current)
            return;
        }
           const letters = map[digits[i]];

        for (const letter of letters) {
            RecursiveBuild(i + 1, current + letter);
        }

    }
    RecursiveBuild(0,'')
    return result
};