<form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Username</label>
      <input type="text" name="username"class="form-control mb-2" id="inlineFormInput" placeholder="masukkan username">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Password</label>
        &nbsp<input type="password" name="password"class="form-control" id="inlineFormInputGroup" placeholder="masukkanpassword">
      </div>
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Retype Password</label>
        &nbsp<input type="text" name="repassword"class="form-control" id="inlineFormInputGroup" placeholder="masukkanpassword">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Email</label>
      <input type="text" name="username"class="form-control mb-2" id="inlineFormInput" placeholder="masukkan email anda">
    </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" name="submit"class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>

<?php
include('konseksi.php');
$data = mysqli_connect('localhost','root','','modul8');
if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $insert = "INSERT INTO t_regist VALUES('$username','$password','$email')";
  $sql = mysqli_query($data,$insert);

  if(!sql){
    echo "data gagal dilakukan registrasi";
  }else{
    echo "data berhasil diregistrasi";
  }
  if(strlen($_POST['username']>20)){
    echo "Username maksimal adalah 20 karakter";
  }
  if(strlen($_POST['password'])<6){
    echo "Password harus minimal 6 karakter";
  }
}



?>

