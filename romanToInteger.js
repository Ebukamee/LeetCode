/**
 * @param {string} s
 * @return {number}
 */
const romanToInt = function(s) {
    const map = {
        I : 1,
        V : 5,
        X : 10,
        L : 50,
        C : 100,
        D : 500,
        M : 1000
    };
    let soln = 0;
    s.split('').forEach((num, i) => {
        if(map[num] < map [s[i + 1]]) {
            soln -= map[num]
        }
        else {
            soln += map[num]
        }
    });

    return soln
};
