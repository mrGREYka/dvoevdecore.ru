
jQuery("span.menu").click(function(){
  (".top-nav ul").slideToggle(500, function(){ });
});


/*jQuery(function(){
  SyntaxHighlighter.all();
});*/
jQuery(window).load(function(){
  jQuery('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      jQuery('body').removeClass('loading');
    }
  });
});
