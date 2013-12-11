Dans ce repertoire se trouvent le code HTML des pages découpé en templates.

---

Z est un système de templates en PHP qui effectue principalement des imports de code.
Il permet ne ne pas avoir à répéter inutilement des morceaux de HTML pour en faciliter la maintenance.

C'est un projet crée par Cédric Morin, core-développeur de SPIP, qui n'a pas vocation est être très compliqué, mais qui répond très bien à notre demande.
[Il a été présenté lors de la session 2010 de Paris Web.](http://www.yterium.net/Un-framework-HTML-est-il-possible)

---

Quelques règles simples définissent son fonctionnement :

 - Chaque sous-répertoire (dans `inc`) représente un morceau de page.
 - La version affichée par défaut de ce morceau de page est `dist.php`.
 - Les variantes portent des noms différents (`foo.php`) qui se référent au nom de la page appelée (`?page=foo`).
 - Les répertoires autorisés sont définis dans `z-config.php`.

---

Cette structure est proposée par défaut :

    _html
      	_head
            _title
        _body
            _page
                _header
                content
                _footer
                
Mais elle peut bien sûr être modifiée en fonction des contraintes du projet.
Les tirets devant les morceaux `html`, `head` et `body` ne sont là que pour mettre en évidence ses blocs essentiels aux pages HTML.

---

Le fichier `dist.php` étant appelé par défaut, le corps de page par défaut est bien souvent équivalent au contenu de la page 404.

---

Une fonction de Z nommée `getPageName` permet de récupérer le nom de la page courante. Ce nom peut être alors utilisé comme une classe permettant d'identifier précisement les pages.
C'est ce qui est fait dans le répertoire `page` où on trouve : `<div class="page-<?php echo Z::getPageName();?>">`qui côté CSS se traduira donc par un : `.page-foo`.

---
 
Ce travail de factorisation est avant tout destiné aux intégrateurs, il n'est pas forcément repris côté développement.

Pour faciliter ce travail de reprise, il été convenu que chaque morceau de page était débuté par un commentaire HTML précisant le nom du répertoire courant (`<!-- include footer -->` par exemple).

Ainsi il est facile en parcourant la source du fichier HTML généré de localiser dans quel répertoire se trouve le code initial.

---

Pour préserver au mieux les identations sur le code généré, il est conseillé de ne pas indenter devant les includes et de finaliser les morceaux de code par un dernier retour chariot.

---

Z permet également de réaliser des appels de morceaux de page directement à l'aide d'un paramètre supplémentaire dans l'url : `&zajax=footer`.

Il est alors assez facile de simuler des comportements AJAX où :

 - sans JS, un lien de type `?page=foo` permet de garantir un fonctionnement par défaut ; 
 - avec JS, le lien est modifié pour `?page=foo&zajax=bar` et permet un chargement limité uniquement au morceau de page correspondant.