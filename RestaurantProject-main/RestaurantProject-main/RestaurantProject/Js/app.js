var images = ["../RestaurantProject/Images/main_2.jpg", "../RestaurantProject/Images/picture6.jpg", "../RestaurantProject/Images/contact.webp"]

const first = document.querySelector(".first")
const second = document.querySelector(".second")
const third = document.querySelector(".third")
const body = document.querySelector("body")

let i = 0;

function currentDot() {
    if (i == 0) {
        first.style.color = "red"
        second.style.color = "#FFC515"
        third.style.color = "#FFC515"
    } else if (i == 1) {
        first.style.color = "#FFC515"
        second.style.color = "red"
        third.style.color = "#FFC515"
    } else if (i == 2) {
        first.style.color = "#FFC515"
        second.style.color = "#FFC515"
        third.style.color = "red"
    }
}
function slide() {
    currentDot()
    i++;
    if (i == images.length) {
        i = 0;
    }
    body.style.backgroundImage = `url(${images[i]}`;
}
currentDot();
setInterval(slide, 3000)
first.addEventListener('click', slide)
second.addEventListener('click', slide)
third.addEventListener('click', slide)

