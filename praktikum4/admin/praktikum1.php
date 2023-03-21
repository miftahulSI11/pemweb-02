<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";

$mahasiswa1 = [
    'id'=>'1', 
    'NIM'=> 1101212, 
    'UTS'=> 98,
    'UAS'=> 90,
    'TUGAS'=>85,
];
$mahasiswa2 = [
    'id'=>'2', 
    'NIM'=> 1101213, 
    'UTS'=> 98,
    'UAS'=> 89,
    'TUGAS'=>90,
];
$mahasiswa3= [
    'id'=>'3', 
    'NIM'=> 1101214, 
    'UTS'=> 99,
    'UAS'=> 70,
    'TUGAS'=>85,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3]
?>
<div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai) { ?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['NIM'];?></td>
                <td><?= $nilai['UTS'];?></td>
                <td><?= $nilai['UAS'];?></td>
                <td><?= $nilai['TUGAS'];?></td>
            </tr> 
            <?php }?>

        </table>
    </div>

<?php require_once "layouts/footer.php";?>