var descriptors = [
                    'Front-End Developer',
                    'UX Designer',
                    'Surfer',
                    'Game Developer',
                    'Aspiring Entrepreneur',
                    'Apple Enthusiast',
                    'Hacker'
                  ];
var fonts = [
                'Lato,Monaco',
                'Myriad Std',
                'Marker Felt',
                'Lakki Reddy, Arial Rounded MT Bold',
                'Dekko, Coming Soon, Baskervile, Palatino',
                'Helvetica Neue',
                'Source Code Pro'
            ];
// List of indices to access descriptors and fonts
var spots = [];
var flag = false;
var descriptor = '';

// Refreshes spots array when all descriptors have been used
var populateSpots = function() {
    var l = descriptors.length;
    for (var i=0; i<l; i++) {
        spots.push(i);
    }
}

populateSpots();

// Change descriptor text and font to one not yet used
var changeDescriptor = function() {
    if (spots.length == 0) {
        populateSpots();
    }
    var i = Math.floor(Math.random()*spots.length);
    $('#descriptor').text(descriptors[spots[i]]);
    $('#descriptor').css('font-family', fonts[spots[i]]);
    spots.splice(i,1);
}

$('#descriptor').on('changeText', function () {
    if (flag) {
        changeDescriptor();
        flag = false;
    } else {
        flag = true
    }
});

$(document).ready(function() {
    // Remove first descriptor from list on page load
    spots.splice(0,1);
    $('#descriptor').addClass('bounceInDown');
});
// Run animation and change descriptor
// Note- fired after bounce in AND bounce out animations, which is what the flag is used for
$('#descriptor').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
    $('#descriptor').toggleClass('bounceInDown').toggleClass('bounceOutDown').toggleClass('delay').trigger('changeText');
});