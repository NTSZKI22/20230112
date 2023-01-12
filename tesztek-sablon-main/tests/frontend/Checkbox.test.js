import { cleanup, fireEvent, render } from "@testing-library/react";
import Checkbox from "../../resources/js/components/Checkbox";

afterEach(cleanup);

it('tests checkbox label changes', () => {
    const { queryByLabelText, getByLabelText } = render(
        <Checkbox labelOff="ki" labelOn="be" />
    );

    expect(queryByLabelText(/ki/i)).toBeTruthy()

    fireEvent.click(getByLabelText(/ki/i))

    expect(queryByLabelText(/be/i)).toBeTruthy();

});