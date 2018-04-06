// Author: Noah Grossman

$(document).foundation({
  accordion: {
    // specify the class used for accordion panels
    content_class: 'content',
    // specify the class used for active (or open) accordion panels
    active_class: 'active',
    // allow multiple accordion panels to be active at the same time
    multi_expand: false,
    // allow accordion panels to be closed by clicking on their headers
    // setting to false only closes accordion panels when another is opened
    toggleable: true
  }
});

// Smooth scrolling
// Adapted from code at http://www.paulund.co.uk/smooth-scroll-to-internal-links-with-jquery
var divNames = ['a[href^="#about"]', 'a[href^="#work"]', 'a[href^="#contact"]', 'a[href^="#epicClient"]', 'a[href^="#epicProduct"]'];
$(document).ready(function(){
	var l = divNames.length;
	for (var i=0; i<l; i++) {
		var s = divNames[i];
		$(s).on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    var $target = $(target);

		    $('html, body').stop().animate({
			    'scrollTop': $target.offset().top
			}, 900, 'swing');
		});
	}
});

// Accordion custom behavior
$("dd a.showContent").click(function () {
	var content = $(this.parentElement).find(".content");
    var clickedIsDown = false;
    if (content.is(':visible')) {
        clickedIsDown = true;
    }
    $("dd").find(".content").slideUp(200);
    if (!clickedIsDown) {
        content.slideDown(500);
    }
});




// // Accordion custom behavior
// $("dd").click(function () {
//     var clickedIsDown = false;
//     if ($(this).find(".content").is(':visible')) {
//         clickedIsDown = true;
//     }
//     pp = $(this).find(".content");
//     $(this).find(".content").slideUp('fast');
//     if (!clickedIsDown) {
//         $(this).find(".content").slideDown('fast');
//     }
// });



$(window).load(function() {
	// Caption settings
    $('img.caption').captionjs({
        'class_name'      : 'captionjs', // Class name for each <figure>
        'schema'          : true,        // Use schema.org markup (i.e., itemtype, itemprop)
        'mode'            : 'animated',   // default | stacked | animated | hide
        'debug_mode'      : false,       // Output debug info to the JS console
        'force_dimensions': true,        // Force the dimensions in case they cannot be detected (e.g., image is not yet painted to viewport)
        'is_responsive'   : true,       // Ensure the figure and image change size when in responsive layout. Requires a container to control responsiveness!
        'inherit_styles'  : true        // Have the caption.js container inherit box-model properties from the original image
    });

    // Center works images vertically in container
    var works = $('dd');
    var l = works.length;
	for (var i=0; i<l; i++) {
		var w = works.get(i).children[0].children[0];
		var imageHeight = w.offsetHeight;
		var containerHeight = $('dd').find('a').height();
		var topOffset = (containerHeight - imageHeight)/2;
		w.style.marginTop = topOffset + 'px';
	}

    //Fast video play
    document.getElementById("2x").playbackRate = 2;
});