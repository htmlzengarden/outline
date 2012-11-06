// prepend : browserdetect.js

// output  : _before.js

var classes   = " js"  ,
	addclass  = "class",
	html      = document.getElementsByTagName("html")[0],
	htmlclass = html.className;

if(BrowserDetect.OS == "Mac")           classes += " mac";
if(BrowserDetect.OS == "Linux")         classes += " lin";
if(BrowserDetect.OS == "Windows")       classes += " win";

if(BrowserDetect.browser == "Chrome")   classes += " ch" ;
if(BrowserDetect.browser == "Firefox")  classes += " fx" ;
if(BrowserDetect.browser == "Opera" )   classes += " op" ;
if(BrowserDetect.browser == "Safari")   classes += " sa" ;

if(BrowserDetect.browser == "Explorer")
{
    document.createElement("abbr");
    if (!(document.querySelector)) addclass = "className";
}
if(BrowserDetect.OS == "iPhone" || BrowserDetect.OS == "iPod" || BrowserDetect.OS == "iPad")
{
	switch(window.orientation){
		case 0:
			classes += " portrait" ;
			break;
		case 180:  
			classes += " portrait" ;  
			break;
		case -90:  
			classes += " landscape";  
			break;  
		case 90:  
			classes += " landscape";  
			break;  
	}
	if(BrowserDetect.OS == "iPad")
	{
		classes += " ipad ios";
	}
	if(BrowserDetect.OS == "iPod" || BrowserDetect.OS == "iPhone")
	{
		classes += " iphone ios";
	}
}
/*
if(swfobject.getFlashPlayerVersion().major > 0)
{
    classes += " flash";
}	
*/
if(htmlclass)
{
	htmlclass = htmlclass.replace('no-js','');
}
html.setAttribute(addclass, htmlclass + classes);