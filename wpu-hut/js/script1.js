$.getJSON('data/pizza.json', function(data){
    let menu = data.menu;
    $.each(menu, function(i, data){
        $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+ data.gambar +'"class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5 class="card-title">'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
    });
});


$('.nav-link').on('click', function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori);
});

const pizza = document.querySelector(".pizza");
const pizza2 = document.querySelector(".pizza2");
const pizza3 = document.querySelector(".pizza3");
const pizza4 = document.querySelector(".pizza4");
const pasta = document.querySelector(".pasta");
const pasta2 = document.querySelector(".pasta2");
const pasta3 = document.querySelector(".pasta3");
const nasi = document.querySelector(".nasi");
const nasi2 = document.querySelector(".nasi2");
const nasi3 = document.querySelector(".nasi3");
const minuman = document.querySelector(".minuman");
const minuman2 = document.querySelector(".minuman2");
const minuman3 = document.querySelector(".minuman3");
const minuman4 = document.querySelector(".minuman4");
const minuman5 = document.querySelector(".minuman5");
const acuan = document.querySelector(".acuan");
const layar = document.querySelector(".collapse");
const btn = document.querySelector(".navbar-toggler");

btn.addEventListener("click", function(){
    layar.classList.remove("show");
});

setInterval(function(){
if(acuan.innerHTML == "Pasta"){
    pizza.classList.add("hilang");
    pizza2.classList.add("hilang");
    pizza3.classList.add("hilang");
    pizza4.classList.add("hilang");
} else if(acuan.innerHTML == "Nasi"){
    pizza.classList.add("hilang");
    pizza2.classList.add("hilang");
    pizza3.classList.add("hilang");
    pizza4.classList.add("hilang");
} else if(acuan.innerHTML == "Minuman"){
    pizza.classList.add("hilang");
    pizza2.classList.add("hilang");
    pizza3.classList.add("hilang");
    pizza4.classList.add("hilang");
}else {
    pizza.classList.remove("hilang");
    pizza2.classList.remove("hilang");
    pizza3.classList.remove("hilang");
    pizza4.classList.remove("hilang");
}

if(acuan.innerHTML == "Pizza"){
    pasta.classList.add("hilang");
    pasta2.classList.add("hilang");
    pasta3.classList.add("hilang");
} else if(acuan.innerHTML == "Nasi"){
    pasta.classList.add("hilang");
    pasta2.classList.add("hilang");
    pasta3.classList.add("hilang");
} else if(acuan.innerHTML == "Minuman"){
    pasta.classList.add("hilang");
    pasta2.classList.add("hilang");
    pasta3.classList.add("hilang");
}else {
    pasta.classList.remove("hilang");
    pasta2.classList.remove("hilang");
    pasta3.classList.remove("hilang");
}

if(acuan.innerHTML == "Pizza"){
    nasi.classList.add("hilang");
    nasi2.classList.add("hilang");
    nasi3.classList.add("hilang");
} else if(acuan.innerHTML == "Pasta"){
    nasi.classList.add("hilang");
    nasi2.classList.add("hilang");
    nasi3.classList.add("hilang");
} else if(acuan.innerHTML == "Minuman"){
    nasi.classList.add("hilang");
    nasi2.classList.add("hilang");
    nasi3.classList.add("hilang");
}else {
    nasi.classList.remove("hilang");
    nasi2.classList.remove("hilang");
    nasi3.classList.remove("hilang");
}

if(acuan.innerHTML == "Pizza"){
    minuman.classList.add("hilang");
    minuman2.classList.add("hilang");
    minuman3.classList.add("hilang");
    minuman4.classList.add("hilang");
    minuman5.classList.add("hilang");
} else if(acuan.innerHTML == "Pasta"){
    minuman.classList.add("hilang");
    minuman2.classList.add("hilang");
    minuman3.classList.add("hilang");
    minuman4.classList.add("hilang");
    minuman5.classList.add("hilang");
} else if(acuan.innerHTML == "Nasi"){
    minuman.classList.add("hilang");
    minuman2.classList.add("hilang");
    minuman3.classList.add("hilang");
    minuman4.classList.add("hilang");
    minuman5.classList.add("hilang");
}else {
    minuman.classList.remove("hilang");
    minuman2.classList.remove("hilang");
    minuman3.classList.remove("hilang");
    minuman4.classList.remove("hilang");
    minuman5.classList.remove("hilang");
}
}, 200);


