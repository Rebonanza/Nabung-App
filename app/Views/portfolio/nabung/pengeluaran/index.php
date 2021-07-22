<?= $this->extend('templates/saving'); ?>
<?= $this->section('content'); ?>


<div class="row">
    <div class="col">
        <div class="container mt-5">
            <h2>Pengeluaran</h2>
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
            <a href="/pengeluaran/create" class="btn btn-success mt-3">Tambah Data</a>


            <div class="row mt-4">
                <?php foreach ($pengeluaran as $row) :  ?>

                    <div class="col-sm-6 mb-3">
                        <div class="card shadow" style="max-width: 500px;border-radius:20px;">
                            <div class="row no-gutters">
                                <div class="col-md-3 bg-primary" style="border-radius: 20px 0px 0px 20px;">
                                    <div class="col mt-1 mt-4">
                                        <h1 class="text-center text-white" style="font-weight: bold;"><?= date('j', strtotime($row['created_at'])); ?></h1>
                                    </div>
                                    <div class="col mt-1">
                                        <h4 class="text-center text-white" style="font-size:16px;"><?= date('F Y', strtotime($row['created_at'])); ?></h4>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="card-title">Catatan</h5>
                                                <p class="text-secondary"><?= $row['catatan']; ?></p>
                                            </div>
                                            <div class="col">
                                                <p style="font-size:18px;" class="text-black">Rp. <?= number_format($row['jumlah']); ?></p>
                                            </div>
                                        </div>
                                        <div class="row text-right">
                                            <div class="col text-right mt-1">
                                                <a href="<?= base_url('pengeluaran/edit/' . $row['id']); ?>" class="btn btn-warning btn-sm d-inline mr-2"><i class="far fa-edit"></i>Edit</a>
                                                <form action="<?= base_url('pengeluaran/delete/' . $row['id']); ?>" method="post" style="display: inline">
                                                    <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Yakin Ingin Hapus Data Ini ?')"><i class="far fa-trash-alt"></i>Hapus</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>


<?= $this->endsection(); ?>