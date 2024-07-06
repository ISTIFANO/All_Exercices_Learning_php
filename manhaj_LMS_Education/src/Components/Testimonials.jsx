// import React, { useEffect } from 'react';
// import KeenSlider from 'keen-slider/react';

// import 'keen-slider/keen-slider.min.css';

// export default function Avis() {
//     useEffect(() => {
//         const keenSlider = new KeenSlider('#keen-slider', {
//             loop: true,
//             slidesPerView: 1.25,
//             spacing: 16,
//             breakpoints: {
//                 '(min-width: 1024px)': {
//                     slidesPerView: 2.5,
//                     spacing: 32,
//                 },
//             },
//         });

//         const keenSliderPrevious = document.getElementById('keen-slider-previous');
//         const keenSliderNext = document.getElementById('keen-slider-next');

//         keenSliderPrevious.addEventListener('click', () => keenSlider.prev());
//         keenSliderNext.addEventListener('click', () => keenSlider.next());

//         return () => {
//             keenSlider.destroy();
//             keenSliderPrevious.removeEventListener('click', () => keenSlider.prev());
//             keenSliderNext.removeEventListener('click', () => keenSlider.next());
//         };
//     }, []);

//     return (
//         <section className="bg-gray-50">
//             <div className="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
//                 <div className="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
//                     <h2 className="max-w-xl text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
//                         Lisez les témoignages de confiance de nos clients
//                     </h2>

//                     <div className="mt-8 flex gap-4 lg:mt-0">
//                         <button
//                             aria-label="Slide précédent"
//                             id="keen-slider-previous"
//                             className="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white"
//                         >
//                             &lt;
//                         </button>

//                         <button
//                             aria-label="Slide suivant"
//                             id="keen-slider-next"
//                             className="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white"
//                         >
//                             &gt;
//                         </button>
//                     </div>
//                 </div>

//                 <div className="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
//                     <div id="keen-slider" className="keen-slider">
//                         <div className="keen-slider__slide">
//                             {/* Contenu du premier slide */}
//                         </div>

//                         <div className="keen-slider__slide">
//                             {/* Contenu du deuxième slide */}
//                         </div>

//                         <div className="keen-slider__slide">
//                             {/* Contenu du troisième slide */}
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </section>
//     );
// }
