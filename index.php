<form>
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
        <div class="col-auto">
      <button type="submit" name="submit"class="btn btn-primary mb-2"><a href="register.php">Buat Akun</a></button>
    </div>
  </div>
</form>

<?php
$data = mysqli_connect('localhost','root','','modul8');
if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $insert = "INSERT INTO t_regist VALUES('$username','$password','$email')";
  $sql = mysqli_query($data,$insert);

      if ($sql) {
      echo "data berhasil diinputkan";
      header("location:newData.php");
    }else{
      echo "Maaf anda gagal menginputkan data";
      header("Location:index.php");
    }

  }


?>


