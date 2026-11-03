// js buku tamu - saqila

var form = document.getElementById("contactForm");

form.addEventListener("submit", function(e){
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var nohp = document.getElementById("nohp").value;
  var pesan = document.getElementById("pesan").value;

  if(nama == "" || email == "" || nohp == "" || pesan == ""){
    alert("Semua Wajib Diisi ya! *Harus Wajib Diisi");
    e.preventDefault();
  } else if(email.indexOf("@") == -1){
    alert("Email harus ada @ nya");
    e.preventDefault();
  }
})