# Étude de cas HTML/CSS et php

## Étape 1, création de la structure html 
j'ai décidé de tout créer en statique, avant de rendre le tout dynamique 

### Conteneur de l'image
j'ai utilisé une div avec un ```<fieldset>``` 
et à l'intérieur une ```<figure>``` et une ```<table>```en figcaption
*update* le fielset ne s'utilise que pour les formulaires, donc je l'ai enlevé
## Étape 2, styliser en CSS
Font Roboto
**utilisé sur l'icone:**
```
vetrtical-align: -1.6rem; /* pour que mon icone ne flotte pas */
transform: rotate(20deg); /*pour avoir l'icone penchée */
 ```
### accéder à mon php, xammp
Dans le répertoire où j'ai sauvegardé mon xampp: c'est à dire dans /images/xamp

ouvrir un terminal et taper les commandes suivantes à la suite
```
 cd /opt/lampp/htdocs
 cd projets /* parce que j'ai appelé mon rep 'projets' */
 ~/Documents/cours/front/Php
 sudo /opt/lampp/lampp start  /* pour lancer mes serveurs */
 cp -r chemin de mon fichier dans php vers ici, "."
```
### Dynamiser ma page avec php
#### création d'une page dynamique.php
Dans laquelle on fera des ```include_once "<lien vers ma page>" ``` pour que le code soit bien propre et lisible.

on fait donc un head.inc, un head.var et un footer.inc


 
