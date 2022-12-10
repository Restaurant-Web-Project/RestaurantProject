

// Menu 
const breakfastButton = document.querySelector(".breakfast__button")
const lunchButton = document.querySelector(".lunch__button")
const dinnerButton = document.querySelector(".dinner__button")
const breakfastMenu = document.querySelector('.menu__breakfast')
const lunchMenu = document.querySelector('.menu__lunch')
const dinnerMenu = document.querySelector('.menu__dinner')

breakfastButton.addEventListener('click', () => {
    console.log("here")
    breakfastMenu.style.display = "block"
    dinnerMenu.style.display = "none"
    lunchMenu.style.display = "none"
})
lunchButton.addEventListener('click', () => {
    lunchMenu.style.display = "block"
    dinnerMenu.style.display = "none"
    breakfastMenu.style.display = "none"
})
dinnerButton.addEventListener('click', () => {
    console.log("here")

    dinnerMenu.style.display = "block"
    lunchMenu.style.display = "none"
    breakfastMenu.style.display = "none"
})

// Menu