<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container" style="text-align:center">
   <?php
                $nama = $_POST['nama'];
                $matkul = $_POST['matkul'];
                $uts = $_POST['uts'];
                $uas = $_POST['uas'];
                $tugas = $_POST['tugas'];
                $grade = ($uts + $uas + $tugas) / 3;

                echo '<br>Nama : ' . $nama;
                echo '<br>Mata Kuliah : ' . $matkul;
                echo '<br>Nilai UTS : ' . $uts;
                echo '<br>Nilai UAS : ' . $uas;
                echo '<br>Nilai Tugas : ' . $tugas;
                
                echo "<br>Rata-rata : " . round(($uts + $uas + $tugas) / 3);
                echo("<br>");
                if ($grade>=85)
                echo("Grade : <b>A</b>");
                elseif ($grade>=70)
                echo("Grade : <b>B</b>");
                elseif ($grade>=56)
                echo("Grade : <b>C</b>");
                elseif ($grade>=36)
                echo("Grade : <b>D</b>");
                elseif ($grade>=0)
                echo("Grade : <b>E</b>");
            ?>

    </div>
   </div>
</body>
</html>