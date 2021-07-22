<?= $this->extend('templates/landing'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row" style="height: 500px;">
        <div class="col" style="height: 200px;display:inline-block;margin-top:360px;background-color: rgba(0,0,0,.5); border-radius:10px;">
            <div class="container mt-2" style="height: 150px;">
                <div class="intro-def mt-3 " style="display:inline-block;">
                    <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id ea vero odit aliquam voluptatum fuga illo! Earum tempore deleniti animi voluptatum necessitatibus ipsam? Odit accusantium expedita dolore ut, pariatur tenetur.</p>
                    <a href="portfolio" class="btn border border-white text-white">View My Portfolio</a>
                </div>

            </div>

        </div>
        <div class="col border border-white" style="height: 200px;display:inline-block;margin-top:100px;border-radius:10px;margin-left:100px">
            <div class="container mt-4" style="height: 150px;">
                <div class="intro mt-2" style="display:inline-block;">
                    <h3 class="text-light">Hello My Name Is Given</h3>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vel nesciunt facere soluta ex incidunt esse quas sequi, molestias tenetur itaque, aliquid error corrupti commodi maxime. Commodi nesciunt minima eaque.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endsection(); ?>