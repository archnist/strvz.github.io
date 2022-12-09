const quest = document.querySelector(".quest");
const opsi1 = document.querySelector(".opsi1");
const opsi2 = document.querySelector(".opsi2");
const opsi3 = document.querySelector(".opsi3");
const opsi4 = document.querySelector(".opsi4");

let nilai = 0;

function italia(){
    quest.innerHTML = "Nama Ibu Kota Italia";
    opsi1.innerHTML = "Roma";
    opsi2.innerHTML = "Berlin";
    opsi3.innerHTML = "Moscow";
    opsi4.innerHTML = "Kyiv";
}

function jepang(){
    quest.innerHTML = "Nama Ibu Kota Jepang";
    opsi1.innerHTML = "Seoul";
    opsi2.innerHTML = "Tokyo";
    opsi3.innerHTML = "Beijing";
    opsi4.innerHTML = "Pyongyang";
}

function korea(){
    quest.innerHTML = "Nama Ibu Kota Korea Selatan";
    opsi1.innerHTML = "Seoul";
    opsi2.innerHTML = "Tokyo";
    opsi3.innerHTML = "Beijing";
    opsi4.innerHTML = "Pyongyang";
}

function finlandia(){
    quest.innerHTML = "Nama Ibu Kota Finlandia";
    opsi1.innerHTML = "Bern";
    opsi2.innerHTML = "Stockholm";
    opsi3.innerHTML = "Oslo";
    opsi4.innerHTML = "Helsinki";
}

function result(){
    quest.innerHTML = "Nilai : " + nilai;
    opsi1.setAttribute("style", "display: none");
    opsi2.setAttribute("style", "display: none");
    opsi3.setAttribute("style", "display: none");
    opsi4.setAttribute("style", "display: none");
}

opsi1.addEventListener("click", function() {
  if(quest.innerHTML == "Nama Ibu Kota Jerman") {
    italia();
  } else if(quest.innerHTML == "Nama Ibu Kota Italia"){
    nilai +=20;
    jepang();
  } else if(quest.innerHTML == "Nama Ibu Kota Jepang"){
    korea();
  } else if(quest.innerHTML == "Nama Ibu Kota Korea Selatan"){
    nilai +=20;
    finlandia();
  } else if(quest.innerHTML == "Nama Ibu Kota Finlandia"){
    result();
  }
});

opsi2.addEventListener("click", function() {
  if(quest.innerHTML == "Nama Ibu Kota Jerman") {
    italia();
  } else if(quest.innerHTML == "Nama Ibu Kota Italia"){
    jepang();
  } else if(quest.innerHTML == "Nama Ibu Kota Jepang"){
    nilai +=20;
    korea();
  } else if(quest.innerHTML == "Nama Ibu Kota Korea Selatan"){
    finlandia();
  } else if(quest.innerHTML == "Nama Ibu Kota Finlandia"){
    result();
  }
});

opsi3.addEventListener("click", function() {
  if(quest.innerHTML == "Nama Ibu Kota Jerman") {
    nilai +=20;
    italia();
  } else if(quest.innerHTML == "Nama Ibu Kota Italia"){
    jepang();
  } else if(quest.innerHTML == "Nama Ibu Kota Jepang"){
    korea();
  } else if(quest.innerHTML == "Nama Ibu Kota Korea Selatan"){
    finlandia();
  } else if(quest.innerHTML == "Nama Ibu Kota Finlandia"){
    result();
  }
});

opsi4.addEventListener("click", function() {
  if(quest.innerHTML == "Nama Ibu Kota Jerman") {
    italia();
  } else if(quest.innerHTML == "Nama Ibu Kota Italia"){
    jepang();
  } else if(quest.innerHTML == "Nama Ibu Kota Jepang"){
    korea();
  } else if(quest.innerHTML == "Nama Ibu Kota Korea Selatan"){
    finlandia();
  } else if(quest.innerHTML == "Nama Ibu Kota Finlandia"){
    nilai +=  20;
    result();
  }
});