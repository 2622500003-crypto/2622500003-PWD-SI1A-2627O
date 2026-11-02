function cekForm(){
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var hp = document.getElementById("hp").value;
    var pesan = document.getElementById("pesan").value;

    if(nama == "" || email == "" || hp == "" || pesan == ""){
        alert("Maaf semua harus diisi ya! *Wajib Diisi");
        return false;
    }
    if(email.indexOf("@") == -1){
        alert("Email harus ada @ nya");
        return false;
    }
    alert("Makasih " + nama + " sudah isi buku tamu Watch Aqila");
    return true;
}

document.getElementById("contactForm")?.addEventListener("submit", function(e){
    // ini cara kedua, biar aman
    var n = document.getElementById("nama").value;
    if(n == ""){
        alert("Nama wajib diisi");
        e.preventDefault();
    }
});

// panggil cekForm saat submit
var form = document.querySelector("form");
if(form){
    form.onsubmit = cekForm;
}