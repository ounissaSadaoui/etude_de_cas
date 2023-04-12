<?php
include_once "./pages/head.inc.php";
include_once "./pages/head.var.php";
?>

<body>
    <header>
        <img src="http://www.w3.org/2000/svg" alt="image/svg">
         <h1>
            <?php print $_title ?>
        </h1>
    </header>
    <main>
    <div class="smart" aria-labelledby="produit">
                   <h2></h2>
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
                    <p id="Stock"> <?php print $_stock[0]  ?><img id="cart" src="./asset/cart.png" alt="shopping cart png"</p>
                </figcaption>

               </figure>  
            </div>
</main>
<?php
include_once "./pages/footer.inc.php";
?>
</body>
</html>

