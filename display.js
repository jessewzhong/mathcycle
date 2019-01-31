function display(elem) {
    var list = document.getElementsByClassName("disp");
    var newList = Array.prototype.slice.call(list);
    var temp = newList.indexOf(elem);
    var nextList = document.getElementsByClassName("hide");
    if (nextList[temp].style.opacity === "0" || nextList[temp].style.opacity === "") {
        nextList[temp].style.opacity = "1";
        nextList[temp].style.cursor = "auto";
    }
    else {
        nextList[temp].style.opacity = "0";
        nextList[temp].style.cursor = "default";
    }
}