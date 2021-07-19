const forward = document.querySelector(".forward")
  , backward = document.querySelector(".backward");
var slider_num = 0;
const slider = document.querySelector(".slider");
function foward() {
    3 == slider_num ? (slider_num = 0,
    slider.children[0].classList.add("active"),
    slider.children[3].classList.remove("active")) : (slider.children[slider_num + 1].classList.add("active"),
    slider.children[slider_num].classList.remove("active"),
    slider_num++),
    add.innerHTML = 0
}
function baward() {
    0 == slider_num ? (slider_num = 3,
    slider.children[3].classList.add("active"),
    slider.children[0].classList.remove("active")) : (slider.children[slider_num - 1].classList.add("active"),
    slider.children[slider_num].classList.remove("active"),
    slider_num--),
    add.innerHTML = 0
}
forward.addEventListener("click", foward, !1),
backward.addEventListener("click", baward, !1);
const t = document.querySelector('[alt="www.000webhost.com"]');
t.outerHTML = "";
const butto = document.querySelector(".sib")
  , add = document.querySelector(".add");
function ad() {
    add.innerHTML = parseInt(add.innerHTML) + 1
}
butto.addEventListener("click", ad, !1);
const adl = document.querySelector(".adl");
function adu() {
    document.querySelector(".slider-div.active .deta").style.display = "block"
}
adl.addEventListener("click", adu, !1);
