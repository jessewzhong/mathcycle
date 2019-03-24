function expansion() {
    var elem = document.getElementById("expand");
    var height = elem.offsetHeight;
    var elem1 = document.getElementById("int");
    elem1.style.height = "calc(1.5em + " + height + "px)";
    elem = document.getElementById("expand1");
    height = elem.offsetHeight;
    elem1 = document.getElementById("int1");
    elem1.style.height = "calc(1.5em + " + height + "px)";

    //elem.style.height = "calc(1.5em + " + height + "px)";
}

window.onload = expansion();