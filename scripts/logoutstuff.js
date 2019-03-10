function popUpA() {
    toggleClickA();
    var elem = document.getElementById("logout");
    elem.style.visibility = "visible";
    aye(elem);
    pineapple();
    document.addEventListener("keydown", pressA);
    setTimeout(() => document.body.addEventListener("click", toggleA), 10);
}

function toggleClickA() {
    var elem = document.getElementById("logoutbutton");
    if (elem.style.pointerEvents ==="auto" || elem.style.pointerEvents === "") {
        elem.style.pointerEvents = "none";
    }
    else {
        elem.style.pointerEvents = "auto";
    }
}

function pressA(e) {
    if (e.key === "Escape") {
        toggle();
    }
}

function toggleA() {
    if (arguments.length > 0) {
        e = arguments[0];
        if (e.target.classList.contains("clicky")) {
            return;
        }
        else {
            //nothing
        }
    }
    var elem = document.getElementById("logout");
    elem.style.visibility = "hidden";
    bye(elem);
    toggleClickA();
    document.body.removeEventListener("click", toggleA);
    document.removeEventListener("keydown", pressA);
}