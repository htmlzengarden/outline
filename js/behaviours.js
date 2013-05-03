var pathimg    = '../img/';

// il manque encore matchmedia.js à ajouter pour IE<10 et un event à placer sur le resize de window
var x2 = function(selector){

	var   x2 = 'x2',
	    hdpi = window.devicePixelRatio > 1 ? true : false;
	
	$('img.' + x2).remove();
	
	$(selector).each(function(){
	
		var    src = $(this).data('src'),
		       alt = $(this).data('alt'),
		        id = $(this).data('id'),
		      lang = $(this).data('lang'),
		     title = $(this).data('title'),
		     width = $(this).data('width'),
		    height = $(this).data('height'),
		    classe = $(this).data('class'),
		       rwd = $(this).data('rwd');
		    
		if(rwd != undefined)
		{
			rwd = rwd.split(' ');
			
			for(var i=0 ; i< rwd.length ; i++)
			{
				var mode  = rwd[i],
				    match = $(this).data(mode + '-' + 'match');
				    
				if(window.matchMedia(match).matches)
				{
					var   src_mode = $(this).data(mode + '-' + 'src'),
					    width_mode = $(this).data(mode + '-' + 'width'),
					   height_mode = $(this).data(mode + '-' + 'height'),
					   classe_mode = $(this).data(mode + '-' + 'class'),
					       id_mode = $(this).data(mode + '-' + 'id'),
					     lang_mode = $(this).data(mode + '-' + 'lang'),
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
					if(lang_mode != undefined)
					{
						lang = lang_mode;
					}
				}
			}
		}
		if(hdpi)
		{
			// cette condition est utile pour les intégrations statiques et à supprimer par la suite
			if(src.indexOf('clever-age.net') != -1){
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
							src = 'http://' + src + '.png';
			}
			else
			{
				src = src.replace(/.(jpg|png)$/ig, '-x2.$1');
			}
		}
		
		var img = $('<img src="' + src + '" alt="' + alt + '" />');
		
		if(classe != undefined)
		{
			x2 = x2 + ' ' + classe;
		}
		if(hdpi)
		{
			x2 = x2 + ' ' + 'active';
		}
		img.attr('class', x2);
		
		if(title != undefined)
		{
			img.attr('title', title);
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

$(function(){
	$('.demo div>video, '+
	  '.demo div>audio, '+
	  '.demo div>img, '+
	  '.demo p>img, '+
	  '.demo div>a, '+
	  '.demo div>svg, '+
	  '.demo div>figure').baseline();
	  
	$('.demo .pop').colorbox({
	
		inline: true
	});
	
	x2('.demo noscript.x2');
	
	$('.demo .flexslider').flexslider({
	
		animation: 'slide',
		prevText: 'Précédente',
		nextText: 'Suivante',
		pausePlay: true,
		pauseText: 'Pause',
		playText: 'Lecture'
	});
	
	$('.demo form').each(function(){
		
		$(this).validate({
			invalidHandler: function(form, validator) {

				var errors    = validator.numberOfInvalids(),
				    errorsmsg = $(this).data('errors').replace(/%/g, errors).replace(/'/g,'"');
				    
				if(errors)
				{
					if(errors == 1)
					{
						errorsmsg = $(this).data('error');
					}
					
					$(this).find('.errors').html(errorsmsg).show();
				}
				else
				{
					$(this).find('.errors').html('').hide();
				}
			},
			 errorElement: 'span',
		   errorPlacement: function(error, element){
				   	if($(element).closest('.radio, .checkbox').length)
				   	{
						error.appendTo(element.closest('.radio, .checkbox'));
				   	}
				   	else
				   	{
						error.appendTo(element.closest('label'));
				   	}
			    },
			    highlight: function(element, classe){
			    	if($(element).closest('.radio, .checkbox').length)
			    	{
			    		$(element).closest('.radio, .checkbox').addClass('error');
			    		$(element).closest('.radio, .checkbox').find('input, textarea, select').attr('aria-invalid','true');
			    	}
			    	else
			    	{
			    		$(element).closest('label').addClass('error');
			    		$(element).closest('label').find('input, textarea, select').attr('aria-invalid','true');
			    	}
			 	},
			  unhighlight:function(element, classe){
		  			if($(element).closest('.radio, .checkbox').length)
		  			{
		  				$(element).closest('.radio, .checkbox').removeClass('error');
			    		$(element).closest('.radio, .checkbox').find('input, textarea, select').attr('aria-invalid','false');
		  			}
		  			else
		  			{
		  				$(element).closest('label').removeClass('error');
			    		$(element).closest('label').find('input, textarea, select').attr('aria-invalid','false');
		  			}
			  }
		});
	});
});