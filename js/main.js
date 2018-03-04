jQuery(document).ready(function($){

// FRONT PAGE WELCOME TEXT
    $('.headline--welcome').waypoint(function() {
        $('.headline--welcome').addClass("animated bounceInLeft"); 
    }, {offset: '50%'});
    
    $('.sub-title').waypoint(function() {
    $('.sub-title').addClass("animated bounceInRight");
    }, {offset: '50%'});
   
// FRONT PAGE CATEGORY LIST    
  var cat_holder = $('.cat_holder');
    cat_holder.waypoint(function() {
        cat_holder.addClass("animated bounceInUp");
        cat_holder.removeClass("ini-pos");
    }, {offset: '70%'});
    
    
    
    
});