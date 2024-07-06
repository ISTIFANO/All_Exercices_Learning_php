import logo from './logo.svg';
import './App.css';
import Navbar from './Components/Navbar';
import About from './Components/About';
import Categories from './Components/Categories';
import Blog from './Components/Blog';
import Lestops from './Components/Lestops';
import Entreprises from './Components/Entreprises';



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
      </div>
    </Router>
    </>
  );
}
