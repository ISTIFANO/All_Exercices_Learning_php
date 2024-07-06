import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { Home, Services } from '../src/components/index'; // Importez le composant Services depuis son emplacement correct
import Nosrealisations from '../src/components/Nosrealisations'; //
import ContactPage from '../src/components/ContactPage';
function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/services" element={<Services />} /> 
        <Route path="/nosrealisations" element={<Nosrealisations />} />
        <Route path="/ContactPage" element={<ContactPage />} />
        </Routes>  
        </Router>
  );
}

export default App;
