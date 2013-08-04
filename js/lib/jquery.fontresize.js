var fontresize = function(){

    var interval = 200,
        id       = '#detectsize',
        event    = 'fontresize',
        mask     = 'mask';

    var elt = $('<span>&nbsp;</span>');
    
    elt.attr('id', id.substr(1));
    elt.addClass(mask);
    elt.css('height','auto');
    elt.appendTo('body');

    var oldheight = $(id).height();
    
    setInterval(function(){
    
        var newheight = $(id).height();
        
        if(newheight != oldheight)
        {
            $(window).trigger(event);
            oldheight = newheight;
        }
        
    }, interval);
}();
