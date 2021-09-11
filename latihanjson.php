<h1 align=center>Kampus STT Bandung</h1>
<hr>

<?php
$mahasiswa1 = '{
  "1":{
    "NIM": 1992424,
    "Nama": "Alya",
    "Umur": "17 Tahun",
    "Email": "alya@gmail.com"
  },
  "2":{
    "NIM": 1992425,
    "Nama": "Anggi",
    "Umur": "18 Tahun",
    "Email": "anggi@gmail.com"
  },
  "3":{
    "NIM": 1992426,
    "Nama": "Anisa",
    "Umur": "17 Tahun",
    "Email": "anisa@gmail.com"
  },
  "4":{
    "NIM": 1992427,
    "Nama": "Arif",
    "Umur": "18 Tahun",
    "Email": "arif@gmail.com"
  },
  "5":{
    "NIM": 1992428,
    "Nama": "Astri",
    "Umur": "18 Tahun",
    "Email": "astri@gmail.com"
  }
}';

$mahasiswa2 = '{
    "1":{
      "NIM": 1992429,
      "Nama": "Azhar",
      "Umur": "17 Tahun",
      "Email": "azhar@gmail.com"
    },
    "2":{
      "NIM": 1992430,
      "Nama": "Aziz",
      "Umur": "18 Tahun",
      "Email": "aziz@gmail.com"
    },
    "3":{
      "NIM": 1992431,
      "Nama": "Bima",
      "Umur": "18 Tahun",
      "Email": "bima@gmail.com"
    },
    "4":{
      "NIM": 1992432,
      "Nama": "Cindy",
      "Umur": "17 Tahun",
      "Email": "cindy@gmail.com"
    },
    "5":{
      "NIM": 1992433,
      "Nama": "Dinda",
      "Umur": "18 Tahun",
      "Email": "dinda@gmail.com"
    }
  }';

  $mahasiswa3 = '{
    "1":{
      "NIM": 1992434,
      "Nama": "Fuji",
      "Umur": "17 Tahun",
      "Email": "fuji@gmail.com"
    },
    "2":{
      "NIM": 1992435,
      "Nama": "Indah",
      "Umur": "18 Tahun",
      "Email": "indah@gmail.com"
    },
    "3":{
      "NIM": 1992436,
      "Nama": "Indri",
      "Umur": "17 Tahun",
      "Email": "indri@gmail.com"
    },
    "4":{
      "NIM": 1992437,
      "Nama": "Irfan",
      "Umur": "18 Tahun",
      "Email": "irfan@gmail.com"
    },
    "5":{
      "NIM": 1992438,
      "Nama": "Kiki",
      "Umur": "17 Tahun",
      "Email": "kiki@gmail.com"
    }
  }';

  $mahasiswa4 = '{
    "1":{
      "NIM": 1992439,
      "Nama": "Lia",
      "Umur": "18 Tahun",
      "Email": "lia@gmail.com"
    },
    "2":{
      "NIM": 1992440,
      "Nama": "Selvi",
      "Umur": "18 Tahun",
      "Email": "selvi@gmail.com"
    },
    "3":{
      "NIM": 1992441,
      "Nama": "Sifa Afna",
      "Umur": "18 Tahun",
      "Email": "sifa@gmail.com"
    },
    "4":{
      "NIM": 1992442,
      "Nama": "Silvia",
      "Umur": "17 Tahun",
      "Email": "silvia@gmail.com"
    },
    "5":{
      "NIM": 1992443,
      "Nama": "Suci",
      "Umur": "17 Tahun",
      "Email": "suciarin@gmail.com"
    }
  }';


$listmahasiswa1 = json_decode($mahasiswa1);
$listmahasiswa2 = json_decode($mahasiswa2);
$listmahasiswa3 = json_decode($mahasiswa3);
$listmahasiswa4 = json_decode($mahasiswa4);

echo "<br>";
echo "<b>1. Dosen Pembimbing : Danny Indra Gunawan</b> <p>";
foreach ($listmahasiswa1 as $key => $mahasiswa) {
  echo "{$key}. NIM : {$mahasiswa->NIM} <br>";
  echo " Nama : {$mahasiswa->Nama} <br>";
  echo " Umur : {$mahasiswa->Umur} <br>";
  echo " Email : {$mahasiswa->Email} <p>";
}
echo "<br>";
echo "<b>2. Dosen Pembimbing : Muhammad Sabar</b> <p>";
foreach ($listmahasiswa2 as $key => $mahasiswa) {
    echo "{$key}. NIM : {$mahasiswa->NIM} <br>";
    echo " Nama : {$mahasiswa->Nama} <br>";
    echo " Umur : {$mahasiswa->Umur} <br>";
    echo " Email : {$mahasiswa->Email} <p>";
  }
  echo "<br>";
echo "<b>3. Dosen Pembimbing : Tarsinah Sumarni</b> <p>";
foreach ($listmahasiswa3 as $key => $mahasiswa) {
      echo "{$key}. NIM : {$mahasiswa->NIM} <br>";
      echo " Nama : {$mahasiswa->Nama} <br>";
      echo " Umur : {$mahasiswa->Umur} <br>";
      echo " Email : {$mahasiswa->Email} <p>";
    }
    echo "<br>";
echo "<b>4. Dosen Pembimbing : Saepudin </b><p>";
foreach ($listmahasiswa4 as $key => $mahasiswa) {
    echo "{$key}. NIM : {$mahasiswa->NIM} <br>";
    echo " Nama : {$mahasiswa->Nama} <br>";
    echo " Umur : {$mahasiswa->Umur} <br>";
    echo " Email : {$mahasiswa->Email} <p>";
  }
?>