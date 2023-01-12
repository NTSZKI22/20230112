function joinArrayElements(separator, array)
{
    let string = '';
    array.forEach(function(value, index) {
        if (index < array.length - 1) {
            string += value + separator;
        } else {
            string += value;
        }
    })
    return string;
}

function stringSearch(string, search) {
    let found = false;

    for (let i = 0; i < string.length; i++) {
        if (string.charAt(i) === search) {
            found = true;
            i = string.length;
        }
    }

    return found;
}

module.exports = {
    joinArrayElements,
    stringSearch
};
