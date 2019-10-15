var words = ["Web Design", "Web Development", "App Development", "Web Research" ];
var visible = true;
var underscore = document.getElementById('console');
var text = document.getElementById("text");
var letCount = 1;



var wordsCounter = function () {
    return Math.floor(Math.random() * 4)
};

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

var c = wordsCounter();
var length = words[c].length + 3;


function showText(words) {


    if (letCount === length) {
        letCount = 0;
        c = wordsCounter();
        length = words[c].length + 3;
    } else {
        text.innerHTML = words[c].substring(0, letCount);
        letCount += 1;

    }

    window.setTimeout(function () {
        showText(words);
    }, getRndInteger(200,600));
}

showText(words);


// cursor

this.setInterval(function () {
    if (visible === true) {
        underscore.className = 'underscore hidden';
        visible = false;
    } else {
        underscore.className = 'underscore';
        visible = true;
    }
}, 400);
