Les fichiers CSS sont compilés à partir des fichiers du répertoire scss.

 - _doc.css est généré à partir de _doc.scss qui lui même importe :
    - le framework compass,
    - le framework blueprint,
    - base.scss (le fichier de configuration du projet),
    - functions.scss (la réécriture et l'ajout de @mixins spécifiques),
    - normalize.scss,
    - hashgrid.scss (pour générer la grille -- à supprimer en production),
    - **doc-screen.scss (la gestion des styles de la documentation -- version écran)**,
    - **doc-print.scss (la gestion des styles de la documentation -- version imprimée)** ;   
 - _styles.css est généré à partir de _styles.scss qui lui même importe :
	- le framework compass,
	- le framework blueprint,
	- base.scss (le fichier de configuration du projet),
	- functions.scss (la réécriture et l'ajout de @mixins spécifiques),
	- normalize.scss,
	- hashgrid.scss (pour générer la grille -- à supprimer en production),
	- **styles-screen.scss (la gestion des styles du projet -- version écran)**,
	- **styles-print.scss (la gestion des styles du projet -- version imprimée)**. 