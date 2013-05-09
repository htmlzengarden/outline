var function(){

    var interval = 250,
        id       = '#detectsize',
        event    = 'fontresize',
        mask     = 'mask';

    var elt = $('<span>&nbsp;</span>');
    
    elt.attr('id', id.substr(1));
    elt.addClass(mask);
    elt.css('height','auto');
    elt.appendTo('body');

    var height = $(id).height();
    
    setInterval(function(){
    
        var newheight = $().height();
    
        if(newheight != height)
        {
            $(window).trigger(event);
            height = newheight;
        }
    }, interval);
}();
