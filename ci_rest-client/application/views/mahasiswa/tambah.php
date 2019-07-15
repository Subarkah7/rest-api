<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <?php if(validation_errors()) : ?>
                <!-- <div class="alert alert-danger" role="alert">
                    <?php //echo validation_errors(); ?>
                </div> -->
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp">
                        <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Example select</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>