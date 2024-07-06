import { useState } from 'react'; // Assurez-vous d'importer useState depuis react s'il n'est pas déjà importé

// Importez les images pour chaque catégorie
import designImage from '../images/design.jpg';
import developmentImage from '../images/development.jpg';
import marketingImage from '../images/marketing.jpg';
import itSoftwareImage from '../images/software.jpg';
import personalDevelopmentImage from '../images/personaldevelopment.jpg';
import businessImage from '../images/business.jpg';
import photographyImage from '../images/photography.jpg';
import musicImage from '../images/music.jpg';

export default function TopCategories() {
    const [selectedCategory, setSelectedCategory] = useState('');

    // Fonction pour afficher les détails lorsque l'utilisateur clique sur une catégorie
    const handleClick = (category) => {
        setSelectedCategory(category);
    };

    // Les catégories avec leurs images
    const categories = [
        { name: "Design", image: designImage },
        { name: "Développement", image: developmentImage },
        { name: "Marketing", image: marketingImage },
        { name: "IT et Logiciels", image: itSoftwareImage },
        { name: "Développement personnel", image: personalDevelopmentImage },
        { name: "Affaires", image: businessImage },
        { name: "Photographie", image: photographyImage },
        { name: "Musique", image: musicImage },
    ];

    return (
        <div>
            <h2 className="ftext-6xl text-black font-extrabold mb-10 sm:text-4xl">Top Catégories</h2>
            {/* Section avec 4 catégories par ligne */}
            <div className="flex flex-wrap">
                {categories.slice(0, 4).map((category, index) => (
                    <div key={index} className="w-1/4 p-4 hover:opacity-75" onClick={() => handleClick(category.name)}>
                        <img src={category.image} alt={category.name} className="w-full h-auto" />
                        <span className="ftext-6xl text-black font-extrabold mb-10 sm:text-4xl" >{category.name}</span>
                    </div>
                ))}
            </div>

            {/* Section avec une seule catégorie par ligne */}
            <div className="flex flex-wrap">
                {categories.slice(4).map((category, index) => (
                    <div key={index} className="w-1/4 p-4 hover:opacity-75" onClick={() => handleClick(category.name)}>
                        <img src={category.image} alt={category.name} className="w-full h-auto" />
                        <span className="ftext-6xl text-black font-extrabold mb-10 sm:text-4xl">{category.name}</span>
                    </div>
                ))}
            </div>

            {/* Affichage des détails de la catégorie sélectionnée */}
            {selectedCategory && (
                <div>
                    <h3>Détails de la catégorie {selectedCategory}</h3>
                    {/* Ajouter ici les détails spécifiques à la catégorie sélectionnée */}
                </div>
            )}
        </div>
    );
}
