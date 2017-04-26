var metier = "Laborantin(e) en biologie";
var motsCles = ["Laboratoire","Expérimentation","Analyses","Biochimie"];

$(document).ready(function(){
	$('#intro').html("<div id = 'frame'> </div>");
	$('#frame').css({
		'height' : '100%',
		'width' : '100%',
        'background-color' : 'black'
	});
	for(var i =0; i<motsCles.length; i++){
		$('#frame').html("<div id= 'mot-cle" + i + "'>" + motsCles[i] + "</div>");    	
    	makeDiv(motsCles[i], i);
	}
	$('#frame').html("<div id= 'metier'> <h1>" + metier + "</h1></div>");
	$('#metier').css({
		'z-index' : 9999,
        'position' : 'absolute',
        'left' : '90%',
        'top' : '50%',
        'margin-left' : -$('#metier').outerWidth()/2,
        'margin-top' : -$('#metier').outerHeight()/2
    });
    
});

function makeDiv(motCle, i){
    // vary size for fun
    var divsize = ((Math.random()*100) + 50).toFixed();
    var color = '#'+ Math.round(0xffffff * Math.random()).toString(16);
    var divId = '#'+motCle;
    console.log(divId);
    var div = '<div id='+motCle+' class="container"> <h2>'+motCle+'</h2> </div>';
    $('#frame').html(div);
    $(divId).css({
        'display':'inline-block',
        'color':'white',
        'font-family':'codropsicons',
        'clear':'left',
    	'z-index' : 300,
        'min-width':divsize+'px',
        'min-height':divsize+'px',
        'line-height' : divsize+'px',
        'background-color': color,
        'white-space' : 'nowrap',
        'padding' : 5+'px',

    });


    // make position sensitive to size and document's width
    var posx = (Math.random() * ($(document).width() - divsize)).toFixed();
    var posy = (Math.random() * ($(document).height() - divsize)).toFixed();

    // make div square
    var divHeight = $(divId).width();
    console.log(divHeight);
    console.log($(divId).height());

    $(divId).css({
        'height': divHeight+'px',
        'position':'absolute',
        'left':posx+'px',
        'top':posy+'px',
        'text-align' : 'center',
        'vertical-align' : 'middle',
        'display':'inline-block',
        //make div round
        'border-radius' : '50%',
        'opacity' : '0.9',
        'white-space' : 'nowrap',
        'padding' : 5+'px'
    }).appendTo( 'body' ).fadeIn(100);

    // animate each div independently 
    animateDiv(divId);
}


// Functions for animation
function animateDiv(target) {
    var $target = $(target);
    var newq = makeNewPosition();
    var oldq = $target.offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);

    $(target).animate({
        top: newq[0],
        left: newq[1]
    }, speed, function() {
        animateDiv(target);
    });

}

function makeNewPosition() {

    // Get viewport dimensions (remove the dimension of the div)
    $container = ($(window))
    var h = $container.height()-150;
    var w = $container.width()-100;

    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);

    return [nh, nw];

}

function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);

    var greatest = x > y ? x : y;

    var speedModifier = 0.1;

    var speed = Math.ceil(greatest / speedModifier);

    return speed;

} 