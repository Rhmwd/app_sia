<div class="row">
<div class="d-flex">
<span class="me-auto text-gray">
<?php
if(isset($_SESSION['pesan'])){
echo $_SESSION['pesan'];
unset($_SESSION['pesan']);
}
?>
<button type="reset" class="btn btn-secondary">Reset</button>
<button type="submit" name="submit" class="btn btnprimary">Simpan</button>
</div>
</div>