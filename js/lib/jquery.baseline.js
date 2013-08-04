(function($){
    $.baseline = function(el){
        var  pre = '#id-',
            unit = 'em',
             txt = '&nbsp;',
             box = '<div />',
            rand = Math.floor(Math.random() * 10000),
            elem = jQuery(box).attr('id', pre.substr(1) + rand).append(txt),
            base = $(el);
            
        base.parent().height('');

        base.after(elem);
        
        var    test = jQuery(pre + rand),
            hTestPx = test.height(),
            hBasePx = base.height();
        
        test.height(1 + unit);
        
        var hTestEm = test.height();
        
        test.remove();
        
        var remainder = hBasePx % hTestPx,
             division = (hBasePx - remainder) / hTestPx,
              hBaseEm = hTestPx / hTestEm;
        
        if(remainder != 0)
        {
            base.parent().height((division + 1) * hBaseEm + unit);
        }
    };

    $.fn.baseline = function(){
        return this.each(function(){
            (new $.baseline(this));
        });
    };

})(jQuery);