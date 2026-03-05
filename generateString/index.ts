function generateTheString(n:number):string {
	if(n%2 != 0) {
		return "a".repeat(n);
	} else {
		return "a".repeat(n-1) + "b";
	}
}
