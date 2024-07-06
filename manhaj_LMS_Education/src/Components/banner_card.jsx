import { Link } from "react-router-dom";
import card1 from '../images/card1.jpg';
import card2 from '../images/card2.jpg';
import card3 from '../images/card3.jpg';

export default function Card() {
  return (
    <>
      <section className="card-section space-x-11">
      <div className="card card-side inline-block z-0 h-36 w-[550px] rounded-none	 bg-white shadow-xl">
  <div className="flex">
    <div className="image">
      <Link to="/">
        <span className="sr-only">Home</span>
        <img src={card3} alt="card3" className="w-[166px] h-full" />
      </Link>
    </div>
    <div className="text ml-4">
      <h2 className="card-title mt-2 text-2xl">New movie is released!</h2>
      <p className="text-base	">Click the button to watch on Jetflix app.</p>
    </div>
  </div>
</div>
        
        <div className="card card-side inline-block z-0 h-36 w-[550px] rounded-none	 bg-white shadow-xl">
  <div className="flex">
    <div className="image">
      <Link to="/">
        <span className="sr-only">Home</span>
        <img src={card2} alt="card2" className="w-[166px] h-full" />
      </Link>
    </div>
    <div className="text ml-4">
      <h2 className="card-title mt-2 text-2xl">New movie is released!</h2>
      <p className="text-base	">Click the button to watch on Jetflix app.</p>
    </div>
  </div>
</div>

        
<div className="card card-side inline-block z-0 h-36 w-[550px] rounded-none	 bg-white shadow-xl">
  <div className="flex">
    <div className="image">
      <Link to="/">
        <span className="sr-only">Home</span>
        <img src={card1} alt="card1" className="w-[166px] h-full" />
      </Link>
    </div>
    <div className="text ml-4">
      <h2 className="card-title mt-2 text-2xl">New movie is released!</h2>
      <p className="text-base	">Click the button to watch on Jetflix app.</p>
    </div>
  </div>
</div>
      </section>
    </>
  );
}
