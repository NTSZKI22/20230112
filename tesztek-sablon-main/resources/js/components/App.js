import Button from "./Button";
import Checkbox from "./Checkbox";
import Link from "./Link";

export default function App() {

    return (
        <>
            <h1>Button: </h1>
            <Button>Button.js</Button>
            <hr />
            <h1>Checkbox: </h1>
            <Checkbox labelOn="Bekapcs" labelOff="Kikapcs" />
            <hr />
            <h1>Link</h1>
            <Link page="https://google.com">Google</Link>
        </>
    )
}
