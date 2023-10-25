// Nama : Muhammad Reyhan Asshidiq Djajasasmita
// NIM : 21102126
// Kelas : S1-IF-MM4
// External Script

window.alert('Selamat datang di halaman embedded script');

document.getElementById("hitung").onclick = function() {hitungLuasSegitiga()};

function hitungLuasSegitiga() {
    var a = document.getElementById("alas").value;
    var t = document.getElementById("tinggi").value;
    var hasil = 0.5 * a * t;
    document.getElementById('hasil').innerHTML = hasil;
}

function konversi() {
    var nilaiAngka = document.querySelector(".nilai_angka").value;
    var grade = "";

    if (nilaiAngka >= 90) grade = "A";
    else if (nilaiAngka >= 80) grade = "B+";
    else if (nilaiAngka >= 70) grade = "B";
    else if (nilaiAngka >= 60) grade = "C+";
    else if (nilaiAngka >= 50) grade = "C";
    else if (nilaiAngka >= 40) grade = "D";
    else if (nilaiAngka >= 30) grade = "E";
    else grade = "F";

    document.getElementById('hasil2').innerHTML = grade;
}

function hitungTotal() {
    var jumlah = document.getElementById("jumlah").value;
    var harga = document.getElementById("harga").value;

    if (jumlah == "" || harga == "") {
        document.getElementById('total').value = "0";
    } else {
        document.getElementById('total').value = jumlah * harga;
    }
}

function cetak() {
    window.print();
}
