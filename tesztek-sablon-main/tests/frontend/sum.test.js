const app = require("../../resources/js/functions/app.js")

test("sum", () => {
    expect(app(1,2)).toBe(3)

})