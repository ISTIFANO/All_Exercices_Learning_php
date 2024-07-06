import { FaBriefcase, FaUser, FaPalette, FaDesktop, FaChalkboardTeacher, FaMedkit, FaCalculator, FaFlask, FaUsers, FaDatabase, FaCode, FaTools } from 'react-icons/fa';

export default function Thematiques() {
    const themes = [
        { name: "Développement Professionnel", icon: FaBriefcase, link: "/developpement-professionnel" },
        { name: "Développement Personnel", icon: FaUser, link: "/developpement-personnel" },
        { name: "Arts, Design et Créativité", icon: FaPalette, link: "/arts-design-creativite" },
        { name: "Informatique", icon: FaDesktop, link: "/informatique" },
        { name: "Éducation et Enseignement", icon: FaChalkboardTeacher, link: "/education-enseignement" },
        { name: "Santé et Médecine", icon: FaMedkit, link: "/sante-medecine" },
        { name: "Mathématiques", icon: FaCalculator, link: "/mathematiques" },
        { name: "Sciences", icon: FaFlask, link: "/sciences" },
        { name: "Sciences Humaines", icon: FaUsers, link: "/sciences-humaines" },
        { name: "Data Science", icon: FaDatabase, link: "/data-science" },
        { name: "Programmation", icon: FaCode, link: "/programmation" },
        { name: "Ingénierie", icon: FaTools, link: "/ingenierie" }
      ];

  const firstSixThemes = themes.slice(0, 6);
  const lastSixThemes = themes.slice(6);

  return (
    <div className="mx-auto max-w-full p-14 text-center relative">
      <h1 className="text-6xl text-blue-600 font-extrabold mb-10 sm:text-4xl">
        LES THÉMATIQUES
      </h1>
      <div className="flex justify-center items-center flex-wrap">
        <div className="w-full ">   {/* <div className="w-full md:w-1/2md:mt-0 "> */}
          <div className="flex flex-wrap justify-center space-x-12 pb-12 items-center">
            {firstSixThemes.map((theme, index) => (
              <div key={index} className="m-2 flex flex-col items-center">
                <a href={theme.link}>
                <div className="bg-blue-500 text-white w-28 rounded-full p-4 pr-2">
                  <theme.icon className="text-white text-6xl" />
                </div>
                <span className="mt-2  text-2xl">{theme.name}</span>
                </a>
              </div>
            ))}
          </div>
        </div>
      
        <div className="w-full md:w-1/2md:mt-0 pt-20 ">
          <div className="flex flex-wrap justify-center space-x-28 items-center">
            {lastSixThemes.map((theme, index) => (
              <div key={index} className="m-2 flex flex-col items-center">
                <a href={theme.link}>
                <div className="bg-blue-500 text-white w-28  items-center rounded-full p-4 pr-2">
                  <theme.icon className="text-white text-6xl" />
                </div>
                <span className="mt-2 text-2xl">{theme.name}</span>
                </a>
              </div>
            ))}
          </div>
        </div>
      </div>
      <div className="mt-8">
              <button className="bg-blue-400 text-white px-12 mt-[79px] text-2xl py-3 rounded hover:bg-blue-400 focus:outline-none focus:ring active:bg-blue-950">VOIR TOUTES LES CATÉGORIES </button>
            </div>
    </div>
    
  );
}
