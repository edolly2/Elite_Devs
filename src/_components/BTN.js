import React from 'react';
import './BTN.css';

function BTN(props) {
    return (
        <div className={props.btnContainer}>
            <button className={props.btnClass}>
                {props.btnText}
            </button>
        </div>
    )
}

export default BTN;
