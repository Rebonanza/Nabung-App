<?= $this->extend('/templates/saving'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <div class="container mt-5 shadow" style="background-color:smoke;border-radius:20px;width:800px;">
                <div class="row">
                    <div class="col mb-5" style="margin: 35px 0 20px 40px;">
                        <h3 class="d-inline-block w-5" style="margin-bottom: 25px;">Nabung</h3>
                        <form method="POST" action="/wishlist/tabung/<?= $wishlist['id']; ?>">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="tabunganLama" value="<?= $wishlist['nabung']; ?>">
                            <h4 class="ml-3"><?= $wishlist['nama']; ?></h4>
                            <label class="ml-3 mt-2 badge badge-primary" style="font-size:16px;">Harga : Rp.<?= number_format($wishlist['harga']); ?></label>
                            <div class="form-group">
                                <label class="ml-3 mt-4" for="harga">Jumlah Uang</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" id="harga" aria-describedby="nabung" required name="nabung" placeholder="jumlah uang yang akan anda tabung">
                                </div>
                                <small id="nabung" class="form-text text-muted ml-3 font-italic">Terkumpul : Rp.<?= number_format($wishlist['nabung']); ?></small>

                            </div>
                            <button type="submit" class="btn btn-success ml-3 mt-3" id="btn">Tabung</button>

                            <a href="<?= base_url('wishlist'); ?>" class="btn btn-primary ml-3 mt-3">Kembali</a>
                        </form>
                    </div>
                    <div class="col-md-5 mr-2" style="border-radius: 0px 20px 20px 0px;">
                        <img src="<?= base_url('img/n-img.jpg'); ?>" class="mr-4 mt-4" style="height:inherit;width:inherit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>