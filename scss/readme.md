Dans ce dossier se trouvent les sources CSS au format Sassy CSS (scss).

---

 - `_styles.scss` et `_doc.scss` sont les fichiers principaux, le premier étant dédié au projet, le second à sa documentation.
 - Chacun vient importer deux autres fichiers : les CSS screen (`_*-screen.scss`) et les CSS print (`_*-print.scss`) dédiés.
 
---
 
 - On trouve également un fichier de configuration `_config.scss` dans lequel on vient définir la grille de mise en page utilisée et `_lib.scss` sert quand à lui à charger les bibliothèques CSS utilisées.
 - `_styles-no-mq.scss` est quand à lui utilisé pour servir aux navigateurs qui ne supportent pas les medias-queries, une version allégée de la feuille de style projet.



