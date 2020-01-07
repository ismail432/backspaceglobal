var visible = true;
var underscore = document.getElementById('console');
var text = document.getElementById("text");
var letCount = 1;
var iterator = 0;

var wordsCounter = function () {
    iterator++;
    if (iterator>= words.length){
        iterator=0;
    }
    return iterator;
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
    }, getRndInteger(20,300));
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
