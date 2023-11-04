//<!-- Nama : Radot Yohanes Nababan -->
//<!-- NIM : 121140108 -->
// <!-- Kelas : RB -->
function ganjilgenap() {
  var bilangan = document.getElementById("inputan").value;
  var genap = 0;
  var ganjil = 0;

  for (var i = 1; i <= bilangan; i++) {
    if (i % 2 === 0) {
      genap++;
    } else {
      ganjil++;
    }
  }

  document.getElementById("hasilgenap").innerHTML = genap;
  document.getElementById("hasilganjil").innerHTML = ganjil;
}
