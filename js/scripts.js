/*

	01. Twitter - Remplace username by yours
	02. Roles of Header
	03. Smooth Scroll ( ScrollTo )
	04. Navigation - Selected and sticky Navigation
	05. Mobile Navigation
	06. Works Grid
			
*/


/* -- 01.  TWITTER MAKE IT WORK - JUST REMPLACE Google username BY YOURS -- */


	  jQuery(function($){
	     
        $("#ticker").tweet({
          username: "Supview", /*Enter your Twitter username inside quotes eg: web3canvas, barackobama etc*/
          page: 1, /*How many tweets to show at a time, You need to increase #ticker height if you increased this value*/
          avatar_size: null, /*If you want to show your twitter avatar, just change null to avatar size you needed eg: 32, 50, 80 etc..*/
          count: 5, /*Total counts of tweets. */
          loading_text: "Bringing latest tweets..." /*Loading text*/
        })      
        
        });
        
        
	$(document).ready(function() {
		
		var ul = $(this).find(".tweet_list");
		var ticker = function() {
		setTimeout(function() {
		var top = ul.position().top;
		var h = ul.height();
		var incr = (h / ul.children().length);
		var newTop = top - incr;
		if (h + newTop <= 0) newTop = 0;
		ul.animate( {top: newTop}, 500 );
		ticker();
		}, 7000);
		};
		ticker();
		}); 

  

/* -- 02. ROLES OF HEADER -- */

var current = 1; 
var height = $('.roles').height(); 
var numberDivs = $('.roles').children().length; 
var first = $('.roles div:nth-child(1)'); 
setInterval(function() {
    var number = current * -height;
    first.css('margin-top', number + 'px');
    if (current === numberDivs) {
        first.css('margin-top', '0px');
        current = 1;
    } else current++;
}, 2000);


/* -- 03. SCROLL TO  -- */


$('nav a, #down_button a').click(function(e){
    $('html,body').scrollTo(this.hash, this.hash);
    e.preventDefault();
});

/* -- 04. NAVBAR STICKY + SELECTED  -- */


$(function() {

	// Do our DOM lookups beforehand
	var nav_container = $(".nav-container");
	var nav = $("nav");
	
	var top_spacing = 0;
	var waypoint_offset = -60;

	nav_container.waypoint({
		handler: function(event, direction) {
			
			if (direction == 'down') {
			
				nav_container.css({ 'height':nav.outerHeight() });		
				nav.stop().addClass("sticky").css("top",-nav.outerHeight()).animate({"top":top_spacing});
				
			} else {
			
				nav_container.css({ 'height':'auto' });
				nav.stop().removeClass("sticky").css("top",nav.outerHeight()+waypoint_offset).animate({"top":""});
				
			}
			
		},
		offset: function() {
			return -nav.outerHeight()-waypoint_offset;
		}
	});
	
	var sections = $("section");
	var navigation_links = $("nav a");
	
	sections.waypoint({
		handler: function(event, direction) {
		
			var active_section;
			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();

			var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("selected");
			active_link.addClass("selected");

		},
		offset: '25%'
	})
	

});


/* -- 05. MOBILE NAVIGATION -- */

	 $(function() {
	   
      // Create the dropdown base
      $("<select />").appendTo("nav");
      

      
      // Populate dropdown with menu items
      $("nav ul li a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
	   // To make dropdown actually work
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });


/* -- 06. WORKS GRID LOADER -- */

			$(function() {
				Grid.init();
			});
