let kegiatan = [
   '04.30 - 05.00 : Sholat Subuh',  
   '05.00 - 06.30 : Siap-Siap Untuk Sekolah',  
   '06.30 - 11.25 : Belajar PJJ',  
   '11.25 - 12.00 : Istirahat',
   '12.06 - 12.30 : Sholat Dzuhur',
   '12.30 - 13.00 : Makan Siang',
   '14.00 - 15.20 : Tidur Siang',
   '15.29 - 14.00 : Sholat Ashar',
   '14.00 - 17.30 : Istirahat / Mengerjakan Tugas',
   '17.30 - 17.45 : Mandi',
   '18.15 - 18.35 : Sholat Maghrib',
   '18.35 - 19.30 : Mengaji',
   '19.31 - 20.00 : Sholat Isya',
   '20.00 - 20.15 : Makan Malam',
   '20.15 - 22.00 : Istirahat / Mengerjakan Tugas',
   '22.00 - Pagi  : Tidur',
   "11.30 - 12.30 : Sholat Jum'at",
   "11.25 - 11.30 : Siap-Siap Sholat Jum'at",
   '05.00 - 06.30 : Tidur',
   '06.30 - 12.00 : Aktivitas Bebas'
      ];  
      
      let hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];

      let about = `MySchedule adalah aplikasi yang berfungsi sebagai pengingat jadwal kegiatan yang dilakukan setiap hari.`;
      
const title = document.querySelector(".modal-title");
const senin = document.querySelector(".senin");
const selasa = document.querySelector(".selasa");
const rabu = document.querySelector(".rabu");
const kamis = document.querySelector(".kamis");
const jumat = document.querySelector(".jumat");
const sabtu = document.querySelector(".sabtu");
const minggu = document.querySelector(".minggu");
const jam1 = document.querySelector(".jam1");
const jam2 = document.querySelector(".jam2");
const jam3 = document.querySelector(".jam3");
const jam4 = document.querySelector(".jam4");
const jam5 = document.querySelector(".jam5");
const jam6 = document.querySelector(".jam6");
const jam7 = document.querySelector(".jam7");
const jam8 = document.querySelector(".jam8");
const jam9 = document.querySelector(".jam9");
const jam10 = document.querySelector(".jam10");
const jam11 = document.querySelector(".jam11");
const jam12 = document.querySelector(".jam12");
const jam13 = document.querySelector(".jam13");
const jam14 = document.querySelector(".jam14");
const jam15 = document.querySelector(".jam15");
const jam16 = document.querySelector(".jam16");
      
const btnSenin = document.querySelector(".btnSenin");
const btnSelasa = document.querySelector(".btnSelasa");
const btnRabu = document.querySelector(".btnRabu");
const btnKamis = document.querySelector(".btnKamis");
const btnJumat = document.querySelector(".btnJumat");
const btnSabtu = document.querySelector(".btnSabtu");
const btnMinggu = document.querySelector(".btnMinggu");
const btnAbout = document.querySelector(".btnAbout");
const owner = document.querySelector(".owner");
const load = document.querySelector(".loading");
const body = document.querySelector("body");
const nav = document.querySelector("nav");
      
senin.addEventListener("click", function(){
hariSenin();
});

btnSenin.addEventListener("click", function(){
hariSenin();
});

setTimeout(()=>{
owner.style.opacity = "1";
}, 1000);

setTimeout(()=>{
load.classList.add("selesai");
body.classList.remove("overflow-hidden");
nav.classList.remove("invisible");
}, 3000);

function hariSenin(){
title.innerHTML = hari[0];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[1];
jam3.innerHTML = kegiatan[2];
jam4.innerHTML = kegiatan[3];
jam5.innerHTML = kegiatan[4];
jam6.innerHTML = kegiatan[5];
jam7.innerHTML = kegiatan[6];
jam8.innerHTML = kegiatan[7];
jam9.innerHTML = kegiatan[8];
jam10.innerHTML = kegiatan[9];
jam11.innerHTML = kegiatan[10];
jam12.innerHTML = kegiatan[11];
jam13.innerHTML = kegiatan[12];
jam14.innerHTML = kegiatan[13];
jam15.innerHTML = kegiatan[14];
jam16.innerHTML = kegiatan[15];
jam16.style.display = "block";
};

selasa.addEventListener("click", function(){
hariSelasa();
});

btnSelasa.addEventListener("click", function(){
hariSelasa();
});

function hariSelasa(){
title.innerHTML = hari[1];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[1];
jam3.innerHTML = kegiatan[2];
jam4.innerHTML = kegiatan[3];
jam5.innerHTML = kegiatan[4];
jam6.innerHTML = kegiatan[5];
jam7.innerHTML = kegiatan[6];
jam8.innerHTML = kegiatan[7];
jam9.innerHTML = kegiatan[8];
jam10.innerHTML = kegiatan[9];
jam11.innerHTML = kegiatan[10];
jam12.innerHTML = kegiatan[11];
jam13.innerHTML = kegiatan[12];
jam14.innerHTML = kegiatan[13];
jam15.innerHTML = kegiatan[14];
jam16.innerHTML = kegiatan[15];
jam16.style.display = "block";
};

rabu.addEventListener("click", function(){
hariRabu();
});

btnRabu.addEventListener("click", function(){
hariRabu();
});

function hariRabu(){
title.innerHTML = hari[2];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[1];
jam3.innerHTML = kegiatan[2];
jam4.innerHTML = kegiatan[3];
jam5.innerHTML = kegiatan[4];
jam6.innerHTML = kegiatan[5];
jam7.innerHTML = kegiatan[6];
jam8.innerHTML = kegiatan[7];
jam9.innerHTML = kegiatan[8];
jam10.innerHTML = kegiatan[9];
jam11.innerHTML = kegiatan[10];
jam12.innerHTML = kegiatan[11];
jam13.innerHTML = kegiatan[12];
jam14.innerHTML = kegiatan[13];
jam15.innerHTML = kegiatan[14];
jam16.innerHTML = kegiatan[15];
jam16.style.display = "block";
};

kamis.addEventListener("click", function(){
hariKamis();
});

btnKamis.addEventListener("click", function(){
hariKamis();
});

function hariKamis(){
title.innerHTML = hari[3];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[1];
jam3.innerHTML = kegiatan[2];
jam4.innerHTML = kegiatan[3];
jam5.innerHTML = kegiatan[4];
jam6.innerHTML = kegiatan[5];
jam7.innerHTML = kegiatan[6];
jam8.innerHTML = kegiatan[7];
jam9.innerHTML = kegiatan[8];
jam10.innerHTML = kegiatan[9];
jam11.innerHTML = kegiatan[10];
jam12.innerHTML = kegiatan[11];
jam13.innerHTML = kegiatan[12];
jam14.innerHTML = kegiatan[13];
jam15.innerHTML = kegiatan[14];
jam16.innerHTML = kegiatan[15];
jam16.style.display = "block";
};

jumat.addEventListener("click", function(){
hariJumat();
});

btnJumat.addEventListener("click", function(){
hariJumat();
});

function hariJumat(){
title.innerHTML = hari[4];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[1];
jam3.innerHTML = kegiatan[2];
jam4.innerHTML = kegiatan[17];
jam5.innerHTML = kegiatan[16];
jam6.innerHTML = kegiatan[5];
jam7.innerHTML = kegiatan[6];
jam8.innerHTML = kegiatan[7];
jam9.innerHTML = kegiatan[8];
jam10.innerHTML = kegiatan[9];
jam11.innerHTML = kegiatan[10];
jam12.innerHTML = kegiatan[11];
jam13.innerHTML = kegiatan[12];
jam14.innerHTML = kegiatan[13];
jam15.innerHTML = kegiatan[14];
jam16.innerHTML = kegiatan[15];
jam16.style.display = "block";
};


sabtu.addEventListener("click", function(){
hariSabtu();
});

btnSabtu.addEventListener("click", function(){
hariSabtu();
});

function hariSabtu(){
title.innerHTML = hari[5];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[18];
jam3.innerHTML = kegiatan[19];
jam4.innerHTML = kegiatan[4];
jam5.innerHTML = kegiatan[5];
jam6.innerHTML = kegiatan[6];
jam7.innerHTML = kegiatan[7];
jam8.innerHTML = kegiatan[8];
jam9.innerHTML = kegiatan[9];
jam10.innerHTML = kegiatan[10];
jam11.innerHTML = kegiatan[11];
jam12.innerHTML = kegiatan[12];
jam13.innerHTML = kegiatan[13];
jam14.innerHTML = kegiatan[14];
jam15.innerHTML = kegiatan[15];
jam16.style.display = "none";
};

minggu.addEventListener("click", function(){
hariMinggu();
});

btnMinggu.addEventListener("click", function(){
hariMinggu();
});

function hariMinggu(){
title.innerHTML = hari[6];
jam1.innerHTML = kegiatan[0];
jam2.innerHTML = kegiatan[18];
jam3.innerHTML = kegiatan[19];
jam4.innerHTML = kegiatan[4];
jam5.innerHTML = kegiatan[5];
jam6.innerHTML = kegiatan[6];
jam7.innerHTML = kegiatan[7];
jam8.innerHTML = kegiatan[8];
jam9.innerHTML = kegiatan[9];
jam10.innerHTML = kegiatan[10];
jam11.innerHTML = kegiatan[11];
jam12.innerHTML = kegiatan[12];
jam13.innerHTML = kegiatan[13];
jam14.innerHTML = kegiatan[14];
jam15.innerHTML = kegiatan[15];
jam16.style.display = "none";
};

btnAbout.addEventListener("click", function(){
title.innerHTML = "About";
jam1.innerHTML = about;
jam16.innerHTML = "Agile ft Sadboy";
jam2.innerHTML = "";
jam3.innerHTML = "";
jam4.innerHTML = "";
jam5.innerHTML = "";
jam6.innerHTML = "";
jam7.innerHTML = "";
jam8.innerHTML = "";
jam9.innerHTML = "";
jam10.innerHTML = "";
jam11.innerHTML = "";
jam12.innerHTML = "";
jam13.innerHTML = "";
jam14.innerHTML = "";
jam15.innerHTML = "";
jam16.style.display = "block";
});


