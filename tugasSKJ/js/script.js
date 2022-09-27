$.getJSON('https://muhammadagil.github.io/tugasSKJ/js/data.json', function(data) {
    let surah = data; 
    $.each(surah, function(i, data) {
        $('#daftar-surah').append('<a class="link" href="'+ data.link +'"><div class="card"><h4>'+ data.nama +' ('+ data.nomor +')</h4> <h5>'+ data.arti +' ('+ data.ayat +' ayat)</h5><div class="lafaz"><h4>'+ data.asma +'</h4></div></div></a>')
    });
});

$.getJSON('https://muhammadagil.github.io/tugasSKJ/js/juz.json', function(data) {
    let juz = data;
    $.each(juz, function(i, data) {
        $('#daftar-juz').append('<a class="link" href="'+ data.link +'"><div class="card2"><h4>'+ data.nama +'</h4> <h5>'+ data.surah +'</h5><div class="lafaz2"><h4>'+ data.lafaz +'</h4></div></div></a>')
    });
});

const loading = document.querySelector(".loading");
const logo = document.querySelector(".logo");
const title = document.querySelector(".title");
const surah = document.getElementById("#daftar-surah");
const daftar = document.querySelector(".body");
const juz = document.querySelector(".body4");
const menu1 = document.querySelector(".surah");
const menu2 = document.querySelector(".juz");

menu2.addEventListener("click", function() {
    this.classList.add("active");
    menu1.classList.remove("active");
    daftar.classList.add("body2");
    juz.classList.remove("body2");
    setTimeout(() => {
        juz.classList.add("body3");
    }, 500)
});

menu1.addEventListener("click", function() {
    this.classList.add("active");
    menu2.classList.remove("active");
    daftar.classList.remove("body2");
    juz.classList.add("body2");
    setTimeout(() => {
        daftar.classList.add("body3");
    }, 500)
});

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
    daftar.classList.remove("body2");
}, 3200);

setTimeout(() => {
    daftar.classList.add("body3");
}, 3400);
