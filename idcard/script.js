const loading = document.querySelector(".loading");
const logo = document.querySelector(".logo");
const title = document.querySelector(".title");
const daftar = document.querySelector(".body");

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
}, 3700);

setTimeout(() => {
    daftar.classList.add("body3");
}, 3900);