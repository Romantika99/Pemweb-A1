let iniArray = [];
const tambah = document.getElementById('tambah');
const daftar = document.getElementById('daftar');
function tambahData(){

    if(tambah.value.length > 0){
        iniArray.push(tambah.value);
        cetakData();
    }
}

function ubahData(index){
    let namaBaru = prompt('Masukkan nama baru');
    if(namaBaru.length > 0){
        iniArray[index] = namaBaru;
    }
    else{
        alert('Tidak boleh kosong!');
    }
    cetakData();
}

function hapusData(index){
    iniArray.splice(index, 1);
    cetakData();
}

function cetakData(){
    let isi = '<ul>';
    let i = 0;
    iniArray.forEach(a => {
        isi += `<li>${a}[<a href="#" onclick="ubahData('${i}')">Edit</a> | <a href="#" onclick="hapusData('${i}')">Hapus</a>]</li>`;
        i++;
    });
    isi += '</ul>'
    daftar.innerHTML = isi;
}