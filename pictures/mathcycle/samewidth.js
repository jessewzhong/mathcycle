var list = document.getElementsByClassName("grid2");
for (var i = 0; i < list.length; i++){
    var temp = list[i].getBoundingClientRect().width;
    temp = 0.92 * temp;
    list[i].style.height = temp + "px";
}