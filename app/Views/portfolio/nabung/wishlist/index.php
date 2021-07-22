<?= $this->extend('templates/saving'); ?>
<?= $this->section('content'); ?>


<div class="row">
    <div class="col">
        <div class="container mt-5">
            <h2>Wishlist</h2>
            <?php if (session()->getFlashdata('message')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('message'); ?>
                </div>
            <?php endif; ?>
            <a href="/wishlist/create" class="btn btn-success mt-3">Tambah Data</a>


            <div class="row mt-4">
                <?php foreach ($wishlist as $row) :  ?>
                    <?php
                    $date2 = date_create($row['target']);
                    $jangka = date_diff($currDate, $date2)->format("%d")
                    ?>

                    <div class="col-sm-6 mb-3">
                        <div class="card shadow" style="max-width: 700px;border-radius:20px;">
                            <div class="row no-gutters">
                                <div class="col-md-3 bg-primary" style="border-radius: 20px 0px 0px 20px;">
                                    <div class="col" style="margin-top: 40px;">
                                        <h3 class="text-center text-white" style="font-size:16px;text-decoration:none">Target</h3>
                                    </div>
                                    <div class="col mt-1">
                                        <h1 class="text-center text-warning" style="font-weight: bold;"><?= $jangka; ?></h1>
                                    </div>
                                    <div class="col mt-1">
                                        <h3 class="text-center text-white" style="font-size:16px;">Hari</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="card-title"><?= $row['nama']; ?></h5>
                                            </div>
                                            <div class="col">
                                                <p style="font-size:14px;" class="text-secondary">Harga: Rp. <?= number_format($row['harga']); ?></p>
                                            </div>
                                        </div>
                                        <p class="text-muted" style="font-size:14px;display:inline;">Saran Menabung : </p>
                                        <span class="text-success" style="font-size:14px;">Rp.<?= number_format((($row['harga'] - $row['nabung']) / $jangka)); ?>/hari</span>
                                        <div class="progress" style="margin-top:5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width:<?= ($row['nabung'] / $row['harga']) * 100; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height:15px"></div>
                                        </div>
                                        <p class="card-text text-muted" style="font-size: 12px;">Terkumpul : Rp. <?= number_format($row['nabung']); ?></p>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <a href="<?= base_url('wishlist/nabung/' . $row['id']); ?>" class="btn btn-primary">Nabung</a>
                                            </div>
                                            <div class="col-sm-2 text-right mt-1" style="margin-left: 80px;padding:0px; ">
                                                <a href="<?= base_url('wishlist/edit/' . $row['id']); ?>" class="btn btn-info btn-sm d-inline"><i class="far fa-edit"></i></a>
                                            </div>
                                            <div class="col-sm-2 text-right mt-1">
                                                <form action="<?= base_url('wishlist/' . $row['id']); ?>" method="post">
                                                    <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Yakin Ingin Hapus Data Ini ?')"><i class="far fa-trash-alt"></i></a>
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


<?= $this->endsection(); ?>