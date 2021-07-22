<?= $this->extend('templates/saving'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <div class="container mt-5">
            <h2>Profile</h2>
            <h4>Hai, Giventheo</h4>
            <span class="badge badge-info" style="font-size: 14px;">Total Pemasukan : Rp. <?= number_format($totalPemasukan[0]['totalPemasukan'])?></span>
            <span class="badge badge-info" style="font-size: 14px;">Total Pemasukan : Rp. <?= number_format($totalPengeluaran[0]['totalPengeluaran'])?></span>
        </div>
    </div>
</div>


<?= $this->endsection(); ?>