$.getJSON('https://al-quran-8d642.firebaseio.com/data.json?print=pretty', function(data) {
    let surah = data;
    $.each(surah, function(i, data) {
        $('#daftar-surah').append('<a class="link" href="surah1.html"><div class="card"><h4>'+ data.nama +' ('+ data.nomor +')</h4> <h5>'+ data.arti +' ('+ data.ayat +' ayat)</h5><div class="lafaz"><h4>'+ data.asma +'</h4></div></div></a>')
    });
});

$.getJSON('https://al-quran-8d642.firebaseio.com/surat/1.json?print=pretty', function(surah1) {
    let surah = surah1;
    $.each(surah, function(i, surah1) {
        $('#ayat').append('<div class="bacaan"><h2>'+ surah1.ar +'</h2><h5>'+ surah1.nomor +'. '+ surah1.tr +'</h5><h4>'+ surah1.nomor +'. '+ surah1.id +'</h4></div>')
    });
});

const loading = document.querySelector(".loading");
const logo = document.querySelector(".logo");
const title = document.querySelector(".title");
const surah = document.getElementById("#daftar-surah");
const daftar = document.querySelector(".body");

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