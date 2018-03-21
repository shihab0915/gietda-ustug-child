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
    
// FRONT PAGE HOW IT WORKS
    var how = $('.how_it_works');
    how.css('visibility', 'hidden');
    how.waypoint(function() {
        how.addClass("animated fadeInLeft");
        how.css('visibility', 'visible');
    }, {offset: '85%'});
    
// FRONT PAGE HOW IT WORKS- FIND
    var find = $('.find');
    find.css('visibility', 'hidden');
    find.waypoint(function() {
        find.addClass("animated slideInUp");
        find.css('visibility', 'visible');
    }, {offset: '70%'});
    
// FRONT PAGE HOW IT WORKS- HIRE
    var hire = $('.hire');
    hire.css('visibility', 'hidden');
    hire.waypoint(function() {
        hire.addClass("animated slideInUp");
        hire.css('visibility', 'visible');
    }, {offset: '70%'});  
    
// FRONT PAGE HOW IT WORKS- HIRE
    var work = $('.work');
    work.css('visibility', 'hidden');
    work.waypoint(function() {
        work.addClass("animated slideInUp");
        work.css('visibility', 'visible');
    }, {offset: '70%'}); 
    
// FRONT PAGE HOW IT WORKS- HIRE
    var pay = $('.pay');
    pay.css('visibility', 'hidden');
    pay.waypoint(function() {
        pay.addClass("animated slideInUp");
        pay.css('visibility', 'visible');
    }, {offset: '70%'});
    
// FRONT PAGE HOW IT WORKS- POST A PROJECT BTN
    var post_prjt_btn = $('.js_ppbtn');
    post_prjt_btn.css('visibility', 'hidden');
    post_prjt_btn.waypoint(function() {
        post_prjt_btn.addClass("animated zoomIn");
        post_prjt_btn.css('visibility', 'visible');
    }, {offset: '70%'});    
    
// Post a Project
    $("fieldset .collapse").removeClass("collapse");
    
    
});




