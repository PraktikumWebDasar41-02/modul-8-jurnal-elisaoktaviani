<form method="POST">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Nama</label>
      <input type="text" name="nama"class="form-control mb-2" id="inlineFormInput" placeholder="masukkan nama anda">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Nim</label>
        &nbsp&nbsp<input type="text" name="nim"class="form-control" id="inlineFormInputGroup" placeholder="masukkan nim anda">
      </div>
    </div>
      <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Kelas<select name="kelas"></label>
      <option value="D3MI-41-01">D3MI-41-01</option>
      <option value="D3MI-41-02">D3MI-41-02</option>
      <option value="D3MI-41-03">D3MI-41-03</option>
      <option value="D3MI-41-04">D3MI-41-04</option>
    </select>
  </label></div>
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Hobi</label>
      <input type="checkbox" name="hobi" value="Menyanyi">Menyanyi
      <input type="checkbox" name="hobi" value="Menari">Menari
      <input type="checkbox" name="hobi" value="Makan">Makan
      <input type="checkbox" name="hobi" value="Main">Main
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Genre Film</label>
      <input type="checkbox" name="genre" value="Horor">Horror
      <input type="checkbox" name="genre" value="Anime">Anime
      <input type="checkbox" name="genre" value="Action">Action
      <input type="checkbox" name="genre" value="Drama">Drama
          </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Tempat Wisata</label>
      <input type="checkbox" name="wisata" value="Bali">Bali
      <input type="checkbox" name="wisata" value="Tanjong Selor">Tanjong Selor
      <input type="checkbox" name="wisata" value="Jakarta">Jakarta
      <input type="checkbox" name="wisata" value="Lombok">Lombok
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir"class="form-control mb-2" id="inlineFormInput" placeholder="masukkan nama anda">
    </div>
    <div class="col-auto">
        </label>
    </div>
    <div class="col-auto">
      <button type="submit" name="submit"class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>

<?php
$data = mysqli_connect('localhost','root','','modul8');
if (isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $kelas = $_POST['kelas'];
  $genre = $_POST['genre'];
  $wisata= $_POST['wisata'];
  $tanggal_lahir = $_POST['tanggal_lahir'];

  $insert = "INSERT INTO t_profile VALUES('$nama','$nim','$kelas','$genre','$wisata'.'$tanggal_lahir')";
  $sql = mysqli_query($data,$insert);

  }


?>



