setTimeout(function(){

  console.clear();

var s = Snap();
var sMaxX = 1400;
var sMaxY = 600;
var viewBoxList = [0, 0, sMaxX, sMaxY];
s.attr({
    viewBox: viewBoxList
});

var gLines = s.g();
var gText = s.g();
var patt;
var maskObj;
var text;
var maskElem = s.mask();

var pSize = 700;
var maxLines =0;
var maxLinesDouble = maxLines * 2;
var lineStep = pSize / maxLines;
var lines = [];
var pathDur = 1000;
var delay = 250;

var colorSteps = maxLines / 2;
var colors = [
              'rgba(0,0,0,0)',
              'rgba(0,0,0,0)',
              'rgba(0,0,0,0)',
              'rgba(0,0,0,0)',
              'rgba(0,0,0,0)',
               'rgba(0,0,0,0)',
              'teal',
              'purple'
             ]

var lineLength = Math.sqrt( Math.pow( pSize, 2 ) * 2);


var lineObj = function () {
    var d = 'M' + [pSize, 0, 0, pSize];
    var path = s.path(d);
    var pos = 0;
    var addMask = false;
    var pathDelay = 0;
    var dashArray = 0;
    var strokeW = 0;

    this.init = function ( params ) {
        pos = params.pos;
        strokeW = params.strokeW;
        var strokeColor = params.color || 'red'
        var offsetX = params.offsetX || 0;
        var x = pSize - lineStep * (pos + .5) + offsetX;
        var translateParams = [x, 0];

        pathDelay = params.delay || delay;
        dashArray = lineLength;
        addMask = params.addMask || false;

        path.attr({
            transform: 'translate(' + translateParams + ')',
            'stroke-width': strokeW,
            stroke: strokeColor,
            'stroke-linecap': 'square',
            'stroke-dashoffset': lineLength,
            'stroke-dasharray': dashArray
        });

        gLines.add(path);

    }// Init

    this.reset = function () {
        path.attr({
            'stroke-dashoffset': lineLength,
            'stroke-dasharray': dashArray
        });
    }

    this.animdDelay = function() {
        setTimeout(pathAnim,
                   (maxLinesDouble - pos) * pathDelay
                  );
    }

    var countNextAnim = 0;

    function runNextAnim() {
        if ( addMask == true ) {
            // Why 0?
            if ( pos == 0) {
                countNextAnim++;


            }
        }
    }

    function pathAnim () {

        path.animate({
            'stroke-dashoffset': '0'
        	},
			pathDur,
			runNextAnim
            );
    }

}// lineObj

// ------------------------------------

function createLines( params ) {

    var strokeW = params.strokeW;

    for ( var i = 0; i < maxLinesDouble; i++ ) {
        var line = new lineObj;
        var color = params.color || colors[i % colorSteps];

        line.init({
            pos: i,
            strokeW: params.strokeW,
            offsetX: params.offsetX,
            delay: params.delay,
            addMask: params.addMask || false,
            color: color,
        });

        lines.push(line);
    }
}

// ------------------------------------

function createPattern() {

   console.log('* - createPattern');

    var rect = s.rect(0,0, pSize, pSize);
    rect.attr({
        fill: 'white',
    });

    gLines.add(rect);

    createLines({
        strokeW: lineStep / 1.4,
        addMask: false
        });

    createLines({
        strokeW: 2,
        color: '#002',
        offsetX: lineStep / 2 + 7,
        delay: 300,
        addMask: true
    	});

  	patt = gLines.toPattern(0,0, pSize, pSize);

}

function animatePattern() {

    for ( var i = 0; i < lines.length; i++ ) {
        var line = lines[i];

        line.reset();
        line.animdDelay();
    }
}

// ------------------------------------

var textObj = function () {

    var textDur = 1500;
    var dashoffset = 1200;
    var textGInit = s.g();
        var text1 = s.text('50%','34%','VEDA\'18');
        var text2 = s.text('50%','73%','A TECH FEST');

    text1.attr({
       dy: '.4em',
       'font-size': '1.3em',
       'color': 'red'
    });
    text2.attr({
      dy: '.000001em',
       'font-size': '.4em',
       'color': 'blue'
    });

    textGInit.add(text1,text2);



   textGInit.attr({
        'text-anchor': 'middle',
        'font': '15em/1 makdah',
        fill: 'rgba(0,0,0,0)',
        stroke: 'white',
        'stroke-width': 1,
        'stroke-dasharray': dashoffset,
        'stroke-dashoffset': dashoffset
    });

    var textGFill = textGInit.clone();

    textGInit.attr({
        transform: 'translate(2,5)'
    });

    gText.add(textGInit,textGFill);

    this.textAnim = function () {
        textGFill.animate({
            'stroke-dashoffset': 0
	        },
            textDur,
            setTextStroke);
    }

   function setTextStroke () {
        setTextFill();

        textGInit.animate({
            'stroke-dashoffset': 0
            },
            textDur
            );
    }

    function setTextFill () {

        animatePattern();

        textGFill.attr({
            fill: patt
        });
    }

    this.reset = function () {

        var initState = {
            fill: 'black',
            'stroke-dasharray': dashoffset,
            'stroke-dashoffset': dashoffset
        };

        textGInit.attr( initState );
        textGFill.attr( initState );

        //this.textAnim();
    }
}

// ------------------------------------

function createText() {
 console.log('* - createText');
    text = new textObj;
    text.textAnim();
}

createPattern();
createText();
}, 4100);
