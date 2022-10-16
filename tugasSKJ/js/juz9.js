$.getJSON('https://archnist.github.io/strvz.github.io/tugasSKJ/js/juz9.json', function(surah1) {
    let surah2 = surah1;
    $.each(surah2, function(i, surah1) {
        $('#ayat').append('<div class="bacaan"><h3>'+ (surah1.surah ? surah1.surah : "") +'</h3><h2>'+ surah1.ar +'</h2><h5>'+ surah1.nomor +'. '+ surah1.tr +'</h5><h4>'+ surah1.nomor +'. '+ surah1.id +'</h4></div>')
    });
});

const loading = document.querySelector(".loading");
const logo = document.querySelector(".logo");
const title = document.querySelector(".title");
const surah = document.getElementById("#daftar-surah");
const daftar = document.querySelector(".body");
const ayat = document.querySelector(".ayat");

setTimeout(() => {
    logo.classList.add("logo2");
    title.classList.add("title2");
}, 800);

setTimeout(() => {
    loading.classList.add("selesai");
},2500);

setTimeout(() => {
    loading.classList.add("selesai2");
}, 3100);

setTimeout(() => {
    ayat.classList.remove("body2");
}, 3200);

setTimeout(() => {
    ayat.classList.add("body3");
}, 3400);