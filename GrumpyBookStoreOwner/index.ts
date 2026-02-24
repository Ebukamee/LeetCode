function maxSatisfied(customers : number[], grumpy: number[], minutes: number): number {
    let baseSatisfied = 0;
    let extraSatisfied = 0;
    let maxExtraSatisfied = 0;

    for (let i = 0; i < customers.length; i++) {
        if (grumpy[i] === 0) {
            baseSatisfied += customers[i];
        }
    }

    for (let i = 0; i < minutes; i++) {
        if (grumpy[i] === 1) {
            extraSatisfied += customers[i];
        }
    }

    maxExtraSatisfied = extraSatisfied;

    for (let i = minutes; i < customers.length; i++) {
        if (grumpy[i] === 1) {
            extraSatisfied += customers[i];
        }
        if (grumpy[i - minutes] === 1) {
            extraSatisfied -= customers[i - minutes];
        }
        maxExtraSatisfied = Math.max(maxExtraSatisfied, extraSatisfied);
    }

    return baseSatisfied + maxExtraSatisfied;
}