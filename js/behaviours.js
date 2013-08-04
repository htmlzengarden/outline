var pathimg = '../img/',
    pathbg  = pathimg + 'bg/';

$(function(){
    
    if($('.demo').length)
    {
        $('.pop').colorbox({
        
            inline: true,
            width: '80%'
        });
          
        function rwd()
        {
            rwdimg('noscript.rwdimg');
            
            $('div>video,   '+
              'div>audio,   '+
              'div>img,     '+
              'p>.rwdimg,   '+
              'div>a,       '+
              'div>svg,     '+
              'div>object,  '+
              'div>figure').baseline();
        }
        $(window).resize($.throttle(200, rwd)).trigger('resize');
        $(window).on('fontresize', function(){rwd();});
        
        $('.flexslider').flexslider({
        
            pausePlay:    true,
            controlNav:   true,
            directionNav: true, 
            slideshow:    false,
            animation:   'slide',
            prevText:    '<span>Précédente</span>',
            nextText:    '<span>Suivante</span>',
            pauseText:   '<span>Pause</span>',
            playText:    '<span>Lecture</span>',
            start:       function(slider){
                slider.pause();
            }
        });
        
        $('form').each(function(){
            
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
    }
});