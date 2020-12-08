 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="card">
  <h5 class="card-header">Form Data Praktikan LabTI</h5>
  <div class="card-body">
    <form class="needs-validation" novalidate action="<?= base_url('Dashboard/tambah_praktikan_submit')?>" method="POST">
          <div class="form-row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
              <div class="invalid-feedback">
                Nama lengkap harus diisi.
              </div>
            </div>
          </div>

          <div class="form-row mt-3">
            <label for="npm" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="npm" id="npm" placeholder="NPM" required>
              <div class="invalid-feedback">
                NPM harus diisi.
              </div>
            </div>
          </div>

          <div class="form-row mt-3">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" required>
              <div class="invalid-feedback">
                Kelas harus diisi.
              </div>
            </div>
          </div>

          <div class="form-row mt-3">
            <label for="region" class="col-sm-2 col-form-label">Region</label>
            <div class="col-sm-10">
              <select class="form-control" name="region" id="region" required>
                <option selected value="">Pilih Region...</option>
                <option value="KD">Kelapa Dua</option>
                <option value="XM">Kalimalang</option>
              </select>
              <div class="invalid-feedback">
                Region harus diisi.
              </div>
            </div>
          </div>

          <div class="form-group row float-right mt-3">
            <div class="col-md-12">
              <button type="submit" class="btn py-2 px-4 btn-primary">Add</button>
            </div>
          </div>
    </form>
  </div>
</div>
</div>
<!-- /.container-fluid -->
