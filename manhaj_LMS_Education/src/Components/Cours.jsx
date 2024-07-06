// Cours.jsx
import React, { useState } from 'react';
import { HiArrowCircleLeft, HiArrowCircleRight } from "react-icons/hi";

import card1 from '../images/card1.jpg';
import card2 from '../images/card2.jpg';
import card3 from '../images/card3.jpg';
import card33 from '../images/card3.jpg';

const offersData = [
  { id: 1, title: 'Summer Football Camp', description: 'Join our summer football camp and improve your skills!', image: card1 },
  { id: 2, title: 'Gym Membership Discount', description: '20% off on all gym memberships this month.', image: card2 },
  { id: 3, title: 'Group Training Sessions', description: 'Get fit with friends and save on group training sessions.', image: card3 },
  { id: 4, title: 'Personal Training Offer', description: 'Book 5 sessions and get 1 free.', image: card3 },
  { id: 5, title: 'Yoga Classes', description: 'Experience tranquility and improve flexibility with our yoga classes.', image: card33 },
];

const Cours = () => {
    const [currentIndex, setCurrentIndex] = useState(0);

    const handlePrev = () => {
      setCurrentIndex((prevIndex) => (prevIndex - 1 + offersData.length) % offersData.length);
    };
  
    const handleNext = () => {
      setCurrentIndex((prevIndex) => (prevIndex + 1) % offersData.length);
    };
  
    const visibleOffers = offersData.slice(currentIndex, currentIndex + 3).concat(offersData.slice(0, Math.max(0, 3 - (offersData.length - currentIndex))));
  
    return (
      <div className=" my-8 mt-[60px] md:mt-[140px]">
        <div className="container mx-auto px-4">
          <h2 className="text-2xl font-bold text-center mb-8">Nos offres spéciales</h2>
          <div className="flex justify-center md:flex-row flex-col sm:h-fit items-center gap-8 md:h-96 h-{36rem} w-{200px}">
            <button onClick={handlePrev} className="px-4 py-2 bg-blue-500 text-white rounded h-12"><HiArrowCircleLeft/></button>
            {visibleOffers.map((offer, index) => (
              <div
                key={offer.id}
                className={`bg-white rounded-lg shadow overflow-hidden flex ${
                  index === 1
                    ? 'md:flex-col flex-row md:w-64 md:h-96 w-200px h-36rem'
                    : 'md:flex-col flex-row md:w-48 md:h-80 w-160px'
                } transform transition-all duration-300 ease-in-out`}
              >
                {offer.image && (
                  <div className="w-full h-2/3"> 
                    <img
                      src={offer.image}
                      alt={offer.title}
                      className="object-cover h-full w-full " 
                    />
                  </div>
                )}
                <div className="p-4">
                  <h3 className="md:text-xl text-sm font-semibold">{offer.title}</h3>
                  {index === 1 && <p className='description'>{offer.description}</p>}
                </div>
              </div>
            ))
            }
            <button onClick={handleNext} className="px-4 py-2 bg-blue-500 text-white rounded h-12"><HiArrowCircleRight/></button>
          </div>
        </div>
      </div>
    );
};

export default Cours;
