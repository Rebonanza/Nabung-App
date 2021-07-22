
<?= $this->extend('/templates/saving'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="container mt-5 shadow" style="background-color:smoke;border-radius:20px;width:800px;">
                <div class="row">
                    <div class="col mb-5" style="margin: 35px 0 20px 40px;">
                        <h4 class="d-inline-block w-5" style="margin-bottom: 25px;">Edit Wishlist</h4>
                        <form method="POST" action="/wishlist/update/<?= $wishlist['id']; ?>">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label class="ml-3" for="nama">Nama</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="nama" aria-describedby="namaBarang" name="nama" autofocus required value="<?= $wishlist['nama']; ?>">
                                </div>
                                <small id="namaBarang" class="form-text text-muted ml-3 font-italic">Masukkan Nama Barang Yang Ingin Anda Beli</small>
                            </div>
                            <div class="form-group">
                                <label class="ml-3" for="harga">Harga</label>
                                <div class="col-10">
                                    <input type="text"  class="form-control <?= ($val->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" aria-describedby="hargaBarang" required name="harga" value="<?= (old('harga')== null) ?  number_format($wishlist['harga']) : old('harga') ; ?>">
                                    <div class="invalid-feedback">
                                        <?= $val->getError('harga'); ?>
                                    </div>
                                </div>
                                <small id="hargaBarang" class="form-text text-muted ml-3 font-italic">Masukkan Harga Barang Yang Ingin Anda Beli</small>
                            </div>
                            <div class="form-group">
                                <label class="ml-3" for="target">Target</label>
                                <div class="col-10">
                                    <input type="date" class="form-control" id="target" aria-describedby="target" required name="target" value="<?= $wishlist['target']; ?>">
                                </div>
                                <small id="target" class="form-text text-muted ml-3 font-italic">Masukkan Tanggal Anda Ingin Membeli Barang Tersebut</small>
                            </div>
                            <button type="submit" class="btn btn-success ml-3 mt-3" id="btn">Submit</button>
                            <a href="<?= base_url('wishlist'); ?>" class="btn btn-primary ml-3 mt-3">Kembali</a>
                        </form>
                    </div>
                    <div class="col-md-5 mt-4" style="border-radius: 0px 20px 20px 0px;">
                        <img src="<?= base_url('img/coba.jpg'); ?>" style="height:inherit;width:inherit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>