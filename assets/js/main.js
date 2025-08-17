const nama = "Muhammad Helmi Assura";
let usia = 1;

const biodata = document.getElementById('biodata');

function generateBiodata() {
    let generasi;

    if (usia >= 18) {
        generasi = "Generasi Dewasa";
    } else if (usia >= 10 && usia <= 18) {
        generasi = "Generasi Remaja";
    } else {
        generasi = "Generasi Anak Anak";
    }
    
    generasiBio = "Anda adalah "
    return biodata.innerHTML = generasiBio + generasi;
}

generateBiodata();