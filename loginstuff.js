function popUp() {
    toggleClick();
    var elem = document.getElementById("login");
    elem.style.visibility = "visible";
    aye(elem);
    banana();
    var item = document.getElementById("focus");
    item.focus();
    document.addEventListener("keydown", press);
    setTimeout(() => document.body.addEventListener("click", toggle), 10);
}

function press(e) {
    if (e.key === "Escape") {
        toggle();
    }
}

function aye(e) {
    e.style.opacity = "1";
}

function bye(e) {
    e.style.opacity = "0";
}

function toggle() {
    if (arguments.length > 0) {
        e = arguments[0];
        if (e.target.classList.contains("clicky")) {
            return;
        }
        else if (e.target.id === "account") {
            var elem = document.getElementById("login");
            elem.style.visibility = "hidden";
            aye(elem);
            toggleClick();
            document.body.removeEventListener("click", toggle);
            document.removeEventListener("keydown", press);
            return;
        }
        else {
            //nothing
        }
    }
    var elem = document.getElementById("login");
    elem.style.visibility = "hidden";
    bye(elem);
    elem = document.getElementById("loginA");
    elem.reset();
    elem = document.getElementById("createlogin");
    elem.style.visibility = "hidden";
    bye(elem);
    elem = document.getElementById("createloginA");
    elem.reset();
    toggleClick();
    document.body.removeEventListener("click", toggle);
    document.removeEventListener("keydown", press);
}

function toggleClick() {
    var elem = document.getElementById("logbutton");
    if (elem.style.pointerEvents ==="auto" || elem.style.pointerEvents === "") {
        elem.style.pointerEvents = "none";
    }
    else {
        elem.style.pointerEvents = "auto";
    }
}

function loadCreate() {
    toggleClick();
    var elem = document.getElementById("createlogin");
    elem.style.visibility = "visible";
    aye(elem);
    apple();
    var item = document.getElementById("focuss");
    item.focus();
    setTimeout(() => document.addEventListener("keydown", press), 10);
    setTimeout(() => document.body.addEventListener("click", toggle), 10);
}