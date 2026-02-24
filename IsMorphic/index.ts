function isIsomorphic(s: string, t: string): boolean {
    if (s.length !== t.length) return false;

    const sToT = new Map<string, string>();
    const tToS = new Map<string, string>();

    for (let i = 0; i < s.length; i++) {
        const charS = s[i];
        const charT = t[i];

        if (sToT.has(charS)) {
            if (sToT.get(charS) !== charT) {
                return false;
            }
        } else {
            if (tToS.has(charT) && tToS.get(charT) !== charS) {
                return false;
            }

            sToT.set(charS, charT);
            tToS.set(charT, charS);
        }
    }

    return true;
}