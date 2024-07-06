import React from 'react';

export default function Form() {
    const handleButtonClick = () => {
        alert("Button clicked!");
    };

    return (
        <>
            <label htmlFor="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" />
            <br />
            <label htmlFor="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" />
            <br />
            <label htmlFor="password">Password:</label>
            <input type="password" id="password" name="password" />
            <br />
            <button type="button" onClick={handleButtonClick}>Submit</button>
        </>
    );
}
