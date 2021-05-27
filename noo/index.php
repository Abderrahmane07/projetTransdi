<?php include_once ("header.php"); ?>

    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/ENSC1.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">Annuaire ENSC</h1>
                    <h3>L’annuaire de l’ENSC, pour mieux vous connectez.</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">Faire une recherche</button>
                    <button type="button" class="btn btn-primary btn-lg">Ajouter  une expérience</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ENSC2.jpg">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/5c/b6/c2/5cb6c2c00b1b4ce6eec6c6edce43eab9.jpg">
            </div>
        </div>
    </div>


    <!--- Jumbotron -->

    <div class="container-fluid" id="autour">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead">Lorsqu’un médecin commence à pratiquer, il se tourne vers des remplacements de médecins titulaires pour de plus ou moins longues durées. De leur côté, les médecins titulaires cherchent à se faire remplacer pour des congés ou raisons personnelles. S’il existe plusieurs options permettant de les mettre en contact les uns avec les autres, aucune ne semble vraiment satisfaisante. C’est pourquoi Anouk Andre-Arma, elle-même remplaçante en médecine générale a proposé le projet DocShare. Son souhait était en effet d’avoir à disposition une plateforme rapide et performante pour faciliter ses recherches de travail.
L'objectif de ce projet était donc de faire une analyse de l’existant et une étude du besoin auprès de médecins, titulaires et remplaçants, afin de concevoir une plateforme de mise en relation. Le rendu attendu pour cette future plateforme était une maquette et non un outil développer.
</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="https://fr.wikipedia.org/wiki/%C3%89cole_nationale_sup%C3%A9rieure_de_cognitique" target="_blank"><button type="button" class="btn btn-outline-secondary btn-lg">En savoir plus</button></a>
            </div>
        </div>
    </div>

    <!--- Welcome Section -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">La cognitique.</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">La cognitique est la science qui étudie les rapports entre
                les hommes, la connaissance, les machines et les systèmes
                complexes. Discipline d’ingénierie, elle associe les TIC,
                l’intelligence artificielle, la cobotique, la gestion des
                connaissances, la psychologie, l’ergonomie, la biologie et les
                sciences sociales.</p>
            </div>
        </div>
    </div>



    <!--- Students/Promos -->
    <?php
        if(isset($_SESSION["useruid"])){
            include_once ("promos.php");
        }
    ?>

    <!--- Two Column Section -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>L'ENSC, une école du futur</h2>
                <p>L’ENSC est un lieu d’innovation et de transfert.
                Plusieurs jeunes entreprises (start-up et spin-off)
                y sont hébergées et l’Institut Carnot « Cognition »
                y a sa direction. L’Institut Cognition fédère une
                vingtaine de laboratoires de recherche nationaux
                et propose une offre technologique sur le sujet de
                la cognition humaine.</p>
                <p>Située sur le campus universitaire de Talence
                en Gironde, l’ENSC est une école interne
                de Bordeaux INP. Elle participe ainsi aux
                missions d’un établissement de formation et de
                recherche dédié à l’ingénierie et à la technologie.
                L’interdisciplinarité y est présente au quotidien, par
                une véritable collaboration entre TIC (technologies
                de l’information et de la communication) et SHS
                (sciences de l’humain et de la société), dans une
                perspective de coproduction de connaissances.
                L’intelligence artificielle (IA) y occupe une place
                importante, notamment à travers l’ensemble des
                techniques inspirées de l’intelligence « naturelle ».
                En retour le projet lié à l’IA, celui de rendre toute
                décision la plus automatique possible et la plus
                adaptée à la situation rencontrée, se renforce des
                recherches menées en cognitique. C’est sur le
                rapprochement entre I’IA et les facteurs humains
                que se concentrent les efforts : décision collective,
                confiance dans les systèmes, équipes humainsautomates, etc.</p>
                <br>
                <a href="https://ensc.bordeaux-inp.fr/fr" target="_blank"><button type="button" class="btn btn-primary">Apprendre plus</button></a>
            </div>
            <div class="col-lg-6">
                <img src="img/desk.png" class="img-fluid">
            </div>

        </div>
    </div>
    <hr class="my-4">


    <!--- Fixed background -->
    <figure>
        <div class="fixed-wrap">
            <div id="fixed">

            </div>
        </div>
    </figure>

    <!--- Partners Section -->

    <button class="fun" data-toggle="collapse" data-target="#partners">Appuyer pour voir les partenaires de l'ENSC</button>
    <div id="partners" class="collapse">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/dassault.png">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/edf.png">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/ibm.png">
                </div>
                <div class="col-sm-6 col-md-3">
                    <img class="logos" src="img/logos/thales.png">
                </div>
            </div>
        </div>
    </div>

    <!--- Two Column Section -->

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>Notre philosophie.</h2>
                <p>À l’heure où les technologies s’affichent comme
                ressources universelles pour toutes nos actions
                et toutes les solutions aux problèmes que
                nous rencontrons, il est important qu’un lieu
                de formation, de recherche et d’innovation soit
                consacré à ce lien nécessaire et incontournable
                qui réside entre le « facteur humain » et les
                « technologies numériques ».</p>
                <p>L’ENSC est une école généraliste pour des
                ingénieurs formés à un exercice professionnel
                dans les domaines de l’aéronautique, du
                transport, de la santé, du divertissement et plus
                largement de toute entreprise et industrie où les
                technologies numériques irriguent le travail des
                professionnels. Les enseignements associent
                les sciences humaines (psychophysiologie,
                psychologie, psychosociologie…) et les
                technologies (informatique, traitement du signal,
                calculs statistiques, robotique…). Les ingénieurs y
                sont préparés à anticiper les besoins, les limites
                ou encore les préférences humaines, c’est-àdire à concevoir les usages actuels et futurs des
                technologies. Les études d’ingénieur s’y déroulent
                en trois années, après un recrutement à bac+2.
                La formation professionnelle s’y fait en lien direct
                avec les besoins des entreprises.</p>
                
                <br>
            </div>
            <div class="col-lg-6">
                <img src="https://images.sudouest.fr/2019/06/24/5d10294a66a4bd8b405ac1f2/golden/bernard-claverie.jpg?v1" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>
    <iframe src="https://www.figma.com/" width="100%" height="560"></iframe>


<?php include_once("footer.php"); ?>
