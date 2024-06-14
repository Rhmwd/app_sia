<form action="modul/pengguna/aksi_pengguna.php?act=insert" method="post">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">username</label>
                <input type="text" class="from-control" name="username">
</div>
<div class="mb-3 col-md-6">
    <label for="password" class="from-label">password</label>
    <input type="text" class="from control" name="password">
</div>
</row>
<div class="row">
    <div class="mb-3 col-md-6">
        <label for="level" class="from-lebel">level</label>
        <input type="text" class="from control" name="level">
</div>
<div class="mb-3 col-md-6">
<label for="email" class="from-lebel">email</label>
<input type="text" class="from control" name="email">
</div>
</div>
<hr>
<div class="row">
    <div class="col text-end">
    <button class="btn btn-secondary" type="reset">Reset</button>
 <button class="btn btn-primary" type="submit">Simpan</button>
 </div>
 </div>
 <div class="card">
 <div class="card-header">
 <h3>Data Pengguna</h3>
 <div class="card-body">
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>No</th>
 <th>Username</th>
 <th>Level</th>
 <th>Email</th>
 <th><i class="bi bi-gear-fill"></i></th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td>admin</td>
 <td>admin</td>
 <td>admin@gmail.com</td>
 <td>
 <!-- Button trigger modal -->
<i class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">username</label>
                <input type="text" class="from-control" name="username">
</div>
<div class="mb-3 col-md-6">
    <label for="password" class="from-label">password</label>
    <input type="text" class="from control" name="password">
</div>
</row>
<div class="row">
    <div class="mb-3 col-md-6">
        <label for="level" class="from-lebel">level</label>
        <input type="text" class="from control" name="level">
</div>
<div class="mb-3 col-md-6">
<label for="email" class="from-lebel">email</label>
<input type="text" class="from control" name="email">
</div>
</div>
<hr>
<div class="row">
    <div class="col text-end">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="editPengguna" tabindex="-1" aria-
labelledby="editPenggunaLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="editPenggunaLabel">Edit
Pengguna</h5>
 <button type="button" class="btn-close" data-bs-
dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <div class="mb-3">
 <label for="username" class="form-
label">Username</label>
 <input type="text" class="form-control"
name="username" value="admin">
 </div>
 <div class="mb-3">
 <label for="password" class="form-
label">Password</label>
 <input type="text" class="form-control"
name="password">
 <span class="form-text text-muted">Kosongkan jika
tidak ingin mengganti password</span>
 </div>
 <div class="mb-3">
 <label for="level" class="form-label">Level</label>
 <select class="form-select" name="level">
 <option value="admin">Admin</option>
 <option value="user">User</option>
 </select>
 </div>
 <div class="mb-3">
 <label for="email" class="form-label">Email</label>
 <input type="text" class="form-control" name="email"
value="admin@gmail.com">
 </div>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-
bs-dismiss="modal">Close</button>
 <button type="button" class="btn btn-
primary">Simpan</button>
 </div>
 </div>
 </div>
 </div>
 </tr>
 <tr>
 <td>2</td>
 <td>user</td>
 <td>user</td>
 <td>user@gmail.com</td>
 <td>
<!-- Button trigger modal -->
<i class="btn btn-bi bi-pencil-square text-success" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
<i class="bi bi-trash text-danger"></i>
</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">username</label>
                <input type="text" class="from-control" name="username">
</div>
<div class="mb-3 col-md-6">
    <label for="password" class="from-label">password</label>
    <input type="text" class="from control" name="password">
</div>
</row>
<div class="row">
    <div class="mb-3 col-md-6">
        <label for="level" class="from-lebel">level</label>
        <input type="text" class="from control" name="level">
</div>
<div class="mb-3 col-md-6">
<label for="email" class="from-lebel">email</label>
<input type="text" class="from control" name="email">
</div>
</div>
<hr>
<div class="row">
    <div class="col text-end">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
 </div>
