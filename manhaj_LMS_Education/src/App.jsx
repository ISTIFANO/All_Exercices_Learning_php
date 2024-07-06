import React from 'react';                // Import du composant 
import Navbar from './Components/Navbar';
import About from './Components/About';
import Categories from './Components/Categories';
import Blog from './Components/Blog';
import Lestops from './Components/Lestops';
  import Function from './Components/Seaaa'; 

import Entreprises from './Components/Entreprises';
import Banner from './Components/Banner';
import Card from './Components/banner_card';
import Thematiques from './Components/Thematiques';
import Grid from './Components/Grid';
import Cours from './Components/Cours';
import Sections from './Components/Sections'; 
import TopCategories from './Components/Rite';

import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

export default function App() {
  return (
    <>
      <Router>
        <div className="App">
          <Navbar />
          <Routes>
            {/* <Route path="/" element={<Home />} /> */}
            <Route path="/About" element={<About />} />
            <Route path="/Categories" element={<Categories />} />
            <Route path="/Blog" element={<Blog />} />
            <Route path="/Lestops" element={<Lestops />} />
            <Route path="/Entreprises" element={<Entreprises />} />
          </Routes>
          <Banner/>
          <Card/>
        </div>
        <Thematiques/>
        <Grid className="pt-16"/>
        <Cours className="pt-16"/> 
        <Sections className="pt-16"/>
        <TopCategories className="pt-9"/>  {/* Ajout du composant Sections1 ici */}
         <Function /> 
        {/*  */}
      </Router>
    </>
  );
}
