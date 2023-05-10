<?php
// hubungkan dengan file koneksi.php
require_once('koneksi.php');

// 1. sistem read data
function read_data() {

  global $mysqli;

  $query = "SELECT * FROM tb_buku_2201010548";
  $result = mysqli_query($mysqli, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
    
    return $data;
  } else {
    // jika query kosong, kembalikan array kosong
    return array();
  }
}


// 2. sistem hapus data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id_buku = $_POST['id_buku'];

  // Query untuk menghapus data buku berdasarkan ID
  $query = "DELETE FROM tb_buku_2201010548 WHERE ID_buku_2201010548 = '$id_buku'";

  // Eksekusi query
  if(mysqli_query($mysqli, $query)) {
    // Redirect ke halaman sebelumnya
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  // Tutup koneksi
  mysqli_close($conn);
}


// 3. sistem cari data
function read_by_search() {
  global $mysqli;
  global $mulai_dari;

  // Retrieve search query parameter
  $search_query = isset($_GET['search']) ? $_GET['search'] : '';

  // Prepare and execute search query
  $sql = "SELECT * FROM tb_buku_2201010548 WHERE Judul_buku_2201010548 LIKE '%$search_query%'";
  $result = mysqli_query($mysqli, $sql);

  // Fetch search results
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
      }
      return $data;
  } else {
      return array();
  }
}

// panggil fungsi untuk membaca data
if (isset($_GET['search'])) {
  $data_tabel = read_by_search();
} else {
  $data_tabel = read_data();
}


?>

<?php 
  // memanggil header.php
  require_once('header.php');
?>
    <!-- Konten -->
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-4">Data Buku</h1>
          <figure>
            <blockquote class="blockquote">
              <p>Data buku yang anda simpan akan muncul disini</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              UTS Pemrograman Web CRUD<cite title="Source Title"></cite>
            </figcaption>
          </figure>
        </div>
        <div class="col-2 p-3">
        <a href="create.php" type="button" class="btn btn-outline-primary mt-4 p-3">
          Tambah Data Buku
          <i class="fa-solid fa-plus"></i>
        </a>
        </div>
      </div>
      <div class="table responsive">
        <table class="table table-hover align-middle table-bordered border-dark">
          <thead>
            <tr>
              <th>ID Buku</th>
              <th>Judul Buku</th>
              <th>Kategori Buku</th>
              <th>Penerbit</th>
              <th>Penulis</th>
              <th>Stok</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              for($i = 0; $i < count($data_tabel); $i++) {
            ?>
            <tr>
              <th scope="row"><?= $data_tabel[$i]['ID_buku_2201010548'] ?></th>
              <th scope="row"><?= $data_tabel[$i]['Judul_buku_2201010548'] ?></th>
              <th scope="row"><?= $data_tabel[$i]['Kategori_buku_2201010548'] ?></th>
              <th scope="row"><?= $data_tabel[$i]['Penerbit_2201010548'] ?></th>
              <th scope="row"><?= $data_tabel[$i]['Penulis_2201010548'] ?></th>
              <th scope="row"><?= $data_tabel[$i]['Stok_2201010548'] ?></th>
              <th scope="row"><?= $data_tabel[$i]['Harga_2201010548'] ?></th>
              <th scope="row">
                <div class="row">
                  <div class="col">
                    <a href="update.php?id=<?= $data_tabel[$i]['ID_buku_2201010548'] ?>" style="width:100%" class="btn btn-outline-secondary">
                    Sunting
                    <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                  </div>
                  <div class="col">
                    <form action="index.php" method="POST">
                      <input type="hidden" value="<?= $data_tabel[$i]['ID_buku_2201010548'] ?>" name="id_buku">
                      <button type="submit" onclick="return confirm('yakin ingin di hapus?')" style="width:100%" class="btn btn-outline-danger">
                        Hapus
                        <i class="fa-regular fa-trash-can"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </th>
            </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>

<?php 
  // memanggil footer.php
  require_once('footer.php');
?>