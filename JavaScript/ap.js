var main__img = document.getElementById("main__img");
var images = new Array(
    "../images/controller.svg",
    "../images/ipad.svg",
    "../images/tv.svg",
    "../images/g.svg"
);
var len = images.length;
var i = 0;

function slider(){
    if (i > len-1) {
        i = 0;
        
    }
    main__img.src = images[i];
    i++;
    setTimeout('slider()', 1500);
}