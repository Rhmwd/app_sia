<div class="card mb-3">
<div class="card-body">
 <form action="" method="post">
 <div class="row mb-3">
 <div class="col-md-6">
 <label for="invoice" class="form-label">Invoice</label>
 <input type="text" class="form-control" name="invoice">
 </div>
 <div class="col-md-6">
 <label for="tanggal" class="form-label">Tanggal</label>
 <input type="date" class="form-control" name="tanggal">
 </div>
 </div>
 <div class="row mb-3">
 <div class="col-md-6">
 <label for="total" class="form-label">Total</label>
 <div class="input-group">
 <span class="input-group-text">Rp.</span>
 <input type="number" class="form-control" name="total">
 </div>
 </div>
 <div class="col-md-6">
 <label for="keterangan" class="form-label">Keterangan</label>
 <input type="text" class="form-control" name="keterangan">
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
 <h3>Data Pembayaran</h3>
 </div>
 <div class="card-body">
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>#</th>
 <th>Invoice</th>
 <th>Tanggal</th>
 <th>Total</th>
<th>Keterangan</th>
 <th><i class="bi bi-gear-fill"></i></th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td>BY110324</td>
 <td>11/03/2024</td>
 <td>Rp. 1.000.000,-</td>
 <td>Pembayaran tagihan indihome</td>
 <td>
 <a href="#editPembayaran" class="text-decoration-none" databs-toggle="modal">
 <i class="bi bi-pencil-square text-success"></i>
 </a>
 <a href="" class="text-decoration-none">
 <i class="bi bi-trash text-danger"></i>
 </a>
 </td>
 <!-- Modal -->
 <div class="modal fade" id="editPembayaran" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
 <form action="" method="post">
 <div class="modal-dialog modal-lg">
 <div class="modal-content">
 <div class="modal-header">
 <h1 class="modal-title fs-5"
id="exampleModalLabel">Edit Data Pembayaran</h1>
 <button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <div class="row mb-3">
 <div class="col-md-6">
 <label for="invoice" class="formlabel">Invoice</label>
 <input type="text" class="form-control"name="invoice" value="BY110324" disabled>
 </div>
 <div class="col-md-6">
 <label for="tanggal" class="formlabel">Tanggal</label>
 <input type="date" class="form-control"name="tanggal" value="2024-03-11">
 </div>
 </div>
 <div class="row mb-3">
 <div class="col-md-6">
 <label for="total" class="formlabel">Total</label>
 <div class="input-group">
 <span class="input-group-text">Rp.</span>
 <input type="number" class="form-control"name="total" value="1000000">
 </div>
 </div>
 <div class="col-md-6">
 <label for="keterangan" class="formlabel">Keterangan</label>
<input type="text" class="form-control"
name="keterangan" value="Pembayaran tagihan indihome">
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
 <td>BY100324</td>
 <td>10/03/2024</td>
 <td>Rp. 900.000,-</td>
 <td>Pembayaran tagihan listrik</td>
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