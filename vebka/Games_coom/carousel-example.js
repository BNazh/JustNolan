var interval = 1000; // You can change this value to your desired speed. The value is in milliseconds, so if you want to advance a slide every 5 seconds, set this to 5000.
var switching = setInterval("toggleSlide(true)", interval);

window.paused = false;

function toggleInterval() {
    var button = document.getElementById("pauseButton");
    if(!window.paused) {
        clearInterval(switching);
        button.value = "Resume";
    } else {
        switching = setInterval("toggleSlide(true)", interval);
        button.value = "Pause";
    }
    window.paused = !(window.paused);
}

// direction = boolean value: true or false. If true, go to NEXT slide; otherwise go to PREV slide
function toggleSlide(direction) {
    var elements = document.getElementsByClassName("hideable"); // gets all the "slides" in our slideshow
    
    // Find the LI that's currently displayed
    var visibleID = getVisible(elements);

    elements[visibleID].style.display = "none"; // hide the currently visible LI
    if(!direction) {
        var makeVisible = prev(visibleID, elements.length); // get the previous slide
    } else {
        var makeVisible = next(visibleID, elements.length); // get the next slide
    }
    elements[makeVisible].style.display = "block"; // show the previous or next slide
    var sn = document.getElementById("slideNumber");
    sn.innerHTML = (makeVisible + 1);
}

function getVisible(elements) {
    var visibleID = -1;
    for(var i = 0; i < elements.length; i++) {
        if(elements[i].style.display == "block") {
            visibleID = i;
        }
    }
    return visibleID;
}
 
function prev(num, arrayLength) {
    if(num == 0) return arrayLength-1;
    else return num-1;
}
 
function next(num, arrayLength) {
    if(num == arrayLength-1) return 0;
    else return num+1;
}

function goToEdge(where) {
    var elements = document.getElementsByClassName("hideable");
    var visibleID = getVisible(elements);
    var firstButton = document.getElementById("firstButton");
    var lastButton = document.getElementById("lastButton");

    
    var sn = document.getElementById("slideNumber");
    elements[visibleID].style.display = "none";
    if(!where) {
        elements[0].style.display = "block";
        sn.innerHTML = 1;
    } else {
        elements[elements.length-1].style.display = "block";
        sn.innerHTML = elements.length;
    }
}










var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-gxZBSGMCGZ6DU"
});
