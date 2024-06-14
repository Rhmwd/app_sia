<form action="modul/akun/aksi_akun.php?act=insert" method="post">
<div class="card mb-3">
<div class="card mb-3">
<div class="card-body">
<form action="" method="post">
<div class="row mb-3">
<div class="col-md-4">
<label class="form-label" for="nama_akun">Nama akun</label>
<input type="text" class="form-control" name="nama_akun">
</div>
<div class="col-md-4">
<label class="form-label" for="jenis_akun">Jenis akun</label>
<input type="text" class="form-control" name="jenis_akun">
</div>
<div class="col-md-4">
<label class="form-label" for="type_saldo">Type saldo</label>
<select class="form-select" name="type_saldo">
<option value="debit">Debit</option>
<option value="kredit">Kredit</option>
</select>
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
<h3>Data Akun</h3>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Nama Akun</th>
<th>Jenis Akun</th>
<th>Type Saldo</th>
<th><i class="bi bi-gear-fill"></i></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Kas</td>
<td>Aset</td>
<td>Debit</td>
<td>
    <!-- Button trigger modal -->
<a href="#editAkun" class="text-decoration-none" data-bstoggle="modal">
<button type="button" class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
</button>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
        <div class="col-md-4">
        <label class="form-label" for="nama_akun">Nama akun</label>
        <input type="text" class="form-control" name="nama_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="jenis_akun">Jenis akun</label>
        <input type="text" class="form-control" name="jenis_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="type_saldo">Type saldo</label>
        <select class="form-select" name="type_saldo">
        <option value="debit">Debit</option>
        <option value="kredit">Kredit</option>
    </select>
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</td>
<!-- Modal -->
<div class="modal fade" id="editAkun" tabindex="-1" arialabelledby="exampleModalLabel" aria-hidden="true">
<form action="" method="post">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">Edit
Data Akun</h1>
<button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label class="form-label" for="nama_akun">Nama
akun</label>
 <input type="text" class="form-control" name="nama_akun"
value="Kas">
 </div>
 <div class="mb-3">
 <label class="form-label" for="jenis_akun">Jenis
akun</label>
 <input type="text" class="form-control"
name="jenis_akun" value="Aset">
 </div>
 <div class="mb-3">
 <label class="form-label" for="type_saldo">Type
saldo</label>
 <select class="form-select" name="type_saldo">
 <option value="debit" selected>Debit</option>
 <option value="kredit">Kredit</option>
 </select>
 </div>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-bs-
 dismiss="modal">Close</button>
 <button type="submit" class="btn btnprimary">Simpan</button>
 </div>
 </div>
 </div>
 </form>
 </div>
 </tr>
 <tr>
 <td>2</td>
 <td>Piutang Usaha</td>
 <td>Aset</td>
 <td>Debit</td>
 <td>
  <!-- Button trigger modal -->
<a href="#editAkun" class="text-decoration-none" data-bstoggle="modal">
<button type="button" class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
</button>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
        <div class="col-md-4">
        <label class="form-label" for="nama_akun">Nama akun</label>
        <input type="text" class="form-control" name="nama_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="jenis_akun">Jenis akun</label>
        <input type="text" class="form-control" name="jenis_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="type_saldo">Type saldo</label>
        <select class="form-select" name="type_saldo">
        <option value="debit">Debit</option>
        <option value="kredit">Kredit</option>
    </select>
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</td>
 </a>
 </td>
 </tr>
<td>3</td>
 <td>Perlengkapan</td>
 <td>Aset</td>
 <td>Debit</td>
 <td>
  <!-- Button trigger modal -->
<a href="#editAkun" class="text-decoration-none" data-bstoggle="modal">
<button type="button" class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
</button>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
        <div class="col-md-4">
        <label class="form-label" for="nama_akun">Nama akun</label>
        <input type="text" class="form-control" name="nama_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="jenis_akun">Jenis akun</label>
        <input type="text" class="form-control" name="jenis_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="type_saldo">Type saldo</label>
        <select class="form-select" name="type_saldo">
        <option value="debit">Debit</option>
        <option value="kredit">Kredit</option>
    </select>
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</td>
 </a>
 </td>
 </tr>
 <tr>
 <td>4</td>
 <td>Utang Usaha</td>
 <td>Kewajiban</td>
 <td>Kredit</td>
 <td>
  <!-- Button trigger modal -->
<a href="#editAkun" class="text-decoration-none" data-bstoggle="modal">
<button type="button" class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
</button>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
        <div class="col-md-4">
        <label class="form-label" for="nama_akun">Nama akun</label>
        <input type="text" class="form-control" name="nama_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="jenis_akun">Jenis akun</label>
        <input type="text" class="form-control" name="jenis_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="type_saldo">Type saldo</label>
        <select class="form-select" name="type_saldo">
        <option value="debit">Debit</option>
        <option value="kredit">Kredit</option>
    </select>
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</td>
 </a>
 </td>
 </tr>
<tr>
 <td>5</td>
 <td>Modal</td>
 <td>Ekuitas</td>
 <td>Kredit</td>
 <td>
 <!-- Button trigger modal -->
<a href="#editAkun" class="text-decoration-none" data-bstoggle="modal">
<button type="button" class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
</button>
<a href="" class="text-decoration-none">
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
        <div class="col-md-4">
        <label class="form-label" for="nama_akun">Nama akun</label>
        <input type="text" class="form-control" name="nama_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="jenis_akun">Jenis akun</label>
        <input type="text" class="form-control" name="jenis_akun">
        </div>
        <div class="col-md-4">
        <label class="form-label" for="type_saldo">Type saldo</label>
        <select class="form-select" name="type_saldo">
        <option value="debit">Debit</option>
        <option value="kredit">Kredit</option>
    </select>
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</td>
 </a>
 </td>
 </tr>
 </td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
