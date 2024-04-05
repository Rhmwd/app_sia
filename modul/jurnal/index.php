<div class="card mb-3">
<div class="card-body">
 <form action="" method="post">
 <div class="row">
<div class="mb-3 col-md-4">
 <label for="invoice" class="form-label">Invoice</label>
 <input type="text" class="form-control" name="invoice">
 </div>
 <div class="mb-3 col-md-4">
 <label for="jenis-invoice" class="form-label">Jenis
Invoice</label>
 <select class="form-select" name="jenis-invoice">
 <option value="pembayaran">Pembayaran</option>
 <option value="penjualan">Penjualan</option>
 <option value="pembelian">Pembelian</option>
 </select>
 </div>
 <div class="mb-3 col-md-4">
<label for="tanggal" class="form-label">Tanggal</label>
 <input type="date" class="form-control" name="tanggal">
 </div>
 </div>
 <div class="row">
 <div class="mb-3 col-md-4">
<label for="nama-akun" class="form-label">Nama Akun</label>
 <select class="form-select" name="nama-akun">
 <option value="1">Kas</option>
 <option value="2">Piutang Usaha</option>
 <option value="3">Perlengkapan</option>
 <option value="4">Hutang Usaha</option>
 <option value="5">Modal</option>
 </select>
 </div>
 <div class="mb-3 col-md-4">
 <label for="nominal" class="form-label">Nominal</label>
 <input type="number" class="form-control" name="nominal">
 </div>
 <div class="mb-3 col-md-4">
 <label for="type" class="form-label">Type</label>
 <select class="form-select" name="type">
 <option value="debit">Debit</option>
 <option value="kredit">Kredit</option>
 </select>
 </div>
 </div>
 <div class="row">
 <div class="mb-3 col">
 <label for="keterangan" class="form-label">Keterangan</label>
 <textarea class="form-control" name="keterangan"
rows="3"></textarea>
 </div>
 </div>
 <hr>
 <div class="row">
 <div class="col text-end">
 <button class="btn btn-secondary" type="reset">Reset</button>
 <button class="btn btn-primary" type="submit">Simpan</button>
</div>
 </div>
 </form>
 </div>
</div>
<div class="card">
 <div class="card-header">
 <h3>Data Jurnal</h3>
 </div>
 <div class="card-body">
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>#</th>
 <th>Invoice</th>
<th>Jenis Invoice</th>
 <th>Tanggal</th>
 <th>Akun</th>
 <th>Nominal</th>
 <th>Type</th>
 <th>Keterangan</th>
 <th><i class="bi bi-gear-fill"></i></th>
 </tr>
 </thead>
<tbody>
 <tr>
 <td>1</td>
 <td>#PB020324</td>
<td>Pembelian</td>
 <td>2022-03-20</td>
 <td>Kas</td>
 <td>Rp. 10.000.000</td>
 <td>Debit</td>
 <td>-</td>
 <td>
 <a href="#editJurnal" class="text-decoration-none" data-bstoggle="modal">
<i class="bi bi-pencil-square text-success"></i>
 </a>
 <a href="" class="text-decoration-none">
 <i class="bi bi-trash text-danger"></i>
 </a>
 </td>
 <!-- Modal -->
 <div class="modal fade" id="editJurnal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
<h5 class="modal-title"
id="exampleModalLabel">Edit Jurnal</h5>
 <button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <div class="row">
 <div class="mb-3 col-md-4">
 <label for="invoice" class="formlabel">Invoice</label>
 <input type="text" class="form-control"
name="invoice" value="#PB020324">
 </div>
 <div class="mb-3 col-md-4">
 <label for="jenis-invoice" class="formlabel">Jenis Invoice</label>
 <select class="form-select" name="jenisinvoice">
<option selected
value="pembayaran">Pembayaran</option>
 <option value="penjualan">Penjualan</option>
 <option value="pembelian">Pembelian</option>
 </select>
 </div>
 <div class="mb-3 col-md-4">
 <label for="tanggal" class="formlabel">Tanggal</label>
 <input type="date" class="form-control"
name="tanggal" value="2022-03-20">
 </div>
 </div>
 <div class="row">
 <div class="mb-3 col-md-4">
<label for="nama-akun" class="form-label">Nama
Akun</label>
 <select class="form-select" name="nama-akun">
 <option selected value="1">Kas</option>
 <option value="2">Piutang Usaha</option>
 <option value="3">Perlengkapan</option>
 <option value="4">Hutang Usaha</option>
 <option value="5">Modal</option>
 </select>
 </div>
 <div class="mb-3 col-md-4">
 <label for="nominal" class="formlabel">Nominal</label>
 <input type="number" class="form-control"
name="nominal" value="10000000">
 </div>
 <div class="mb-3 col-md-4">
 <label for="type" class="formlabel">Type</label>
 <select class="form-select" name="type">
 <option selected
value="debit">Debit</option>
<option value="kredit">Kredit</option>
 </select>
 </div>
 </div>
 <div class="row">
 <div class="mb-3 col">
<label for="keterangan" class="formlabel">Keterangan</label>
 <textarea class="form-control"
name="keterangan" rows="3"> - </textarea>
 </div>
 </div>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary"
data-bs-dismiss="modal">Close</button>
 <button type="button" class="btn btnprimary">Simpan</button>
 </div>
 </div>
 </div>
 </div>
 </tr>
 <tr>
     <td>2</td>
 <td>#PJ020324</td>
 <td>Penjualan</td>
 <td>2022-03-20</td>
 <td>Kas</td>
 <td>Rp. 10.000.000</td>
 <td>Kredit</td>
 <td>-</td>
 <td>
 <a href="#editJurnal" class="text-decoration-none" databs-toggle="modal">
 <i class="bi bi-pencil-square text-success"></i>
 </a>
 <a href="" class="text-decoration-none">
 <i class="bi bi-trash text-danger"></i>
 </a>
 </td>
 </tr>
 </tbody>
 </div>