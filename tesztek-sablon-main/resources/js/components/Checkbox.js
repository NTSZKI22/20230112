import {useState} from "react";

export default function Checkbox(props) {
    const [isChecked, setIsChecked] = useState(false)

    const onChange =  () => {
        setIsChecked(!isChecked);
    }

    const {
        labelOn,
        labelOff
    } = props;

    return (
        <label>
            <input type="checkbox" checked={isChecked} onChange={onChange}/>
            {isChecked ? labelOn : labelOff}
        </label>
    )
}
