function expansion() {
    var elem = document.getElementById("expand");
    var height = elem.offsetHeight;
    elem.style.height = "calc(1.5em + " + height + "px)";
}

expansion();