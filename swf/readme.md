On trouve dans ce répertoire les composants Flash nécessaires au projet.

---

`demo.swf` est un petit objet Flash qui prend en paramètre une image afin de l'afficher
et de simuler un véritable composant Flash qui viendra ensuite prendre la main.

---

Voici un exemple de code fonctionnel :

	<object width="100" height="100" data="../swf/demo.swf" type="application/x-shockwave-flash">
		<param name="movie" value="../swf/demo.swf" />
		<param name="flashvars" value="image=../swf/foo.jpg" />
		<img width="100" height="100" src="../swf/foo.jpg" alt="foo" />
	</object>