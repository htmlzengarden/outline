Dans ce répertoire se trouvent les bibliothèques de fichiers JS. On trouve :

 - `modernizr.js`                      : la bibliothèque [Modernizr](http://modernizr.com/).
 - `jquery.js`                         : la bibliothèque [jQuery](http://jquery.com/).
 - `jquery.hashgrid.js`                : [un _plugin_ jQuery](http://hashgrid.com/) pour sur-imprimer la grille au travail en cours afin de le vérifier.
 - `jquery.baseline.js`                :  un _plugin_ jQuery pour rétablir le rythme vertical quand nécessaire (ce _plugin_ ne fonctionne malheureusement que si la taille de texte est par défaut au chargement de la page). 
 - `jquery.migrate.js`                 :  un _plugin_ jQuery pour faciliter la mise à jour depuis les anciennes version de la bibliothèque.
 - `jquery.fontresize.js`              :  un _plugin_ jQuery pour détecter les changements de taille de police.
 - `jquery.rwdimg.js`                  :  un _plugin_ jQuery pour gérer les images responsives et le mode haute définition.
 - `jquery.jquery.throttledebounce.js` : [un _plugin_ jQuery](https://github.com/cowboy/jquery-throttle-debounce) pour stocker les évenements et les restituer selon un rythme définit.
 - `jquery.colorbox.js`                : [un _plugin_ jQuery](http://www.jacklmoore.com/colorbox/) pour réaliser des _popins_.
 - `jquery.colorbox.fr.js`             : une traduction en français des options de `jquery.colorbox.js`.
 - `jquery.validate.js`                : [un _plugin_ jQuery](http://bassistance.de/jquery-plugins/jquery-plugin-validation/) pour valider les formulaires côté client. 
 - `jquery.validate.fr.js`             : une traduction en français des options de     `jquery.validate.js`.
 - `jquery.validate.methods.js`        : des fonctions de contrôle additionnelles pour `jquery.validate.js`.
 - `matchmedia.js`                     : [un _polyfill_](https://github.com/paulirish/matchMedia.js/) pour IE afin d'émuler `matchMedia` (nécessaire pour `jquery.rwdimg.js`).
 - `browserdetect.js`                  : la bibliothèque [Browser detect](http://www.quirksmode.org/js/detect.html).

---

Utilisation rapide de #grid : 

 - G + H pour afficher la grille ;
 - F pour changer son `z-index` (elle est parfois entièrement cachée par le contenu) ;
 - J pour changer l'affichage (grille verticale, horizonale et combinaison des deux) ;
 - G pour masquer la grille.

---

Utilisation de `jquery.rwdimg.js`:

La classe `.rwdimg` indique une "image _responsive_" :

 - `data-rwd`        : définition des médias pour le _rwd_ (les mots-clefs seront à ré-employer (exemple ici avec "foo")) ;
 - `data-foo-match`  : règle à laquelle le média "foo" répondra ;
 - `data-foo-width`  : quand le média "foo" est actif, largeur de l'image ;
 - `data-foo-height` : quand le média "foo" est actif, hauteur de l'image ;
 - `data-foo-class`  : quand le média "foo" est actif, classe appliquée à l'image (tout les attributs universels marchent sur le même principe (`class`, `id`, `title`, `lang` et `style`) ;
 - `data-src`        :      source de l'image par défaut quand JS est activé mais que aucun média n’est actif ;
 - `data-alt`        : alternative de l'image par défaut quand JS est activé mais que aucun média n’est actif ;
 - `data-width`      :     largeur de l'image par défaut quand JS est activé mais que aucun média n’est actif ;
 - `data-height`     :     hauteur de l'image par défaut quand JS est activé mais que aucun média n’est actif ;
 - `data-class`      :      classe de l'image par défaut quand JS est activé mais que aucun média n’est actif (tout les attributs universels marchent sur le même principe (`class`, `id`, `title`, `lang` et `style`).

On complète également à l'intérieur du `noscript` par une image par défaut, si JS n'est pas activé : 

 - `src`             : obligatoire ;
 - `alt`             : obligatoire ;
 - `width`           : recommandé ;
 - `height`          : recommandé.
 
Les images de type "Dummy Image" hébérgée chez nous voient leurs tailles autoamtiquement doublées en mode haute résolution.
Les autres sont suffixées par `@x2` avant l'extension de fichier.

---

Notez que les plugins jQuery sont préfixés par `jquery.`.

Notez également que `browserdetect.js` et `jquery.hashgrid.js` ont été adaptés à nos besoins et donc légèrement modifiés.