<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['Prodi'];
$gender = $_POST['Gender'];
$skills = $_POST['Skill'];
$domisili = $_POST['domisili'];
$email = $_POST['Email'];

function skor_skill($skills)
{
    [
        'HTML' => 10,
        'CSS'  => 10,
        'JavaScript' => 20,
        'RWD Boostrap' => 20,
        'PHP' => 30,
        'Python' => 30,
        'Java' => 50,
    ];
    $result =o;
}
echo "NIM: $nim";
echo "<br> Nama: $nama";
echo "<br> Program Studi: $prodi";
echo "<br> Jenis Kelamin: $gender";
echo "<br> Skills Programming: ";
foreach($skills as $skil){
    echo $skil . ", ";
} 
echo "<br> Tempat Domisili: $domisili";
echo "<br> Email: $email";
echo "<br> "
echo "<br> kategori skill"