<div class="container">
    <?php if($this->session->flashdata() ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert"><h4 class="alert-heading">Succes!</h4>Data mahasiswa
            <strong>berhasil</strong> <?php echo $this->session->flashdata('flash');?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary"> Tambah Data Mahasiswa </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Cari data mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <?php if( empty($mahasiswa)) :?>
                <div class="alert alert-danger" role="alert">
                Data Mahasiswa tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin?');">Hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">Detail</a>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right">Ubah</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>          