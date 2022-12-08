//memanggil element html agar dapat dimasukkan pada program
const pertanyaan = document.querySelector(".pertanyaan");
const input = document.querySelector(".input");
const btn = document.querySelector(".btn");
const pilihan1 = document.querySelector(".pilihan1");
const pilihan2 = document.querySelector(".pilihan2");

//memunculkan tombol pilihan
function muncul(){
    pilihan1.removeAttribute("style");
    pilihan2.removeAttribute("style");
}

//menghilangkan tombol pilihan
function hilang(){
    pilihan1.setAttribute("style", "display: none;");
    pilihan2.setAttribute("style", "display: none;");
}

//program yang akan dijalankan saat tombol submit diklik
btn.addEventListener("click", function() {
    if(input.value == ""){
        alert("Ketikkan nama kamu dulu ya!");
    } else {
        pertanyaan.innerHTML = "Halo Kak " + input.value + ", aku mau nanya, boleh gak?";
        input.setAttribute("style", "display: none");
        btn.setAttribute("style", "display: none;");
        muncul();
    }
});

//respon yang muncul saat tombol kiri diklik
pilihan1.addEventListener("click", function() {
    if(pertanyaan.innerHTML == "Halo Kak " + input.value + ", aku mau nanya, boleh gak?"){
        pertanyaan.innerHTML = "Oke, langsung aja ya!";
        hilang();
        setTimeout(() => {
            pertanyaan.innerHTML = "Kak " + input.value + " suka makan sayur gak?";
            muncul();
        }, 2000);
    } else if(pertanyaan.innerHTML == "Kak " + input.value + " suka makan sayur gak?"){
        pertanyaan.innerHTML = "Wahhhh bagus tuh, kalau bisa setiap hari makan sayur!";
        pilihan1.innerHTML = "Okee";
        pilihan2.innerHTML = "Lah ngatur";
    } else if(pilihan1.innerHTML == "Affa Iyah?") {
        pertanyaan.innerHTML = "Iyah Ngab";
        hilang();
    } else if(pilihan1.innerHTML == "Okee") {
        pertanyaan.innerHTML = "Sipppp :)";
        hilang();
    }
});

//respon yang muncul saat tombol kanan diklik
pilihan2.addEventListener("click", function() {
    if(pertanyaan.innerHTML == "Halo Kak " + input.value + ", aku mau nanya, boleh gak?"){
        pertanyaan.innerHTML = "Yahhhhh, yaudah byee!";
       hilang();
    } else if(pertanyaan.innerHTML == "Kak " + input.value + " suka makan sayur gak?"){
        pertanyaan.innerHTML = "Yahhh sayang banget, padahal sayur banyak manfaatnya loh";
        pilihan1.innerHTML = "Affa Iyah?";
        pilihan2.innerHTML = "BOAM!!! BOAM!!!";
    } else if(pilihan2.innerHTML == "BOAM!!! BOAM!!!") {
        pertanyaan.innerHTML = "Wes angel bocah";
        hilang();
    } else if(pilihan2.innerHTML == "Lah ngatur") {
        pertanyaan.innerHTML = "Serah dek";
        hilang();
    }
});