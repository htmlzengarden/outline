# outline

Outline compile quelques bons outils pour fournir un _template_ de travail modulaire aux intégrateurs chez [Clever Garden](http://www.clever-age.com/societe/nos-entites/clever-garden.html).

---

Nous essayons de **capitaliser** un maximum sur nos techniques de travail côté intégration ;
ce qui passe par une mutualisation d'un certain nombre de choses et la mise en place d'outils génériques.

Cependant, les contextes projets sont variés ; et les intégrateurs ont également des façons de travailler différentes.

De nombreuses sites proposent des initiatives équivalentes ([Boilerplate](http://html5boilerplate.com/), [Bootstrap](http://twitter.github.com/bootstrap/) etc.)
mais il semblait plus logique de construire un outil adapté à nos besoins plutôt que de devoir adapter nos projets à un certain nombres de contraintes imposées.

Il nous fallait donc des outils puissants mais aussi très **flexibles**, sans pour autant réinventer la roue.

C'est avec cet objectif en vue qu'une base de travail à été mise en place sur l'ensemble des projets qui passent entre nos mains.
Elle est est composée d'un ensemble d'outils existants, soigneusement choisis et évolue au fil du temps
(en fonction des évolutions de nos métiers et des retours d'expérience de tout le monde).

---

À ce jour la bibliothèque comprend :

 - une arborescence pour permettre d'organiser ses fichiers de manière logique ;
 - un système de gabarits pour ne pas avoir à répéter inutilement des morceaux de HTML ;
 - un préprocesseur CSS pour automatiser au mieux les opérations récurrentes ;
 - des utilitaires CSS qui proposent déjà une factorisation sur les techniques les plus employées ;
 - un système de grille verticale pour améliorer la cohérence graphique et faciliter la conception ;
 - un système de grille horizontal pour garantir une bonne lisibilité ;
 - un outil pour contrôler la grille car c'est un sujet complexe à mettre en place ;
 - une normalisation des styles pour assurer une base homogène inter-navigateurs ;
 - la possibilité de produire des images génériques pour mimer au mieux les futures contributions ;
 - un système de traductions pour facilement tester la flexibilité de nos intégrations ;
 - une détection des navigateurs pour offrir une solution de repli lorsque les méthodes classiques ont échouées ;
 - des utilitaires JS pour là encore répondre aux demandes les plus courantes ;
 - la possibilité de simuler des composants Flash, pour s'assurer de leur bonne mise en action ;
 - une page de tests pour s'assurer du bon rendu des polices ;
 - une page de suivi du travail effectué et de son niveau de qualité pour informer le chef de projet ou le client ;
 - une page de documentation pour expliciter les choix faits et les structures réalisées ;
 - et sans doute d’autres choses plus ou moins importantes que j'oublie.
 
---

Ce qui se traduit techniquement par tout un tas de choses :

 - [Z](https://github.com/Cerdic/Z) ;
 - [SASS](http://sass-lang.com/) ;
 - [Compass](http://compass-style.org/) ;
 - [normalize.css](http://necolas.github.com/normalize.css/) ;
 - [#grid](http://hashgrid.com/) ;
 - [Dummy Image](http://dummyimage.com/) ;
 - [Browser detect](http://www.quirksmode.org/js/detect.html) ;
 - [jQuery](http://jquery.com/) ;
 - [Modernizr](http://modernizr.com/) ;
 - [Markdown extra](http://michelf.ca/projets/php-markdown/extra/) ;
 - [Web Font Specimen](http://wfs.typographisme.net/) ;
 - [OPQUAST](https://checklists.opquast.com/fr/opquastv2?q=int%C3%A9gration+xhtml/css) ;
 - ...
 
---

Tout ceci est hébergé ici-même et manque encore un peu de documentation. Mais nous y travaillons !