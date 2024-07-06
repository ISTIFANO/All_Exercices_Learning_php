import logo from '../images/logoLMS.png';
import { Link } from 'react-router-dom'; // Assurez-vous d'importer Link depuis react-router-dom s'il n'est pas déjà importé

export default function Sections1() {
    return (
        <section>
            <div className="mx-auto max-w-screen-3xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <div className="mx-auto max-w-full  text-center relative">
      <h1 className="text-6xl text-blue-600 font-extrabold mb-10 sm:text-4xl">
      QU'EST CE QUE Manhaj ?
      </h1>
                </div>

                <div className="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div className="relative h-72 ml-64 overflow-hidden sm:h-80 lg:h-full">
                        <Link to="/" className="block text-teal-600 ">
                            <span className="sr-only">Accueil</span> {/* Traduction de "Home" en français */}
                            <img src={logo} alt="logo" className="w-122 h-33" />
                        </Link>
                    </div>

                    <div className="lg:py-16">
                        <article className="space-y-4 text-gray-600">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
                                eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae
                                eius quidem quam repellat.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum explicabo quidem
                                voluptatum voluptas illo accusantium ipsam quis, vel mollitia? Vel provident culpa
                                dignissimos possimus, perferendis consectetur odit accusantium dolorem amet voluptates
                                aliquid, ducimus tempore incidunt quas. Veritatis molestias tempora distinctio
                                voluptates sint! Itaque quasi corrupti, sequi quo odit illum impedit!
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    );
}
