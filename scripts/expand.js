function expansion() {
    var elem = document.getElementById("expand");
    var height = elem.offsetHeight;
    var elem1 = document.getElementById("int");
    elem1.style.height = "calc(1.5em + " + height + "px)";
    //elem.style.height = "calc(1.5em + " + height + "px)";
}

expansion();