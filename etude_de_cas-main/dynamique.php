<?php
const title = "PHP started";
$_title = "Smarthones neufs ou reconditionnés" ;
$_prix = 79.99;
$_langues = ["Fr", "En", "Ar"];
const gr_titre = "Etude de cas HTML/CSS Php";
$_dispo = "Produits Disponibles";
$_couleurs = ["Rouge", "Bleu", "Vert", "Jaune"];
$_stock =["En Stock!", "Plus disponible"];
$_date = date("Y");

?>


<!DOCTYPE html>
<html lang= <?php print $_langues[0] ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="etude de cas html/css et php ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title><?php print $_langues[1] ?></title>

</head>
<body>
    <header>
           <i><svg width="60px" height="70px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            
            <g id="SVGRepo_iconCarrier">
            
            <path d="M728.5 930.2H268.3c-24.5 0-44.5-19.9-44.5-44.5V160.4c0-24.5 19.9-44.5 44.5-44.5h460.2c24.5 0 44.5 19.9 44.5 44.5v725.4c0 24.5-20 44.4-44.5 44.4zM268.3 128.4c-17.6 0-32 14.3-32 32v725.4c0 17.6 14.3 32 32 32h460.2c17.6 0 32-14.3 32-32V160.4c0-17.6-14.3-32-32-32H268.3z" fill="#443D3D"/>
            
            <path d="M227 217.5h536.6V230H227zM227 813.2h536.6v12.5H227zM566.6 182.2h-80.2c-0.2 0-0.4-0.2-0.4-0.4v-10c0-0.2 0.2-0.4 0.4-0.4h80.2c0.2 0 0.4 0.2 0.4 0.4v10c0 0.2-0.2 0.4-0.4 0.4zM535.4 877.2h-80.2c-0.2 0-0.4-0.2-0.4-0.4v-10c0-0.2 0.2-0.4 0.4-0.4h80.2c0.2 0 0.4 0.2 0.4 0.4v10c0 0.2-0.2 0.4-0.4 0.4zM436 186.9h-18.7c-0.4 0-0.8-0.4-0.8-0.8v-18.7c0-0.4 0.4-0.8 0.8-0.8H436c0.4 0 0.8 0.4 0.8 0.8v18.7c0 0.4-0.4 0.8-0.8 0.8z" fill="#443D3D"/>
            
            <path d="M704.6 441.6v54.9c0 12.1-9.8 22-22 22h-7.3V705c0 12.1-9.8 22-22 22h-310c-12.1 0-22-9.8-22-22V518.4H314c-12.1 0-22-9.8-22-22v-54.9c0-12.1 9.8-22 22-22h69.6c-14.4-8.2-24.2-23.7-24.2-41.5 0-26.3 21.4-47.7 47.7-47.7 16.1 0 27.6 4.9 39 15.4-2.6-8.7-2.7-18.3-0.1-27.5 3.6-12.8 11.8-23.7 22.8-30 11-6.4 23.9-8.1 36.2-4.8 12.3 3.3 22.6 11.2 29 22.2 9.5 16.5 11 33.5 4.2 53.2 16.1-19.6 29.5-28.5 51.2-28.5 26.3 0 47.7 21.4 47.7 47.7 0 17.7-9.8 33.2-24.2 41.5h69.6c12.3 0.1 22.1 10 22.1 22.1z m-6.2 54.9v-54.9c0-8.6-7-15.7-15.7-15.7H528.6v86.3h154.1c8.6-0.1 15.7-7.1 15.7-15.7zM669.1 705V518.4H528.6v202.3h124.8c8.7 0 15.7-7 15.7-15.7zM631 378.2c0-22.9-18.6-41.5-41.5-41.5-23.8 0-36.9 12.5-57.2 40.5l-28.1 42.5h85.3c22.9-0.1 41.5-18.7 41.5-41.5z m-108.5 0c16.1-28 18-48.8 6.2-69.3-5.5-9.6-14.5-16.5-25.2-19.3-3.6-1-7.2-1.4-10.8-1.4-7.2 0-14.3 1.9-20.7 5.6-9.5 5.5-16.7 15-19.8 26.2-3.1 11.2-1.8 23.1 3.6 32.5l42 62.3 24.7-36.6z m-0.2 342.5V425.8h-24.5l-0.1 0.1-0.1-0.1H472.5v294.9h49.8z m-29.7-301.1L464.4 377c-20.3-27.9-33.3-40.4-57.2-40.4-22.9 0-41.5 18.6-41.5 41.5s18.6 41.5 41.5 41.5h85.4z m-26.2 301.1V518.4H327.7V705c0 8.6 7 15.7 15.7 15.7h123z m0-208.6v-86.3H314.2c-8.6 0-15.7 7-15.7 15.7v54.9c0 8.6 7 15.7 15.7 15.7h152.2z" fill="#EF4668"/>
            
            <path d="M698.4 441.6v54.9c0 8.6-7 15.7-15.7 15.7H528.6v-86.3h154.1c8.6 0 15.7 7 15.7 15.7z" fill="#FFF0C2"/>
            
            <path d="M669.1 518.4V705c0 8.6-7 15.7-15.7 15.7H528.6V518.4h140.5z" fill="#FFE085"/>
            
            <path d="M589.6 336.7c22.9 0 41.5 18.6 41.5 41.5s-18.6 41.5-41.5 41.5h-85.3l28.1-42.5c20.2-28 33.3-40.5 57.2-40.5zM528.7 308.9c11.9 20.5 10 41.3-6.2 69.3l-24.7 36.5-42-62.3c-5.4-9.4-6.8-21.3-3.6-32.5 3.1-11.2 10.4-20.8 19.8-26.2 6.4-3.7 13.5-5.6 20.7-5.6 3.6 0 7.2 0.5 10.8 1.4 10.7 3 19.6 9.8 25.2 19.4zM522.3 550.8v169.9h-49.6V425.9H497.8v0.1l0.1-0.1H522.3v92.5zM464.4 377l28.1 42.6h-85.3c-22.9 0-41.5-18.6-41.5-41.5s18.6-41.5 41.5-41.5c23.9 0.1 37 12.6 57.2 40.4z" fill="#EF4668"/>
            
            <path d="M466.4 518.4v202.3h-123c-8.6 0-15.7-7-15.7-15.7V518.4h138.7z" fill="#FFE085"/>
            
            <path d="M466.4 425.9v86.3H314.1c-8.6 0-15.7-7-15.7-15.7v-54.9c0-8.6 7-15.7 15.7-15.7h152.3z" fill="#FFF0C2"/>
            
            </g>
            
            </svg>
            
            </i> 
         <h1>
            <?php print $_title ?>
        </h1>
    </header>
    <main>
    <div class="smart" aria-labelledby="produit">
        <fieldset>
            <h2> <?php print $_prix ?></h2>
               <figure>
                <img src="https://img.freepik.com/psd-gratuit/modele-maquette-ecran-pour-telephone-mobile-premium_53876-81688.jpg?w=1060&t=st=1680263822~exp=1680264422~hmac=d33cc205907bdfb0d74e5199cf04b77df68828ae47168f58ac054266466f83f3" alt="smarthone mockup">
                <figcaption>
                    <p id="Prix"> Prix:  <?php print $_prix ?> € </p>
                    <table>
                        <thead> 
                            <tr id="coloris">
                                 Tous les nouveaux produits disponibles dans notre magasin! voici les coloris:
                            </tr>
                        </thead>
                        <tr>
                        <?php $produit = [
   "titre" => "Smartphone neufs ou reconditionnés",
   "prix" => 79.99,
   "description" => "Tous les nouveaux produits disponibles dans nos magasins.",
   "couleurs" => ["rouge", "bleu", "vert", "jaune"],
   "stock" => true,
   "image" => "https://img.freepik.com/psd-gratuit/modele-maquette-ecran-pour-telephone-mobile-premium_53876-81688.jpg?w=1060&t=st=1680263822~exp=1680264422~hmac=d33cc205907bdfb0d74e5199cf04b77df68828ae47168f58ac054266466f83f3 "
]; 
print $produit?>
                            <td id="rouge"><?php print $_couleurs[0] ?></td>
                            <td id="bleu"><?php print $_couleurs[1] ?></td>
                            <td id="vert"><?php print $_couleurs[2] ?></td>
                            <td id="jaune"><?php print $_couleurs[3] ?></td>
                        </tr>

                    </table>
                    <p id="Stock"> <?php print $_stock[0] ?></p>
                </figcaption>

               </figure>  
        </fieldset>

    </div>
</main>
<footer>
    <p>
        &copy; - Product Online - <?php print $_date ?>
    </p>
</footer>
</body>
</html>

