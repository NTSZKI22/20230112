const app = require("../../resources/js/functions/app.js")

test("sum", () => {
    expect(app(1,2)).toBe(3)

})
import { render, fireEvent, screen, getByRole} from "@testing-library/react";
import Button from "../../resources/js/components/Button";


test("Button - Button.js", () =>{
    const {getByTestId, getByText} = render(<Button>Button.js</Button>)
    const input = screen.getByDisplayValue("0")
    const button = getByText("Button.js")

    fireEvent.click(button)
    expect(input.value).toBe("1")

    fireEvent.click(button)
    expect(input.value).toBe("2")

    fireEvent.click(button)
    expect(input.value).toBe("3")
})

test("Button - Szín", () => {
    const {getByTestId, getByText} = render(<Button>Button.js</Button>)

    const square = getByTestId("square")
    const button = getByText("Kék")

    expect(square.style.backgroundColor).toBe('red')
    fireEvent.click(button)
    expect(square.style.backgroundColor).toBe('blue')

    fireEvent.mouseEnter(square)
    expect(square.style.backgroundColor).toBe('green')

    fireEvent.click(button)
    expect(square.style.backgroundColor).toBe('blue')
})