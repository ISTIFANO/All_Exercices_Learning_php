<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $dataIsfyll = $_POST['expression']; // Récupère la valeur de l'expression depuis le formulaire

    if($dataIsfyll == ""){ // Vérifie si l'expression est vide
        $Result = ""; 
        header("Location: index.html?result=$Result"); // Redirige vers la page 
       
        exit(); // Termine l'exécution du script
    }
    elseif(is_numeric($dataIsfyll)){ // Vérifie si l'expression est un nombre
        $Result= $dataIsfyll; 
        header("Location: index.html?result=$Result"); // Redirige vers la page 
        
        exit(); // Termine l'exécution du script
    }
    else{
        calcul($dataIsfyll); // l'expression n'est ni vide ni un nombre, 
    
    }
}

function Arith($dataIsfyllsion) { // Fonction pour évaluer les expressions arithmétiques
    $op = array('+', '-', '*', '/'); // Tableau des opérateurs arithmétiques
    $Result = 0; 
    $num = ''; // Variable pour stocker les chiffres en cours de lecture
    $operator = '+'; 
    $dataIsfyllsion .= '+'; 
    //  s'assurer que le dernier nombre est pris en compte
    if (strpos($dataIsfyllsion, 'PI') !== false) { // Vérifie si l'expression contient le symbole PI
        $Result = pi(); 
    } 

    for ($i = 0; $i < strlen($dataIsfyllsion); $i++) { // Parcourt tous les caractères de l'expression
        $char = $dataIsfyllsion[$i]; // Récupère le caractère courant

        if (is_numeric($char) || $char == '.') { // Vérifie si le caractère est un chiffre ou un point décimal
            $num .= $char; // Ajoute le chiffre au nombre en cours de lecture
        } 
        else {
            if (!empty($num)) { // Vérifie si un nombre a été lu
                $number = floatval($num); // Convertit le nombre en valeur numérique

                switch ($operator) { // Effectue une opération en fonction de l'opérateur précédent
                    case '+':
                        $Result += $number; 
                        break;
                    case '-':
                        $Result -= $number; 
                        break;
                    case '*':
                        $Result *= $number; 
                        break;
                    case '/':
                        if ($number != 0) {
                            $Result /= $number; // Divise le résultat par le nombre, sauf si le nombre est zéro
                        } else {
                            $msg = ""; // Si le nombre est zéro, le résultat est vide
                            header("Location: index.html?result=$msg"); // Redirige vers
                            
                            exit; // Termine l'exécution du script
                        }
                        break;
                    default:
                        $msg = ""; // Si l'opérateur n'est pas valide, le résultat est vide
                        header("Location: index.html?result=$msg"); // Redirige vers la page 
                        
                        exit; // Termine l'exécution du script
                }

                $num = ''; // Réinitialise le nombre en cours de lecture
            }

            if (in_array($char, $op)) { // Vérifie si le caractère est un opérateur valide
                $operator = $char; // Stocke l'opérateur en cours de lecture
            }
        }
    }

    return $Result; // Retourne le résultat final de l'expression arithmétique
}

function Trig($function, $argument) { // Fonction pour évaluer les fonctions trigonométriques
    switch ($function) {
        case 'sin':
            return sin(floatval($argument)); 
        case 'cos':
            return cos(floatval($argument));
        case 'tan':
            return tan(floatval($argument)); 
        case 'log':
            return log10(floatval($argument)); 
        case 'sqrt':
            return sqrt(floatval($argument)); 
        default:
            return ""; // Retourne une chaîne vide si la fonction n'est pas reconnue
    }
}


function calcul($exp) { // Fonction pour évaluer les fonctions trigonométriques et les expressions arithmétiques
    $pattern = "/(sin|cos|tan|log|sqrt)\((.*?)\)/"; // Expression régulière pour rechercher 
    
    $matches = []; // Tableau pour stocker les correspondances trouvées
    preg_match_all($pattern, $exp, $matches, PREG_SET_ORDER); // Recherche de toutes les correspondances 
    // dans l'expression
    foreach ($matches as $match) { // Parcourt toutes les correspondances trouvées
        $function = $match[1]; // Récupère le nom de la fonction (sin, cos, tan,log,sqrt)
        $argument = $match[2]; // Récupère l'argument de la fonction
        $value = Trig($function, $argument); 
        // pour évaluer la fonction trigonométrique avec l'argument donné
        $exp = str_replace($match[0], $value, $exp); // Remplace la correspondance dans 
       
    }

    $Result = Arith($exp); // Appelle la fonction calculeArith() pour évaluer
    //  l'expression arithmétique restante
    header("Location: index.html?result=$Result"); 
    exit; // Termine l'exécution du script
}




?>