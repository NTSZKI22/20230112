const{
    joinArrayElements,
    stringSearch,
} = require("../../resources/js/functions/string");

test("joins array elements with char", () => {
    const array = [
        'alma',
        'körte',
        'szilva'
    ];
    const char = '*';

    expect(joinArrayElements(char, array)).toBe(array.join(char));
})

test("search element in array", () => {
    const string = 'kaka';
    const element = 'a';

    expect(stringSearch(string, element)).toBe(true);

})