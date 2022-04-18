function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("nav-bar").style.backgroundColor = "rgb(255,255,255,0.60)";
        document.getElementById("log-in").style.color = "rgb(68, 68, 68)";
        document.getElementById("lang").style.color = "rgb(68, 68, 68)";
        document.getElementById("log-in").style.borderColor = "rgb(68, 68, 68)";
        document.querySelector('.choose-lang img').style.filter = 'invert(100%)';
        //document.getElementsByClassName('choose-lang')[0].children[0].style.filter = 'invert(100%)';



        let options = document.getElementsByClassName("site-links");
        for (let index = 0; index < options.length; index++) {
            options[index].style.color = "black"
        }

    } else {
        document.getElementById("nav-bar").style.backgroundColor = "transparent";
        document.getElementById("log-in").style.color = "white";
        document.getElementById("lang").style.color = "white";
        document.getElementById("log-in").style.borderColor = "white";
        document.querySelector('.choose-lang img').style.filter = 'invert(0%)';


        let options = document.getElementsByClassName("site-links");
        for (let index = 0; index < options.length; index++) {
            options[index].style.color = "white"
        }
    }
}


function navslider(id) {
    if (document.getElementById(id).classList.contains('open') == true) {
        document.getElementById(id).classList.remove('open');
    } else {
        document.getElementById(id).classList.add('open');
    }
}



function Underline() {
    console.log("Here");
    document.getElementById('nav-underline').style.textDecoration = "underline"
}
var a = window.innerWidth;

function openfooternav(id) {

    if (a < 850) {
        if (document.getElementById(id).style.display == "none") {
            var footerclose = document.querySelectorAll('.items');
            for (var f = 0; f < footerclose.length; f++) {
                footerclose[f].style.display = "none"
            }
            document.getElementById(id).style.display = "block"
        } else {
            document.getElementById(id).style.display = "none"
        }
    }

}