stripTags = function(str) {
	return str.replace(/(<([^>]+)>)/gi, "");
}