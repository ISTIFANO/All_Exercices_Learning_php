import  { useState } from "react";
import logo from "../assets/moritlogo.png";
import { FaPhone } from "react-icons/fa";
import { Link } from "react-router-dom";
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

import ContactPage from "./ContactPage";
const Navbar = () => {
  const [showMenu, setShowMenu] = useState(false);

  const toggleMenu = () => {
    setShowMenu(!showMenu);
  };

  const closeMenu = () => {
    setShowMenu(false);
  };

  return (
    <header className="bg-[#f0efef] w-screen h-20 z-20">
      <div className="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div className="flex h-16 items-center justify-between">
          <div className="md:flex md:items-center md:gap-12">
            <Link className="block text-teal-600" to="Home">
              <img src={logo} alt="Logo" className="h-14 w-40" />
            </Link>
          </div>

          <div className="hidden md:block pr-10">
            <nav aria-label="Global">
              <ul className="flex items-center gap-6 text-lg transition text-blue-500">
                <li>
                  <Link
                    className="p-2 hover:border-b-red-500/75 hover:border-b-2 "
                    to="Accueil"
                  >
                    Accueil
                  </Link>
                </li>

                <li>
                  <Link to="Services" className="page-scroll">
                    <div className="relative inline-block text-left">
                      <div className="relative group">
                        <Link
                          to="Services"
                          className="page-scroll text-blue-500 text-lg "
                        >
                          Nos Services{" "}
                        </Link>
                        <div className="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                          <Link
                            to="GESTION_COMMERCIALE"
                            className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                          >
                            Materiel informatique{" "}
                          </Link>
                          
                          <Link
                            to="GESTION_DES_PROJETS"
                            className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                          >
                            Maintenance
                          </Link>
                          <Link
                            to="GESTION_DES_ASSURANCES"
                            className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                          >
                            Developpement{" "}
                          </Link>
                          <Link
                            to="GESTION_DES_ECOLES"
                            className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                          >
                            Formation{" "}
                          </Link>
                        </div>
                      </div>
                    </div>
                  </Link>
                </li>

                <li>
                  <li>
                    <Link to="Logiciels" className="page-scroll">
                      <div className="relative inline-block text-left">
                        <div className="relative group">
                          <Link
                            to="Logiciels"
                            className="page-scroll text-blue-500 text-lg "
                          >
                            Nos Logiciels
                          </Link>
                          <div className="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <Link
                              to="Gestion_Commerciel"
                              className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                            >
                              Gestion Commerciel
                            </Link>
                            <Link
                              to="Gestion_Des_PROJETS"
                              className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                            >
                              Gestion Des PROJETS
                            </Link>
                            <Link
                              to="Gestion_Des_Assurances"
                              className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                            >
                              Gestion Des Assurances
                            </Link>
                            <Link
                              to="Gestion_Des_Ecoles"
                              className="block px-4 py-2 text-blue-800 hover:bg-gray-200"
                            >
                              Gestion Des Ecoles
                            </Link>
                          </div>
                        </div>
                      </div>
                    </Link>
                  </li>
                </li>

                <li>
                  <Link
                    className=" p-2 hover:border-b-red-500/75 hover:border-b-2  "
                    to="Blog"
                  >
                    Blog
                  </Link>
                </li>
                <li>
                  <Link
                    className=" p-2 hover:border-b-red-500/75 hover:border-b-2  "
                    to="nosrealisations"
                  >
                   nos-realisations
                  </Link>
                </li>
                <li>
                  <Link
                    className="p-2 hover:border-b-red-500/75 hover:border-b-2   "
                    to="ContactPage"
                  >
                    Contacts
                  </Link>
                </li>
              </ul>
            </nav>
          </div>  
          <div className="absolute left-[80%] top-[0%]">
  <div className="absolute top-1 left-0 p-3 hidden lg:block border-r-2 border-gray-500 h-14 ">
    <FaPhone className="w-10 h-10 text-gray-700" />
  </div>
  <div className="absolute top-0 left-16 p-4 hidden lg:block">
    <p className="text-blue-500">Service Client</p>
    <p className="text-blue-700 font-bold">+212661316191</p>
  </div>
</div>

          <div className="flex items-center gap-4">
            <div className="block md:hidden">
              <button
                className="rounded bg-blue-100 p-2 text-blue-600 transition hover:text-blue-600/75"
                onClick={toggleMenu}
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  strokeWidth="2"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      {/* Mobile Menu */}
      <div
        className={`fixed inset-0 z-50 bg-blue-100 transition-transform duration-300 transform ${
          showMenu ? "translate-x-0" : "-translate-x-full"
        } md:hidden`}
      >
        <nav aria-label="Mobile Global" className="flex flex-col  h-full">
          <button
            className="self-end mr-4 p-2 rounded-full bg-blue-600 text-white mt-5"
            onClick={closeMenu}
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M6 18L18 6M6 6l12 12"
              />
            </svg>
          </button>
          <ul className="flex flex-col gap-4 justify-center items-center text-lg mt-[40%]">
            <li>
              <Link className="p-2 hover:text-red-500" to="Accueil">
                Accueil
              </Link>
            </li>
            <li>
              <Link className="p-2 hover:text-red-500" to="Services">
                Nos Services
              </Link>
            </li>

            <li>
              <Link className="p-2 hover:text-red-500" to="Logiciels">
                Nos Logiciels
              </Link>
            </li>

            <li>
              <Link className="p-2 hover:text-red-500" to="Blog">
                Blog
              </Link>
            </li>

            <li>
              <Link className="p-2 hover:text-red-500" to="Contact">
                Contacts
              </Link>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  );
};

export default Navbar;
