<?= $this->extend('templates/landing'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>My Portfolio</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus cum non veniam et soluta obcaecati ex culpa dolor eius optio nesciunt eligendi tempora aliquid officiis in reprehenderit, dolorem repudiandae! Neque.</p>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border border-white mt-4" style="width: 16rem;background:none;">
                        <img src="img/background.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Nabung App</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="nabung" class="btn border border-white text-white">Visit Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="card border border-white mt-4" style="width: 16rem;background:none;">
                        <img src="img/background.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Coming Soon</h5>
                            <p class="card-text">... Coming Soon</p>
                            <a href="#" class="btn border border-white text-white disabled">Coming Soon</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border border-white mt-4" style="width: 16rem;background:none;">
                        <img src="img/background.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Coming Soon</h5>
                            <p class="card-text">... Coming Soon</p>
                            <a href="#" class="btn border border-white text-white disabled">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>


<?= $this->endsection(); ?>