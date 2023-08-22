var imgIndex = 0;
const slides = document.querySelectorAll("#slides img"),
      dd = document.getElementById("dd"),


changeSlide = i => {
    slides[imgIndex].classList.remove("visible");
    imgIndex = (i === 1) ? (imgIndex === 4 ? 0 : imgIndex + 1) : (imgIndex === 0 ? 4 : imgIndex - 1);
    slides[imgIndex].classList.add("visible");
};

document.getElementById("prev").addEventListener("click", () => {
    changeSlide(-1);
});

document.getElementById("next").addEventListener("click", () => {
    changeSlide(1);
});


document.getElementById("themes").addEventListener("click", () => {
    dd.classList.toggle("active");
});

document.querySelectorAll("#dd a").forEach(a => {
    a.addEventListener("click", () => {
        dd.classList.remove("active");
    });
});
