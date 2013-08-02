var rwdimg = function(selector){

    var rwdimg = 'rwdimg',
         local = 'clever-age.net',
          hdpi = window.devicePixelRatio > 1 ? true : false;
    
    $('img.' + rwdimg).remove();
    
    $(selector).each(function(){
    
        var    src = $(this).attr('data' + '-' + 'src'),
               alt = $(this).attr('data' + '-' + 'alt'),
                id = $(this).attr('data' + '-' + 'id'),
              lang = $(this).attr('data' + '-' + 'lang'),
             title = $(this).attr('data' + '-' + 'title'),
             width = $(this).attr('data' + '-' + 'width'),
            height = $(this).attr('data' + '-' + 'height'),
            classe = $(this).attr('data' + '-' + 'class'),
             style = $(this).attr('data' + '-' + 'style'),
               rwd = $(this).attr('data' + '-' + 'rwd');
            
        if(rwd != undefined)
        {
            rwd = rwd.split(' ');
            
            for(var i=0 ; i< rwd.length ; i++)
            {
                var mode  = rwd[i],
                    match = $(this).attr('data' + '-' + mode + '-' + 'match');
                    
                if(window.matchMedia(match).matches)
                {
                    var   src_mode = $(this).attr('data' + '-' + mode + '-' + 'src'),
                        width_mode = $(this).attr('data' + '-' + mode + '-' + 'width'),
                       height_mode = $(this).attr('data' + '-' + mode + '-' + 'height'),
                       classe_mode = $(this).attr('data' + '-' + mode + '-' + 'class'),
                           id_mode = $(this).attr('data' + '-' + mode + '-' + 'id'),
                         lang_mode = $(this).attr('data' + '-' + mode + '-' + 'lang'),
                        style_mode = $(this).attr('data' + '-' + mode + '-' + 'style'),
                        title_mode = $(this).attr('data' + '-' + mode + '-' + 'title');
                       
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
                                       src = src.replace('.png',''); // il faudrait idéalement que ça marche aussi pour les jpg ou les gif
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
                src = src.replace(/.(jpg|png|gif)$/ig, '-@x2.$1');
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