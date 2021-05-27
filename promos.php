<?php if(!isset($_SESSION["useruid"])){
    header("location: ./index.php");
}
?>
<div class="container-fluid padding">
    <div class="row welcome text-center" id="promos">
            <div class="col-12">
                <h1 class="display-4">Les promotions</h1>
            </div>
            <hr>
        </div>
</div>

<!--- Cards -->

<div class="container-fluid padding" id="promo-cards">
    <div class="row padding">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img class="card-img-top" src="http://www.adcog.fr/cache/default_800_400/files/prod/slider/0/0/0/0/0/0/1/9-1.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Promo 2020</h4>
                    <p class="card-text">Mstafa is a really cool person and he is the best personin Linkedin</p>
                    <a href="./promo2020.php" class="btn btn-outline-secondary">Voir le profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img class="card-img-top" src="http://www.adcog.fr/cache/default_800_400/files/prod/slider/0/0/0/0/0/0/2/6-1.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Promo 2019</h4>
                    <p class="card-text">karim is a really cool person and he is the best personin Linkedin</p>
                    <a href="#" class="btn btn-outline-secondary">Voir le profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img class="card-img-top" src="http://www.adcog.fr/cache/default_800_400/files/prod/slider/0/0/0/0/0/0/2/5-1.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Promo 2018</h4>
                    <p class="card-text">karim is a really cool person and he is the best personin Linkedin</p>
                    <a href="#" class="btn btn-outline-secondary">Voir le profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img class="card-img-top" src="http://www.adcog.fr/cache/default_800_400/files/prod/slider/0/0/0/0/0/0/2/4-1.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Promo 2017</h4>
                    <p class="card-text">karim is a really cool person and he is the best personin Linkedin</p>
                    <a href="#" class="btn btn-outline-secondary">Voir le profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card">
                <img class="card-img-top" src="http://www.adcog.fr/cache/default_800_400/files/prod/slider/0/0/0/0/0/0/1/5-1.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Promo 2016</h4>
                    <p class="card-text">Hamid is a really cool person and he is the best personin Linkedin</p>
                    <a href="#" class="btn btn-outline-secondary">Voir le profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-4">