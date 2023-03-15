<?php
$majors = ['Sistem Informasi', 'Teknik Informatika', 'Bisnis Digital'];
$skills =[
    'HTML' => 10,
    'CSS'  => 10,
    'JavaScript' => 20,
    'RWD Boostrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];
$domisilis = ['Jakarta', 'Depok', 'Bogor', 'Tanggerang', 'Bekasi', 'lainnya'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">
        <h2>Form Registrasi IT Club</h2>
    <hr>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="proses_register.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender" id="Gender_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="Gender_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender" id="Gender_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="Gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="Matkul" name="Prodi" class="custom-select">
      <?php foreach($majors as $majors): ?>  
          <option value="<?php echo $majors ?>"><?php echo $majors ?></option>
       <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Programming</label> 
    <div class="col-8">
        <?php foreach($skills as $key => $value): ?>
      <div class="custom-control custom-control-inline">
        <input name="Skill[]" id="<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>"> 
        <label for="<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
    <select id="domisili" name="domisili" class="custom-select">
        <?php foreach($domisilis as $domisili) :?>
        <option value="<?php echo $domisili ?>"><?php echo $domisili ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="Email" name="Email" placeholder="Masukan Email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>