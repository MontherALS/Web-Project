const images = [
    "image/project1.jpg",
    "image/project2.jpg",
    "image/project3.jpg",
    "image/project4.jpg",
    "image/project5.jpg",
    "image/project6.jpg",
    "image/project7.jpg",
    "image/project8.jpg",
    "image/project9.jpg"
];

let index  = 0;

let nextBtn = document.getElementById("nextBtn");

const nextBtnAction = ()=>{

    index++;

    if (index == images.length) {
        index = 0;
    }

    document.getElementById("sliderImage").src = images[index];
}

setInterval(() => {

    index++;

    if (index == images.length) {
        index = 0;
    }

    document.getElementById("sliderImage").src = images[index];

}, 5000);

nextBtn.addEventListener("click",nextBtnAction)
