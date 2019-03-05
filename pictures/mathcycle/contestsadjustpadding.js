var list = document.getElementsByClassName("contests");
for (var i = 0; i < list.length; i++){
    var temp = list[i].getElementsByClassName("regular");
    temp[temp.length - 1].style.paddingBottom = "0";
}