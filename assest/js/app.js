const backcontainer = document.querySelector(".hero-container");
const item1s = document.querySelectorAll(".item1");
const car1 = "./assest/images/slider1.png";
const car2 = "./assest/images/slider2.png";
const car3 = "./assest/images/slider3.png";
const hamburger = "../../assest/images/menu.svg";
const cross = "../../assest/images/cross.svg";
const btn1 = document.querySelectorAll(".btn1");
const content1 = document.querySelector("#content1");
const content2 = document.querySelector("#content2");
const content3 = document.querySelector("#content3");
const toggleBtn = document.querySelector(".toggle");
toggleBtn.addEventListener("click", toggleHandle);
const slider = document.querySelector(".list");
const imgg = document.querySelector("#myhamb");
const moretext1 = document.querySelector(".more-text1");
const morebtn1 = document.querySelector("#readmore1");
const moretext2 = document.querySelector(".more-text2");
const morebtn2 = document.querySelector("#readmore2");
const moretext3 = document.querySelector(".more-text3");
const morebtn3 = document.querySelector("#readmore3");

/* morebtn1.addEventListener("click", () => {
  moretext1.classList.remove("d-none");
  morebtn1.classList.add("d-none");
});

morebtn2.addEventListener("click", () => {
  moretext2.classList.remove("d-none");
  morebtn2.classList.add("d-none");
});

morebtn3.addEventListener("click", () => {
  moretext3.classList.remove("d-none");
  morebtn3.classList.add("d-none");
}); */

let carslider = {
  prev: car1,
  now: car2,
  nextt: car3,
};

item1s.forEach((item) => {
  item.addEventListener("click", itemClickHandle);
});

function itemClickHandle(e) {
  console.log(e.target.src);
  backcontainer.style.backgroundImage = `url(${e.target.src})`;
  clearInterval(myvar);
}
var myvar = setInterval(function () {
  /* console.log(carslider); */
  var infosave = carslider.prev;
  carslider.prev = carslider.now;
  carslider.now = carslider.nextt;
  carslider.nextt = infosave;
  backcontainer.style.backgroundImage = `url(${carslider.now})`;
}, 10000);

btn1.forEach((elements) => {
  elements.addEventListener("click", (e) => {
    if (e.target.classList.contains("myact")) {
    } else {
      e.target.classList.add("myact");
      removeOther(e);
    }
    if (e.target.id === "1") {
      content1.classList.remove("d-none");
      content2.classList.add("d-none");
      content3.classList.add("d-none");
    } else if (e.target.id === "2") {
      content1.classList.add("d-none");
      content2.classList.remove("d-none");
      content3.classList.add("d-none");
    } else if (e.target.id === "3") {
      content1.classList.add("d-none");
      content2.classList.add("d-none");
      content3.classList.remove("d-none");
    } else {
      content1.classList.remove("d-none");
      content2.classList.add("d-none");
      content3.classList.add("d-none");
    }
  });
});

function removeOther(e) {
  btn1.forEach((element) => {
    if (element !== e.target) {
      element.classList.remove("myact");
    }
  });
}

var flkty = new Flickity(".main-gallery", {
  cellAlign: "left",
  contain: true,
  wrapAround: true,

  autoPlay: 5000,
});

function toggleHandle(e) {
  if (slider.classList.contains("change")) {
    slider.classList.remove("change");
    imgg.src = hamburger;
  } else {
    slider.classList.add("change");
    imgg.src = cross;
  }
}
