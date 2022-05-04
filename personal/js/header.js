
let links = document.querySelectorAll("header li");

for (let c = 0; c < links.length; c++) {
    links[c].addEventListener("mouseenter", function () {
        links[c].style.backgroundColor = "blue";
    })
}

for (let c = 0; c < links.length; c++) {
    links[c].addEventListener("mouseleave", function () {
        links[c].style.backgroundColor = "transparent";
    })
}

$(document).ready(function() {
    function adjustMain() {
        $('main').css('margin-top', $('header').outerHeight());
    }
    window.onresize = adjustMain;
});






