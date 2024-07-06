import logo from './logo.svg';
import './App.css';
import Navbar from './Components/Navbar';
import Form from './Components/Form';
import Timer from './Components/Amr';
import { Children, createElement } from 'react';

function App() {
  const age = 20;
  const fruits = ["apple", "banana", "orange", "grape", "kiwi"];

  const status = age > 12 ? "adulte" : "minor"; 
   return (
    
    <div className="App">
 <Navbar lastname='project' status={status}/>
 <Form />
 <test />
    </div>
  );
}

export default App;
