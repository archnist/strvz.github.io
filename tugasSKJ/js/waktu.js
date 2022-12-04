const loading = document.querySelector(".loading");
const logo = document.querySelector(".logo");
const title = document.querySelector(".title");

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

const getDate = new Date();
const getYear = getDate.getFullYear();
const getMonth = getDate.getMonth() + 1;
const getDay = getDate.getDate();

function bulan() {
    if(getMonth < 10 ) {
        bulan = `0${getMonth}`;
    } else {
        bulan = getMonth;
    }
    return bulan
}

function hari() {
    if(getDay < 10 ) {
        hari = `0${getDay}`;
    } else {
        hari = getDay;
    }
    return hari
}

const tanggal = `${getYear}-${bulan()}-${hari()}`;

const tampilKota = document.querySelector('.kota');
tampilKota.textContent = localStorage.judulkota;

function getJadwal() {
    fetch('https://api.banghasan.com/sholat/format/json/jadwal/kota/' + parseInt(localStorage.idkota) + '/tanggal/' + tanggal)
    .then(response => response.json())
    .then(result => {
        const jadwal = result.jadwal.data;
        document.querySelector('.imsak').textContent = jadwal.imsak;
        document.querySelector('.subuh').textContent = jadwal.subuh;
        document.querySelector('.dzuhur').textContent = jadwal.dzuhur;
        document.querySelector('.ashar').textContent = jadwal.ashar;
        document.querySelector('.maghrib').textContent = jadwal.maghrib;
        document.querySelector('.isya').textContent = jadwal.isya;
        document.querySelector('.tanggal').textContent = jadwal.tanggal;
    } )
}

const input = document.querySelector('.input-search');
const cardList = document.querySelector('.card-list');

input.addEventListener('keyup', function(){
    const valueSearch = input.value.length;

    if(valueSearch > 0) {
        cardList.classList.remove('hidden-list');

        fetch('https://api.banghasan.com/sholat/format/json/kota')
        .then(response => response.json())
        .then(result => {
            const kota = result.kota;
            let listKota = '';
            kota.forEach(data => {
                listKota += `<a href="#${data.nama}" data-idkota="${data.id}" id="nama-kota" class="list-group-item list-group-item-action">${data.nama}</a>`;
            });
            const namaKota = document.querySelector('.card-list');
            namaKota.innerHTML = listKota;

            const isiKota = document.querySelectorAll('#nama-kota');
            isiKota.forEach( kota => {

                const filter = input.value.toLowerCase();
                const item = kota.firstChild.textContent.toLowerCase();

                if(item.indexOf(filter) != -1){
                    kota.setAttribute("style", "display: block");
                } else {
                    kota.setAttribute("style", "display: none !important");
                }

                kota.addEventListener('click', function() {
                    const idkota = this.dataset.idkota;
                    const judulkota = this.textContent;
                    window.localStorage.setItem('idkota', idkota);
                    window.localStorage.setItem('judulkota', judulkota);
                    location.reload();
                    console.log(idkota);
                });
            });
        });

    } else {
        cardList.classList.add('hidden-list');
    }
});

getJadwal();