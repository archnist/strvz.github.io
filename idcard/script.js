const loading = document.querySelector(".loading");
const logo = document.querySelector(".logo");
const title = document.querySelector(".title");
const daftar = document.querySelector(".body");
const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const touch = document.querySelector(".touch");
const footer = document.querySelector(".footer");

setTimeout(() => {
    logo.classList.add("logo2");
}, 800);

setTimeout(() =>{
    title.classList.add("title2");
}, 1600)

setTimeout(() => {
    loading.classList.add("selesai");
},2500);

setTimeout(() => {
    loading.classList.add("selesai2");
}, 3500);

setTimeout(() => {
    daftar.classList.remove("body2");
    touch.classList.remove("body2");
    footer.classList.remove("body2");
}, 3700);

setTimeout(() => {
    daftar.classList.add("body3");
    touch.classList.add("body3");
    footer.classList.add("body3");
}, 3900);

