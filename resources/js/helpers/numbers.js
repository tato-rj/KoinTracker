percentage = function(piece, total) {
    return parseInt(piece * 100 / total);
}

moneyToFloat = function(money) {
	return Number(money.replace(/[^0-9.-]+/g,""));
}

// currency = function(amount, symbol = null) {
// 	let number = parseFloat(amount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
// 	return symbol ? symbol + number : number;
// };
