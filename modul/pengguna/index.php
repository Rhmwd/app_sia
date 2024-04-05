<div class="card">
    
</div>
<div class="card-body">
    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3 col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="level" class="form-label"> Level </label>
            <input type="text" class="form-control" name="level">
        </div>
    </div>
</div>
<hr>
<div class=" mb-3 col-md-6 " >
    <label for=" email " class=" form-label " > Email </label >
    <input type=" text " class=" form-control " name=" email " >
    </div>
<div class=" row " >
    <div class=" col text-end " > 
    <button class="btn btn-secondary" type="reset">Reset</button>
<button class="btn btn-primary" type="submit">Simpan</button>
 </div>
 </div>
 <div class="card">
 <div class="card-header">
 <h3>Data Pengguna</h3>
 </div
 <div class="card-body">
 <div class="table-responsive">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>#</th>
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
 <a href="#editPengguna" class="text-decoration-none" databs-toggle="modal">
 <i class="bi bi-pencil-square text-success"></i>
 </a>
 <a href="" class="text-decoration-none">
 <i class="bi bi-trash text-danger"></i>
 </a>
 </td>
 <!-- Modal -->
 <div class="modal fade" id="editPengguna" tabindex="-1" arialabelledby="editPenggunaLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
<div class="modal-header">
 <h5 class="modal-title" id="editPenggunaLabel">Edit
Pengguna</h5>
 <button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 <div class="mb-3">
 <label for="username" class="formlabel">Username</label>
 <input type="text" class="form-control"
name="username" value="admin">
 </div>
 <div class="mb-3">
 <label for="password" class="formlabel">Password</label>
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
 <button type="button" class="btn btn-secondary" databs-dismiss="modal">Close</button>
 <button type="button" class="btn btnprimary">Simpan</button>
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
 <a href="#editPengguna" class="text-decoration-none"
data-bs-toggle="modal">
 <i class="bi bi-pencil-square text-success"></i> </a>
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
 </div>
 </div>
 </div>
