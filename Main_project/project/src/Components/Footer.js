import React from 'react';
import Navbar from './Navbar';
import Form from './Form';

function App() {
  const age = 20;
  
  let content;
  if (age < 212) {
    content = (
      <div className="App">
        <Navbar lastname="project" />
        <Form />
      </div>
    );
  } else {
    content = (
      <div className="App">
        {/* Render something else if age is greater than or equal to 212 */}
      </div>
    );
  }

  return content;
}

export default App;
