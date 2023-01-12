import {useState} from "react";

export default function Button({children}) {
    const [inputValue, setInputValue] = useState(0);
    const [background, setBackground] = useState('red');

    const onClick = () => {
        setInputValue(parseInt(inputValue) + 1);
    }

    const blueCLick = () => {
        setBackground('blue')
    }

    const changeGreen = () => {
        setBackground('green')
    }

    return(
      <div>
          <input type="text" value={inputValue} readOnly />
          <br />
          <br />
          <button onClick={onClick}>
              {children}
          </button><br /><br />
          <button onClick={blueCLick}>
              Kék
          </button>
          <div
              onMouseEnter={changeGreen}
              data-testid='square'
              style={{width: "50px", height: "50px", background: background}}
          >

          </div>
      </div>
    );
}
