import { Link } from "react-router-dom";

import logo from '../images/logoLMS.png';
export default function Navbar() {
    return (
        <header className="bg-white">
        <div className="mx-auto max-w-screen-3xl pt-4 px-4 sm:px-6 lg:px-8">
          <div className="flex h-16 items-center justify-between">
            <div className="md:flex md:items-center md:gap-12">
            <Link to="/" className="block text-teal-600 ">
              <span className="sr-only">Home</span>
              <img src={logo} alt="logo" className="w-122 h-33" />
            </Link>
            </div>
      
            <div className="hidden md:block">
              <nav aria-label="Global">
                <ul className="flex items-center pt-6  gap-6 text-sm">
                <div className="mr-96  pr-24 space-x-11 flex h-16 items-center justify-between">
                  <li>
                     <Link className="text-gray-500 text-2xl transition hover:text-gray-500/75" to="/About">About</Link> 
                  </li>
                  <li>
                      <Link className="text-gray-500 text-2xl  transition hover:text-gray-500/75" to="/Careers">Careers</Link> 
                  </li>
                  </div>
                  <li>
                    <Link className="text-gray-500 text-2xl transition hover:text-gray-500/75" to="/Blog">Blog</Link>   

                  </li>
      
                  <li>
                  <Link  className="text-gray-500 text-2xl space-x-11 transition hover:text-gray-500/75" to="/Les tops">Les tops</Link>
                  </li>
      
                  <li>
                    <Link to="/Categories" className="text-gray-500 pr-24 text-2xl transition hover:text-gray-500/75" >Categories</Link> 
                  </li>
                </ul>
              </nav>
            </div>
      
            <div className="flex items-center pt-8 gap-4">
            <div className="dropdown dropdown-hover">
              <div tabIndex={0} role="button" className="btn m-1">Hover</div>
              <ul tabIndex={0} className="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
              </ul>
            </div>
      
                <div className="hidden sm:flex">
                  <a
                    className="rounded-md bg-[#b8e4e5] px-5 py-2.5 text-sm font-medium text-[#5592fb]"
                    href="#"
                  >
                    SECONNECTER
                  </a>
                </div>
              </div>
      
              <div className="block md:hidden">
                <button className="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
      
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    className="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    strokeWidth="2"
                  >
                    <path strokeLinecap="round" strokeLinejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
              </div>
              </div>
          
      </header>
    )
  }