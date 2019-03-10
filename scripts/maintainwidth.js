function banana() {
    var elem = document.getElementById("loginA");
    var width = elem.getBoundingClientRect().width;
    elem.style.width = width + "px";
}

function apple() {
    var elem = document.getElementById("createloginA");
    elem.style.width = document.getElementById("loginA").getBoundingClientRect().width + "px";
}

function pineapple() {
    var elem = document.getElementById("logoutA");
    elem.style.width = document.getElementById("loginA").getBoundingClientRect().width + "px";
}   

banana();
pineapple();
apple();