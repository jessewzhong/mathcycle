function scrollRight() {
    var hide = document.getElementsByClassName("click");
    hide[0].style.pointerEvents = "none";
    hide[1].style.pointerEvents = "none";
    var elem = document.getElementsByClassName("left");
    var len = elem.length;
    var boxes = document.getElementsByClassName("smol");
    for (var i = 0; i < elem.length; i++) {
        if (elem[i].style.left === "0%") {
            elem[i].style.left = "-100%";
            elem[i].style.opacity = "0";
            if (elem[(i + 2) % len].style.left === "-100%") {
                elem[(i + 2) % len].style.left = "100%";
            }
            doIt(elem[(i + 1)  % len]);
            boxes[2 * i].style.backgroundColor = "white";
            boxes[(2 * (i + 1)) % (boxes.length + 1)].style.backgroundColor = "red";
            setTimeout(function () {hide[0].style.pointerEvents = "auto"; hide[1].style.pointerEvents = "auto"}, 1000);
            break;
        }
    }
}

function doIt(element) {
    element.style.opacity = "1";
    element.style.left = "0%";
}

function nut() {
    var hide = document.getElementsByClassName("click");
    hide[0].style.pointerEvents = "none";
    hide[1].style.pointerEvents = "none";
    var elem = document.getElementsByClassName("left");
    var len = elem.length;
    var boxes = document.getElementsByClassName("smol");
    for (var i = 0; i < elem.length; i++) {
        if (elem[i].style.left === "0%") {
            elem[i].style.left = "100%";
            elem[i].style.opacity = "0";
            if (elem[(i - 2 + len) % len].style.left === "100%") {
                elem[(i - 2 + len) % len].style.left = "-100%";
            }
            doIt(elem[(i - 1 + len) % len]);
            boxes[2 * i].style.backgroundColor = "white";
            boxes[(2 * (i - 1) + boxes.length + 1) % (boxes.length + 1)].style.backgroundColor = "red";
            setTimeout(function () {hide[0].style.pointerEvents = "auto"; hide[1].style.pointerEvents = "auto"}, 1000);
            break;
        }
    }
}