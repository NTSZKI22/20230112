import { render, fireEvent, screen, getByRole} from "@testing-library/react";
import App from "../../resources/js/components/App";

test("App", () =>{
    const { queryByLabelText, getByLabelText } = render(<App />)

    expect(screen.getByText("Button:")).toBeTruthy()
    expect(screen.getByText("Button.js")).toBeTruthy()
    expect(screen.getByText("Checkbox:")).toBeTruthy()
    expect(screen.getByText("Kikapcs")).toBeTruthy()
    expect(screen.getByText("Link")).toBeTruthy()
    expect(screen.getByText("Google")).toBeTruthy()
})