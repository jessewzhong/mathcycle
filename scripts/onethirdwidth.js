var list = document.getElementsByClassName("grid");
for (var i = 0; i < list.length; i++){
    var temp = list[i].getBoundingClientRect().width;
    temp = 0.96 * temp / 3;
    list[i].style.height = temp + "px";
}