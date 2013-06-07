var rwdimg = function(selector){

    var rwdimg = 'rwdimg',
         local = 'clever-age.net',
          hdpi = window.devicePixelRatio > 1 ? true : false;
    
    $('img.' + rwdimg).remove();
    
    $(selector).each(function(){
    
        var    src = $(this).data('src'),
               alt = $(this).data('alt'),
                id = $(this).data('id'),
              lang = $(this).data('lang'),
             title = $(this).data('title'),
             width = $(this).data('width'),
            height = $(this).data('height'),
            classe = $(this).data('class'),
             style = $(this).data('style'),
               rwd = $(this).data('rwd');
            
        if(rwd != undefined)
        {
            rwd = rwd.split(' ');
            
            for(var i=0 ; i< rwd.length ; i++)
            {
                var mode  = rwd[i],
                    match = $(this).data(mode + '-' + 'match');
                    
                if(window.matchMedia(match).matches) // todo : émuler pour ie<9
                {
                    var   src_mode = $(this).data(mode + '-' + 'src'),
                        width_mode = $(this).data(mode + '-' + 'width'),
                       height_mode = $(this).data(mode + '-' + 'height'),
                       classe_mode = $(this).data(mode + '-' + 'class'),
                           id_mode = $(this).data(mode + '-' + 'id'),
                         lang_mode = $(this).data(mode + '-' + 'lang'),
                        style_mode = $(this).data(mode + '-' + 'style'),
                        title_mode = $(this).data(mode + '-' + 'title');
                       
                    if(src_mode != undefined)
                    {
                        src = src_mode;
                    }
                    if(height_mode != undefined)
                    {
                        height = height_mode;
                    }
                    if(width_mode != undefined)
                    {
                        width = width_mode;
                    }
                    if(classe_mode != undefined)
                    {
                        classe = classe_mode;
                    }
                    if(id_mode != undefined)
                    {
                        id = id_mode;
                    }
                    if(title_mode != undefined)
                    {
                        title = title_mode;
                    }
                    if(style_mode != undefined)
                    {
                        style = style_mode;
                    }
                    if(lang_mode != undefined)
                    {
                        lang = lang_mode;
                    }
                }
            }
        }
        if(hdpi)
        {
            // cette condition est utile pour les intégrations statiques et peut être supprimée en production
            if(src.indexOf(local) != -1){
                                       src = src.replace('http://','');
                                       src = src.replace('.png',''); // il faudrait idéalement que ça marche aussi pour les jpg
                            var    options = src.split('/'),
                                dimensions = options[2].split('x'),
                                   hauteur = dimensions[0],
                                   largeur = dimensions[1];
                                   
                                    if(largeur == undefined)
                                    {
                                        largeur = hauteur;
                                    }
                                                          
                                   hauteur = parseInt(hauteur) * 2;
                                   largeur = parseInt(largeur) * 2;
                                   
                                dimensions = hauteur + 'x' + largeur;
                                options[2] = dimensions;
            
                            src = options.join('/');
                            src = 'http://' + src + '.png'; // on retrouve le format ici
            }
            else
            {
                src = src.replace(/.(jpg|png)$/ig, '-@x2.$1');
            }
        }
        
        var img = $('<img src="' + src + '" alt="' + alt + '" />');
        
        if(classe != undefined)
        {
            rwdimg = rwdimg + ' ' + classe;
        }
        if(hdpi)
        {
            rwdimg = rwdimg + ' ' + 'x2';
        }
        img.attr('class', rwdimg);
        
        if(title != undefined)
        {
            img.attr('title', title);
        }
        if(style != undefined)
        {
            img.attr('style', style);
        }
        if(width != undefined)
        {
            img.attr('width', width);
        }
        if(height != undefined)
        {
            img.attr('height', height);
        }
        if(lang != undefined)
        {
            img.attr('lang', lang);
        }
        if(id != undefined)
        {
            img.attr('id', id);
        }
        
        img.insertAfter($(this));
    });
};