function revdisplay(elem) {
    var list = document.getElementsByClassName("revclick");
    var newList = Array.prototype.slice.call(list);
    var temp = newList.indexOf(elem);
    elem.style.pointerEvents = "none";
    var nextList = document.getElementsByClassName("revdisp");
    if (nextList[temp].style.opacity === "0" || nextList[temp].style.opacity === "") {
        nextList[temp].style.opacity = "1";
        nextList[temp].style.cursor = "auto";
        setTimeout(function () {elem.style.pointerEvents = "auto"}, 500);
    }
    else {
        nextList[temp].style.opacity = "0";
        nextList[temp].style.cursor = "default";
        setTimeout(function () {elem.style.pointerEvents = "auto"}, 500);
    }
}