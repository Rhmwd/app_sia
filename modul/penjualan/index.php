<div class="card mb-3">
    <div class="card-body">
        <form action=""method="post">
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
                <label for="barang" class="form-label">Barang</label>
                <select name="barang" class="form-select">
                    <option value="1">Laptop Acer</option>
                    <option value="2">Komputer (PC)</option>
                </select>
            </div>
        </div>
 
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="pelanggan" class="form-label">Pelanggan</label>
                <select name="pelanggan" class="form-select">
                    <option value="1">PT Sejahtera</option>
                    <option value="2">CV Maju Bersama</option>
                </select>
            </div>
 
            <div class="col-md-2">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah">
            </div>
 
            <div class="col-md-3">
                <label for="harga" class="form-label">Harga</label>
                <div class="input-group">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" class="form-control" name="harga">
                </div>
            </div>
 
            <div class="col-md-3">
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
        <h3>Data Penjualan</h3>
    </div>
 
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Pelanggan</th>
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
                        <td>PJ110324</td>
                        <td>11/03/2024</td>
                        <td>Laptop Acer</td>
                        <td>PT Sejahtera</td>
                        <td>3</td>
                        <td>Rp. 10.000.000,-</td>
                        <td>Rp. 30.000.000,-</td>
                        <td>Penjualan 3 unit laptop acer</td>
                        <td>
                            <a href="#editPenjualan" class="text-decoration-none" data-bstoggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
 
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>

    <!-- Modal -->
    <div class="modal fade" id="editPenjualan" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="" method="post">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5"id="exampleModalLabel">Edit Data Penjualan</h1>
                        <button type="button" class="btn-close" data-bsdismiss="modal" aria-label="Close"></button>
                    </div>
 
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="invoice" class="formlabel">Invoice</label>
                                <input type="text" class="form-control"name="invoice" value="PJ110324" disabled>
                            </div>

                            <div class="col-md-4">
                                <label for="tanggal" class="formlabel">Tanggal</label>
                                <input type="date" class="form-control"name="tanggal" value="2024-11-03">
                            </div>
 
                            <div class="col-md-4">
                                <label for="barang" class="formlabel">Barang</label>
                                <select name="barang" class="form-select">
                                    <option value="1" selected>Laptop Acer</option>
                                    <option value="2">Komputer (PC)</option>
                                </select>
                            </div>
                        </div>
 
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="pelanggan" class="formlabel">Pelanggan</label>
                                <select name="pelanggan" class="formselect">
                                    <option value="1" selected>PT Sejahtera</option>
                                    <option value="2">CV Maju Bersama</option>
                                </select>
                            </div>
 
                            <div class="col-md-2">
                                <label for="jumlah" class="formlabel">Jumlah</label>
                                <input type="number" class="form-control"name="jumlah" value="3">
                            </div>
 
                            <div class="col-md-3">
                                <label for="harga" class="formlabel">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="number" class="form-control"name="harga" value="10000000">
                                </div>
                            </div>
 
                            <div class="col-md-3">
                                <label for="total" class="formlabel">Total</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="number" class="form-control"name="total" value="30000000" disabled>
                                </div>
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col-md-12">
                                <label for="keterangan" class="formlabel">Keterangan</label>
                                <textarea name="keterangan" class="formcontrol">Penjualan 3 unit laptop acer</textarea>
                            </div>
                        </div>
                    </div>
 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btnprimary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
 </tr>
 
                <tr>
                    <td>2</td>
                    <td>PJ100324</td>
                    <td>10/03/2024</td>
                    <td>Komputer (PC)</td>
                    <td>CV Maju Bersama</td>
                    <td>10</td>
                    <td>Rp. 8.000.000,-</td>
                    <td>Rp. 80.000.000,-</td>
                    <td>Penjualan 10 unit komputer komplit</td>
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
