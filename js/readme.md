Dans ce répertoire se trouvent les fichiers JS du projet.

---

Les comportements des pages sont définis dans `behaviours.js`.

---

Sur la page de démonstration, on rétablit le rythme vertical sur les composants `video` et `audio` à l’aide du _plugin_ `jquery.baseline.js`.

---

On y trouve également une _popin_, d'un carrousel, et d'une validation de formulaire côté client.

---

Une partie montre aussi un exemple de mise en place d'une image _responsive_.

---

On trouve aussi un fichier `init.js` qui vient compléter la détection navigateur faite initialement via des commentaires conditionnels. Ce fichier nécessite l'ajout de `browserdetect.js` en premier lieu.
S'appuyer sur la détection navigateur est bien sûr **à éviter** le plus possible et à ne réserver qu'à de rares cas **non-bloquants**. Préférez utiliser `modernizr.js` par exemple.

---

La concaténation et la compression des JS n'est pas réalisée automatiquement en phase d'intégration. Bien souvent cela est maintenant pris en charge par les CMS et cela complique la maintenance.
Cependant, nous pouvons les réaliser si nécessaire.