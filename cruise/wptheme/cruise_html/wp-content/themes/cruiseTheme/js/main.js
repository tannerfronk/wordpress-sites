//slick js
$(document).ready(function(){
    $('.picSlider').slick({
        slidesToShow: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        swipe: true,
        centerMode: false,
        responsive: [
            {
                breakpoint: 350,
                settings: {
                    centerMode: true,
                    variableWidth: true,
                }
            }
        ]
    });
});

//hamburger button
function toggleMenu(){
    document.getElementById('hamburgerBtn').classList.toggle('open');
    document.getElementById("primaryNav").classList.toggle('open');
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

//verify email input isn't empty
let emailInput = document.getElementById('#emailInput');

function validateForm() {
    let emailInput = document.forms["emailForm"]["emailInput"].value;
    let emailForm = document.getElementById('emailInput');
    if (emailInput === "") {
        emailForm.focus();
        emailForm.style.border = '1px red solid';
        emailForm.setCustomValidity('Please fill out with your Email Address');
        return false;
    } else {
        return true;
    }
}
//menu activation

let curURL = location.href;
let URLArray = curURL.split('/');
let myPage = URLArray[3];
console.log(curURL)
console.log(myPage)
let myMenuItem = document.querySelectorAll("ul#primaryNav li a")

let activateMenuItem = () => {
    for(i=0; i< myMenuItem.length; i++) {
        let currentPage = myMenuItem[i].getAttribute('href');
        let thisPage = "http://www.tannerjfronk.com/" + myPage + "/"
        if(currentPage === thisPage || curURL === "http://www.tannerjfronk.com/") {
            myMenuItem[i].className = "active";
            if(myMenuItem[i].parentNode.parentNode.parentNode.firstChild.getAttribute('href') === "#"){
                console.log('we made it')
                myMenuItem[i].parentNode.parentNode.parentNode.firstChild.className = "activeParent";
            }
            break;
        }
    }
}
activateMenuItem()

// let numberOfParts = URLArray.length;

// let pageName = URLArray[numberOfParts-1];