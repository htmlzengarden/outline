[![Clever-garden](doc/img/clever-garden.png)](http://www.clever-age.com/)
=========================================================================

Projet
------

_[Voir la documentation](doc/)_

### Conformité et affichage {#conformite}

Maquette                                                                     | Validation HTML     | IE 6 | IE 7 | IE 8 | IE 9 | Opera | Chrome | Safari | Fx  | Lynx [^1] | Impression | iPhone | iPad 
-----------------------------------------------------------------------------|---------------------|------|------|------|------|-------|--------|--------|-----|-----------|------------|--------|------
[Page](inc/?page=index)                                                      |                     |      |      |      |      |       |        |        |     |           |            |        |   
[404](inc/?page=error)                                                       |                     |      |      |      |      |       |        |        |     |           |            |        |   
[Démo](inc/?page=demo)                                                       |                     |      |      |      |      |       |        |        |     |           |            |        |   

### Respect des bonnes pratiques [^2] {#bps}

#### Niveau 1

Thématique              | Description                                                                                            | Fiche                                                   | Validité
------------------------|--------------------------------------------------------------------------------------------------------|---------------------------------------------------------|----------
Alternatives            | Chaque image est dotée d'une alternative textuelle appropriée                                          | [BP 1](http://checklists.opquast.com/11/criteria/500/)  |
Code                    | Le code source de chaque page débute par un déclaration de type de document                            | [BP 2](http://checklists.opquast.com/11/criteria/501/)  |
Code                    | Le contenu de chaque page est organisé selon une structure de titres et sous-titres hiérarchisée       | [BP 3](http://checklists.opquast.com/11/criteria/502/)  |
Code                    | Le site n'impose pas de redirection ou de rafraichissement automatique côté client                     | [BP 4](http://checklists.opquast.com/11/criteria/503/)  |
Code                    | Les styles ne sont pas utilisés pour générer du contenu                                                | [BP 5](http://checklists.opquast.com/11/criteria/504/)  |
Fichiers et multimédia  | Les sons et vidéos sont déclenchés par l'utilisateur.                                                  | [BP 31](http://checklists.opquast.com/11/criteria/530/) |
Fichiers et multimédia  | Les animations, sons et clignotements peuvent être mis en pause                                        | [BP 34](http://checklists.opquast.com/11/criteria/533/) |
Formulaires             | Chaque champ de formulaire est associé dans le code source à une étiquette qui lui est propre          | [BP 35](http://checklists.opquast.com/11/criteria/534/) |
Formulaires             | L'étiquette de chaque champ de formulaire indique si la saisie est obligatoire                         | [BP 39](http://checklists.opquast.com/11/criteria/538/) | 
Hyperliens              | Chaque lien est doté d'un intitulé dans le code source                                                 | [BP 41](http://checklists.opquast.com/11/criteria/540/) |
Hyperliens              | Le soulignement est réservé aux hyperliens.                                                            | [BP 42](http://checklists.opquast.com/11/criteria/541/) |
Hyperliens              | Les hyperliens sont visuellement différenciés du reste du contenu.                                     | [BP 43](http://checklists.opquast.com/11/criteria/542/) |
Internationalisation    | Le code source de chaque page indique la langue principale du contenu                                  | [BP 49](http://checklists.opquast.com/11/criteria/548/) |
Navigation              | Le site n'emploie pas la technique des jeux de cadres                                                  | [BP 52](http://checklists.opquast.com/11/criteria/551/) |
Navigation              | Le focus clavier n'est ni supprimé ni masqué                                                           | [BP 58](http://checklists.opquast.com/11/criteria/557/) |
Serveur et Performances | Les entêtes envoyés par le serveur contiennent les informations relatives au jeu de caractères employé | [BP 75](http://checklists.opquast.com/11/criteria/574/) |

#### Niveau 2

Thématique              | Description                                                                                            | Fiche                                                   | Validité
------------------------|--------------------------------------------------------------------------------------------------------|---------------------------------------------------------|----------
Alternatives            | Les objets inclus sont dotés d'une alternative appropriée                                              | [BP 86](http://checklists.opquast.com/11/criteria/585/) |
Code                    | Le contenu ne comporte pas de tableaux imbriqués                                                       | [BP 88](http://checklists.opquast.com/11/criteria/587/) |
Code                    | Le codage de caractères utilisé est UTF-8                                                              | [BP 89](http://checklists.opquast.com/11/criteria/588/) |
Code                    | Les mots ne comportent ni espaces ni balisage interne.                                                 | [BP 91](http://checklists.opquast.com/11/criteria/590/) |
Code                    | Les éléments visuellement présentés sous forme de liste sont balisés de façon appropriée               | [BP 97](http://checklists.opquast.com/11/criteria/596/) |
Code                    | Le code source de chaque page contient une metadonnée qui définit le jeu de caractères                 | [BP 100](http://checklists.opquast.com/11/criteria/599/)|
Fichiers et multimédia  | Les vignettes ne sont pas des images de taille supérieure redimensionnées côté client.                 | [BP 114](http://checklists.opquast.com/11/criteria/613/)|
Hyperliens              | Le survol ou l'activation des hyperliens ne modifie pas la mise en page                                | [BP 121](http://checklists.opquast.com/11/criteria/620/)|
Hyperliens              | Le site n'applique pas le même style aux liens visités et non visités                                  | [BP 124](http://checklists.opquast.com/11/criteria/623/)|
Identification          | Le code source de chaque page contient une metadonnée qui en décrit le contenu                         | [BP 126](http://checklists.opquast.com/11/criteria/625/)| 
Identification          | Le code source des pages contient un appel valide à un icône de favori                                 | [BP 128](http://checklists.opquast.com/11/criteria/627/)| 
Navigation              | Les icônes de navigation sont accompagnées d'une légende explicite                                     | [BP 131](http://checklists.opquast.com/11/criteria/630/)|
Navigation              | Chaque page contient des liens d'accès rapide placés au début du code source                           | [BP 132](http://checklists.opquast.com/11/criteria/631/)|
Navigation              | La navigation au clavier s'effectue dans un ordre prévisible                                           | [BP 134](http://checklists.opquast.com/11/criteria/633/)|
Navigation              | Les nouvelles fenêtres dimensionnées et les fenêtres modales sont dotées d'un bouton de fermeture      | [BP 135](http://checklists.opquast.com/11/criteria/634/)|
Navigation              | Les blocs de navigation de même nature sont affichés au même emplacement sur toutes les pages          | [BP 136](http://checklists.opquast.com/11/criteria/635/)|
Navigation              | Un contenu qui doit être restitué dans un lecteur d'écran ne lui est pas dissimulé                     | [BP 139](http://checklists.opquast.com/11/criteria/638/)|
Présentation            | Le site propose au moins une feuille de style dédiée à l'impression                                    | [BP 140](http://checklists.opquast.com/11/criteria/639/)| 
Présentation            | La taille des polices destinées à l'affichage écran est exprimée en taille variable                    | [BP 142](http://checklists.opquast.com/11/criteria/641/)|
Tableaux                | Les titres des tableaux de données sont renseignés                                                     | [BP 147](http://checklists.opquast.com/11/criteria/646/)| 
Tableaux                | La linéarisation des tableaux utilisés pour la mise en page ne nuit pas à la compréhension des contenus| [BP 152](http://checklists.opquast.com/11/criteria/651/)|

#### Niveau 3

Thématique              | Description                                                                                            | Fiche                                                   | Validité
------------------------|--------------------------------------------------------------------------------------------------------|---------------------------------------------------------|----------
Code                    | Les styles en ligne sont utilisés de manière appropriée                                                | [BP 156](http://checklists.opquast.com/11/criteria/655/)|
Code                    | Le code source de chaque page ne comporte pas d'erreur                                                 | [BP 157](http://checklists.opquast.com/11/criteria/656/)|
Code                    | Le code source de chaque page ne contient pas d'éléments ou d'attributs de présentation                | [BP 158](http://checklists.opquast.com/11/criteria/657/)|
Code                    | Les dimensions réelles des images sont indiquées dans le code source.                                  | [BP 159](http://checklists.opquast.com/11/criteria/658/)| 
Code                    | L'accès aux contenus et services est possible sans le support des scripts                              | [BP 161](http://checklists.opquast.com/11/criteria/660/)|
Code                    | Le code source des pages est valide au regard de la grammaire choisie                                  | [BP 162](http://checklists.opquast.com/11/criteria/661/)|
Code                    | Le code source de chaque page ne contient pas d'éléments détournés à des fins de présentation          | [BP 164](http://checklists.opquast.com/11/criteria/663/)|
Contenus                | Une metadonnée indique l'URL de référence des contenus proposés sous plusieurs formes                  | [BP 170](http://checklists.opquast.com/11/criteria/669/)| 
Fichiers et multimédia  | Le déroulement des animations ne bloque pas la navigation ou l'accès aux contenus                      | [BP 177](http://checklists.opquast.com/11/criteria/676/)|
Formulaires             | Les champs de formulaire qui nécessitent une information commune sont regroupés sous une même légende  | [BP 183](http://checklists.opquast.com/11/criteria/682/)| 
Formulaires             | Les listes d'options de formulaires sont présentées dans un ordre identifiable                         | [BP 185](http://checklists.opquast.com/11/criteria/684/)| 
Internationalisation    | Le sens de lecture du contenu est indiqué lorsqu'il diffère de celui par défaut                        | [BP 196](http://checklists.opquast.com/11/criteria/695/)| 
Présentation            | Le site propose une ou plusieurs feuilles de style dédiées aux terminaux mobiles                       | [BP 206](http://checklists.opquast.com/11/criteria/705/)| 
Présentation            | Les phrases ou ensembles de mots mis en images ne sont pas divisés                                     | [BP 207](http://checklists.opquast.com/11/criteria/706/)|
Présentation            | Le contenu textuel reste lisible avec une taille de caractère augmentée d'un facteur 2                 | [BP 209](http://checklists.opquast.com/11/criteria/708/)|
Présentation            | Les mises en majuscules à des fins décoratives sont effectuées à l'aide des styles                     | [BP 210](http://checklists.opquast.com/11/criteria/709/)|
Serveur et Performances | Les appels aux scripts sont placés après le contenu                                                    | [BP 213](http://checklists.opquast.com/11/criteria/712/)|
Serveur et Performances | Les fonctions de scripts sont placés dans des fichiers externes.                                       | [BP 215](http://checklists.opquast.com/11/criteria/714/)|
Serveur et Performances | Les scripts sont minifiés                                                                              | [BP 216](http://checklists.opquast.com/11/criteria/715/)| 
Serveur et Performances | Les informations de style sont minifiées                                                               | [BP 217](http://checklists.opquast.com/11/criteria/716/)| 

[^1]: L'affichage Lynx est proche de la restitution faite par un lecteur d'écran ou de ce qui est perçu par un moteur de recherche.
[^2]: Extrait des [bonnes pratiques OPQUAST pour l'intégration XHTML/CSS](http://checklists.opquast.com/opquastv2?q=int%C3%A9gration+xhtml%2Fcss)

*[BP]: Bonne Pratique
*[vs]: Versus
*[IE]: Internet Explorer
*[Fx]: Firefox
*[JS]: JavaScript
*[etc]: Et cætera
*[NOK]: Non OK
*[N/A]: Non applicable
*[v.]: version
*[CSS]: 
*[HTML]: 
*[XHTML]: 
*[OPQUAST]: 