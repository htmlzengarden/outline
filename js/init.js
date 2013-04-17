// prepend : browserdetect.js

// définition de variables souvent réutilisées

var classes   = ' js'  , // c'est ici que toutes les classes vont venir s'empiler, l'espace en prefixe permet de les séparer des éventuelles classes existantes
	addclass  = 'class',
	html      = document.getElementsByTagName('html')[0],
	htmlclass = html.className;
	
// ajout dans les classes qui vont être ajoutées de l'os...

if(BrowserDetect.OS == 'Mac')           classes += ' mac';
if(BrowserDetect.OS == 'Linux')         classes += ' lin';
if(BrowserDetect.OS == 'Windows')       classes += ' win';

// ... et du navigateur (la classe pour Explorer est elle ajoutée via les commentaires conditionnes)

if(BrowserDetect.browser == 'Chrome')   classes += ' ch' ;
if(BrowserDetect.browser == 'Firefox')  classes += ' fx' ;
if(BrowserDetect.browser == 'Opera' )   classes += ' op' ;
if(BrowserDetect.browser == 'Safari')   classes += ' sa' ;

// si on se trouve sous Internet Explorer, on ajoute le support de abbr et on change la technique pour ajouter les classes.

if(BrowserDetect.browser == 'Explorer')
{
    document.createElement('abbr');
    if (!(document.querySelector)) addclass = 'className';
}

// si on se trouve sur iOS on ajoute également l'orientation et on ignore les différences entre iPod et iPhone

else if(BrowserDetect.OS == 'iPhone' || BrowserDetect.OS == 'iPod' || BrowserDetect.OS == 'iPad')
{
	switch(window.orientation){
		case 0:
			classes += ' portrait' ;
			break;
		case 180:  
			classes += ' portrait' ;  
			break;
		case -90:  
			classes += ' landscape';  
			break;  
		case 90:  
			classes += ' landscape';  
			break;  
	}
	if(BrowserDetect.OS == 'iPad')
	{
		classes += ' ipad ios';
	}
	if(BrowserDetect.OS == 'iPod' || BrowserDetect.OS == 'iPhone')
	{
		classes += ' iphone ios';
	}
}

// on supprime la classe no-js éventuelle et on ajoute les classes calculées au document

htmlclass = htmlclass.replace('no-js','');
html.setAttribute(addclass, htmlclass + classes);