<?= $this->extend('/templates/saving'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="container mt-5 shadow" style="background-color:smoke;border-radius:20px;width:750px;">
                <div class="row">
                    <div class="col mb-5" style="margin: 35px 0 10px 40px;">
                        <h4 class="d-inline-block w-5" style="margin-bottom: 25px;">Tambah Pemasukan</h4>
                        <form method="POST" action="/pemasukan/save">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label class="ml-3" for="catatan">Catatan</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="catatan" aria-describedby="catatanPemasukan" name="catatan" autofocus required value="<?= old('catatan'); ?>">
                                </div>

                                <small id="catatanPemasukan" class="form-text text-muted ml-3 font-italic">masukkan catatan yang berkaitan dengan jenis pemasukan anda</small>
                            </div>
                            <div class="form-group">
                                <label class="ml-3" for="harga">Jumlah Uang</label>
                                <div class="col-10">
                                    <input type="text" class="form-control  <?= ($val->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" aria-describedby="jumlahUang" id="harga" required name="jumlah" value="<?= old('harga'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $val->getError('jumlah'); ?>
                                    </div>
                                </div>
                                <small id="jumlahUang" class="form-text text-muted ml-3 font-italic">masukkan jumlah uang pemasukan anda</small>

                            </div>
                            <button type="submit" class="btn btn-success ml-3 mt-3" id="btn">Simpan</button>
                            <a href="<?= base_url('pemasukan'); ?>" class="btn btn-primary ml-3 mt-3">Kembali</a>
                        </form>
                    </div>
                    <div class="col-md-5" style="border-radius: 0px 20px 20px 0px;">
                        <img src="<?= base_url('img/pm.jpg'); ?>" class="mt-5" style="height:inherit;width:inherit">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endsection(); ?>