import {useState} from "react";

const STATUSES = {
    HOVERED: 'hovered',
    NORMAL: 'normal'
}

export default function Link(props) {
    const [status, setStatus] = useState();

    const onMouseEnter = () => {
        setStatus(STATUSES.HOVERED)
    }

    const onMouseLeave = () => {
        setStatus(STATUSES.NORMAL)
    }

    const {
        page,
        children
    } = props;

    return (
      <a
        className={status}
        href={page || '#'}
        onMouseEnter={onMouseEnter}
        onMouseLeave={onMouseLeave}
      >
          {children}
      </a>
    );
}
