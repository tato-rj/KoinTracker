percentage = function(piece, total) {
    return parseInt(piece * 100 / total);
}

currency = function(amount, symbol = null) {
	let number = parseFloat(amount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
	return symbol ? symbol + number : number;
};
