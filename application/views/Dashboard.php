<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="card">
        <!-- <h5 class="card-header">Data Asisten LabTI</h5> -->
        <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h5 mb-0 text-gray-800">Data Praktikan LabTI</h5>
            <a href="<?=base_url('Dashboard/tambah_praktikan')?>"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Praktikan</a>
        </div>
        <div class="card-body py-0">
            <?php if($this->session->flashdata('pesan') == 'Ditambah'): ?>
            <div class="alert alert-success" role="alert">
                Data Asisten Berhasil Ditambah!
            </div>
            <?php endif ?>
            <?php if($this->session->flashdata('pesan') == 'dihapus'): ?>
            <div class="alert alert-success" role="alert">
                Data Asisten Berhasil Dihapus!
            </div>
            <?php endif ?>
            <?php if($this->session->flashdata('pesan') == 'diubah'): ?>
            <div class="alert alert-success" role="alert">
                Data Asisten Berhasil Diubah!
            </div>
            <?php endif ?>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="3%">No.</th>
                        <th width="35">Nama Praktikan</th>
                        <th width="15">NPM</th>
                        <th width="10">Kelas</th>
                        <th width="15">Region</th>
                        <th width="22%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                $no=1;
                                foreach ($praktikan as $dt ): ?>
                    <tr>
                        <th class="align-middle"><?= $no++ ?></th>
                        <td class="align-middle"><?= $dt['nama'] ?></td>
                        <td class="align-middle"><?= $dt['npm'] ?></td>
                        <td class="align-middle"><?= $dt['kelas'] ?></td>
                        <td class="align-middle"><?= $dt['region'] ?></td>
                        <td class="align-middle">
                            <a href="<?= base_url('Dashboard/ubah/'.$dt['id_praktikan'])?>" class="btn btn-info"><i
                                    class="mr-2 fas fa-fw fa-edit"></i>Ubah</button>
                                <a href="<?= base_url('Dashboard/delete_data/'.$dt['id_praktikan'])?>"
                                    class="ml-2 btn btn-danger"
                                    onclick="return confirm('Data ini akan terhapus secara permanen!')"><i
                                        class="mr-2 fas fa-fw fa-trash"></i>Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->