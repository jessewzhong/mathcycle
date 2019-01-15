var heights = [];
disable(); 

function disable() {
    var list = document.getElementsByClassName("slider");
    for (var i = 0; i < list.length; i++) {
        list[i].style.pointerEvents = "none";
    }
}

function enable() {
    var list = document.getElementsByClassName("slider");
    for (var i = 0; i < list.length; i++) {
        list[i].style.pointerEvents = "auto";
    }
}

setTimeout(enable, 2000);

function getHeight() {
    var height = document.getElementsByClassName("slide");
    for (var i = 0; i < height.length; i++) {
        heights.push(height[i].getBoundingClientRect().height)
        height[i].style.height = "0px";
        height[i].style.position = "static";
        height[i].style.opacity = "1";
    }
}

setTimeout(getHeight, 2000);

function slide(elem) {
    var list = document.getElementsByClassName("slider");
    var newList = Array.prototype.slice.call(list);
    var temp = newList.indexOf(elem);
    var nextList = document.getElementsByClassName("slide");
    if (nextList[temp].getBoundingClientRect().height === 0) {
        nextList[temp].style.height= heights[temp] + "px";
    }
    else {
        nextList[temp].style.height= "0px";
    }
}