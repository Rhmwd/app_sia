<div class="card mb-3">
    <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form data
            $nama_barang = $_POST["nama_barang"];
            $harga_beli = $_POST["harga_beli"];
            $harga_jual = $_POST["harga_jual"];
            $stok = $_POST["stok"];

            // Validate the form data
            if (!empty($nama_barang) && !empty($harga_beli) && !empty($harga_jual) && !empty($stok)) {
                // Save the data to a database or file
              // ...

                // Display a success message
                echo "<div class='card-body'>";
                echo "<p class='text-success'>Berhasil menambahkan data barang!</p>";
                echo "</div>";
            } else {
                // Display an error message
                echo "<div class='card-body'>";
                echo "<p class='text-danger'>Harap isi semua kolom dengan benar!</p>";
                echo "</div>";
            }
        }
    ?>
    <form action="" method="post">
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nama_barang" class="form-label"> Nama barang</label>
                    <input type="text" class="form-control" name="nama_barang">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="harga_beli" class="form-label"> Harga beli</label>
                    <input type="number" class="form-control" name="harga_beli">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="harga_jual" class="form-label">Harga jual</label>
                    <input type="number" class="form-control" name="harga_jual">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="stok" class="form-label"> Stok</label>
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
        </div>
        <hr>
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<div class="card mb-3">
  <div class="card-body">
    <form action="simpan_barang.php" method="post">
      <div class="row">
        <div class="mb-3 col-md-6">
          <label class="form-label" for="nama_barang">Barang</label>
          <input type="text" class="form-control" name="nama_barang">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label" for="harga_beli">Harga beli</label>
          <input type="number" class="form-control" name="harga_beli">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-md-6">
          <label class="form-label" for="harga_jual">Harga jual</label>
          <input type="number" class="form-control" name="harga_jual">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label" for="stok">Stok</label>
          <input type="number" class="form-control" name="stok">
        </div>
      </div>
      <div class="col text-end">
        <button class="btn btn-secondary" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3>Data Barang</h3>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Barang</th>
            <th>Harga beli</th>
            <th>Harga jual</th>
            <th>Stok</th>
            <th><i class="bi bi-gear-fill"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Laptop ASUS</td>
            <td>Rp. 10.000.000</td>
            <td>Rp. 12.000.000</td>
            <td>5</td>
            <td>
              <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                <i class="bi bi-pencil-square text-success"></i>
              </a>
              <a href="" class="text-decoration-none">
                <i class="bi bi-trash text-danger"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Monitor Samsung</td>
            <td>Rp. 5.000.000</td>
            <td>Rp. 6.000.000</td>
            <td>10</td>
            <td>
              <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                <i class="bi bi-pencil-square text-success"></i>
              </a>
              <a href="" class="text-decoration-none">
                <i class="bi bi-trash text-danger"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editBarang" tabindex="-1" arialabelledby="exampleModalLabel" arial-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
      </div>
      <div class="modal-body">
        <form action="simpan_barang.php" method="post">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="nama_barang">Barang</label>
              <input type="text" class="form-control" name="nama_barang">
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="harga_beli">Harga beli</label>
              <input type="number" class="form-control" name="harga_beli">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="harga_jual">Harga jual</label>
              <input type="number" class="form-control" name="harga_jual">
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="stok">Stok</label>
              <input type="number" class="form-control" name="stok">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btnprimary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>