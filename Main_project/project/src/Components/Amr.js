// import React from 'react';
// const fruits = ["apple", "banana", "orange", "grape", "kiwi"];

// function Test({ fruits }) {
//   // Function to render list items for each fruit
//   const renderFruits = () => {
//     return fruits.map((fruit, index) => (
//       <li key={index}>{fruit}</li>
//     ));
//   };

//   return (
//     <div>
//       <h2>List of Fruits:</h2>
//       <ul>
//         {renderFruits()}
//       </ul>
//     </div>
//   );
// }

// // export default Test;
// import React, { useState, useEffect } from 'react';

// function Timer() {
//   // State for the counter
//   const [seconds, setSeconds] = useState(0); // geter and seter

//   // useEffect hook to update the counter every second
//   useEffect(() => {
//     const interval = setInterval(() => {
//       setSeconds(prevSeconds => prevSeconds + 1);
//     }, 1000);

//     // Clean up function to clear the interval when the component unmounts
//     return () => clearInterval(interval);
//   }, []); // Empty dependency array ensures the effect runs only once when the component mounts

//   return (
//     <div>
//       <h2>Timer: {seconds} seconds</h2>
//     </div>
//   );
// }

// export default Timer;
import {Component, useState} from "react";

export default function FruitList() {

    const [fruit,setFruit] = useState('')
    const [fruitList, setFruitList] = useState([])
    const displayFruits = () => fruitList.map((fruit,fruitKey) => <li key={fruitKey}>{fruit}</li>)
    const handleInput = () => {
        const fruitValue = document.querySelector('#fruit').value
        setFruit(fruitValue)
    }

    const handleAddFruit = (e) => {
        e.preventDefault()
        setFruitList([...fruitList, fruit])
    }
    return <>
        <span>
            <form>
                <input onChange={handleInput} type="text" id='fruit'/>
                <input onClick={handleAddFruit} type="submit" value='Add fruit'/>
            </form>
        </span>
        <h1 className='h1'>Fruits : </h1>
        <ul>
            {displayFruits()}
        </ul>
    </>
}
