function order(words) {
    // ...
    var object = {};
    words.split(" ").forEach(word => {
        var key = word.split("").filter(char => parseInt(char));
        var value = word;
        object[key] = value;
    });
    var result = Object.entries(object).map(([key, value]) => value);
    return result.join(" ");
}