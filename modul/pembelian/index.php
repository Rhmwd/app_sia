<div class="card mb-3">
<div class="card-body">
 <form action="" method="post">
 <div class="row mb-3">
 <div class="col-md-4">
 <label for="invoice" class="form-label">Invoice</label>
 <input type="text" class="form-control" name="invoice">
 </div>
 <div class="col-md-4">
 <label for="tanggal" class="form-label">Tanggal</label>
 <input type="date" class="form-control" name="tanggal">
 </div>
 <div class="col-md-4">
 <label for="suplier" class="form-label">Suplier</label>
 <select name="suplier" class="form-select">
 <option value="1">PT Suplier Jaya</option>
 <option value="2">CV Maju Jaya</option>
 </select>
 </div>
 </div>
 <div class="row mb-3">
 <div class="col-md-4">
 <label for="jumlah" class="form-label">Jumlah</label>
 <input type="number" class="form-control" name="jumlah">
 </div>
 <div class="col-md-4">
 <label for="harga" class="form-label">Harga</label>
 <div class="input-group">
 <span class="input-group-text">Rp.</span>
 <input type="number" class="form-control" name="harga">
 </div>
 </div>
 <div class="col-md-4">
 <label for="total" class="form-label">Total</label>
 <div class="input-group">
 <span class="input-group-text">Rp.</span>
 <input type="number" class="form-control" name="total" disabled>
</div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12">
 <label for="keterangan" class="form-label">Keterangan</label>
 <textarea name="keterangan" class="form-control"></textarea>
 </div>
 </div>
 <hr class="text-secondary">
 <div class="text-end">
 <button type="reset" class="btn btn-secondary">Reset</button>
 <button type="submit" class="btn btn-primary">Simpan</button>
 </div>
 </form>
 </div>
</div>
<div class="card">
 <div class="card-header">
 <h3>Data Pembelian</h3>
 </div>
<div class="card-body">
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>#</th>
 <th>Invoice</th>
 <th>Tanggal</th>
 <th>Suplier</th>
 <th>Jumlah</th>
 <th>Harga</th>
 <th>Total</th>
 <th>Keterangan</th>
 <th><i class="bi bi-gear-fill"></i></th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td>BL110324</td>
 <td>11/03/2024</td>
 <td>PT Suplier Jaya</td>
 <td>1</td>
 <td>Rp. 15.000,000,-</td>
 <td>Rp. 15.000.000,-</td>
 <td>Pembelian perlengkapan maintenance</td>
 <td>
 <a href="#editPembelian" class="text-decoration-none" data-bstoggle="modal">
 <i class="bi bi-pencil-square text-success"></i>
 </a>
 <a href="" class="text-decoration-none">
 <i class="bi bi-trash text-danger"></i>
 </a>
 </td>
 <!-- Modal -->
 <div class="modal fade" id="editPembelian" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post">
 <div class="modal-dialog modal-lg">
 <div class="modal-content">
 <div class="modal-header">
 <h1 class="modal-title fs-5"id="exampleModalLabel">Edit Data Pembelian</h1>
 <button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <div class="row mb-3">
 <div class="col-md-4">
 <label for="invoice" class="formlabel">Invoice</label>
 <input type="text" class="form-control"name="invoice" value="BL110324" disabled>
 </div>
 <div class="col-md-4">
 <label for="tanggal" class="formlabel">Tanggal</label>
<input type="date" class="form-control"name="tanggal" value="2024-11-03">
 </div>
 <div class="col-md-4">
 <label for="suplier" class="formlabel">Suplier</label>
 <select name="suplier" class="form-select">
 <option value="1" selected>PT Suplier Jaya</option>
 <option value="2">CV Maju Jaya</option>
 </select>
 </div>
 </div>
 <div class="row mb-3">
 <div class="col-md-4">
 <label for="jumlah" class="formlabel">Jumlah</label>
 <input type="number" class="form-control"name="jumlah" value="1">
 </div>
 <div class="col-md-4">
 <label for="harga" class="formlabel">Harga</label>
 <div class="input-group">
 <span class="input-group-text">Rp.</span>
 <input type="number" class="form-control"name="harga" value="15000000">
 </div>
 </div>
 <div class="col-md-4">
 <label for="total" class="formlabel">Total</label>
 <div class="input-group">
 <span class="input-group-text">Rp.</span>
 <input type="number" class="form-control"name="total" value="15000000" disabled>
 </div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12">
<label for="keterangan" class="formlabel">Keterangan</label>
 <textarea name="keterangan" class="formcontrol">Pembelian perlengkapan maintenance</textarea>
 </div>
 </div>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary"
data-bs-dismiss="modal">Close</button>
 <button type="submit" class="btn btnprimary">Simpan</button>
 </div>
 </div>
 </div>
 </form>
 </div>
 </tr>
 <tr>
 <td>2</td>
 <td>BL100324</td>
 <td>10/03/2024</td>
 <td>CV Maju Jaya</td>
 <td>5</td>
 <td>Rp. 10.000.000,-</td>
 <td>Rp. 50.000.000,-</td>
 <td>Pengadaan 5 unit laptop ASUS</td>
 <td>
     <a href="" class="text-decoration-none">
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