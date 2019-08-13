<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../../../../favicon.ico" />
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="css/tuto6.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://use.fontawesome.com/0b5fa10a1b.js"></script>
</head>

<body>
    <div class="container">
        <header class="row">
            <div class="col-md-12 col-lg-8">
                <h1 class="text-center text-uppercase m-4">
                    Mon amour pour les tigres<small class="text-muted">
                        et tous les félins</small>
                </h1>
            </div>

            <div class="col-md-12 col-lg-4 align-self-center mb-3">
                <form action="search" method="get" class="form-inline">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Je cherche..." />
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-info">
                                <span class="fa fa-search"></span>
                                Chercher
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container bg-grey pt-3 mb-3">
                <div id="content" class="row">
                    <div class="col mb-3"><img class="img-fluid rounded" src="../img/t1.jpg" alt="Tigre"></div>
                    <div class="col mb-3"><img class="img-fluid rounded" src="../img/t2.jpg" alt="Tigre"></div>
                    <div class="col mb-3"><img class="img-fluid rounded" src="../img/t3.jpg" alt="Tigre"></div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t4.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t5.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t6.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t7.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t8.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t9.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t10.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t11.jpg"
                            alt="Tigre">
                    </div>
                    <div class="col mb-3" style="display: none;"><img class="img-fluid rounded" src="../img/t12.jpg"
                            alt="Tigre">
                    </div>
                </div>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#" id="previous">&laquo;</a>
                            <?php
                for ($i=0; $i < 4; $i++) { 
                                            $actif =  (0 === $i)?'active':'';
                    ?>
                        <li class="page-item <?= $actif?>"><a class="page-link" href="#" id="<?=$i?>"><?=$i+1?></a></li>

                        <?php
                }
                ?>

                        <li class=" page-item"><a class="page-link" href="#" id="next">&raquo;</a>
                    </ul>
                    </ul>

                </nav>
            </div>

            <div class="col">
                <p>
                    Je suis passionné par les <strong>tigres</strong> depuis très
                    longtemps. Ce site a été construit en
                    <em>hommage à ces merveilleux félins...</em>
                </p>
                <p>
                    Je fais partie de la
                    <abbr title="Société des Amoureux des Tigres">SAT</abbr> qui a pour
                    but de faire connaître ces splendides animaux, ainsi que du
                    <abbr title="Centre de Recherche sur les Félins" class="initialism">CRF</abbr>.
                </p>
                <p class="lead text-right">
                    N'hésitez pas à soutenir la cause des tigres !
                </p>
                <blockquote class="blockquote text-right">
                    Le Tigre (Panthera tigris) est un mammifère carnivore de la famille
                    des félidés (Felidae) du genre Panthera. Aisément reconnaissable à
                    sa fourrure rousse rayée de noir, il est le plus grand félin sauvage
                    et l'un des plus grands carnivores du monde. L'espèce est divisée en
                    neuf sous-espèces possédant des différences mineures en termes de
                    taille ou de comportement. Superprédateur, il chasse principalement
                    les cerfs et les sangliers, bien qu'il puisse s'attaquer à des
                    proies de taille plus importante comme les buffles. Jusqu'au XIXe
                    siècle, le Tigre était réputé mangeur d'homme. La structure sociale
                    des tigres en fait un animal solitaire ; le mâle possède un
                    territoire qui englobe les domaines de plusieurs femelles et ne
                    participe pas à l'éducation des petits.
                    <footer class="blockquote-footer">
                        Texte recueilli dans <cite>Wikipedia</cite>
                    </footer>
                </blockquote>
            </div>
        </header>
        <section>
            <div class="row">
                <div class="col">
                    <h2 class="display-3 text-center bg-info py-4 mb-3 d-none d-md-block">
                        Quelques photos de tigres
                    </h2>
                </div>
            </div>
            <div class="row">
                <?php
                for ($i=1; $i < 13; $i++) { 
                    ?>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <img class="img-fluid rounded" src="../img/t<?=$i?>.jpg" alt="Tigre" />
                </div>
                <?php
                }
                ?>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p><strong>Sous-espèces des tigres :</strong></p>
                    <ul>
                        <li>Tigre de Sibérie</li>
                        <li>Tigre de Chine méridionale</li>
                        <li>Tigre de Bali</li>
                        <li>Tigre de d'Indochine</li>
                        <li>Tigre de Malaisie</li>
                        <li>Tigre de Java</li>
                        <li>Tigre de Sumatra</li>
                        <li>Tigre du Bengale</li>
                        <li>Tigre de la Caspienne</li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <img class="img-fluid rounded" src="../img/photo-tigre.jpg" alt="Tigre" />
                </div>
            </div>
        </section>
        <section class="row">
            <div class="col">
                <h2 class="display-4 text-center text-danger p-md-3">
                    Menaces pour les tigres
                </h2>
                <table class="table table-dark table-bordered table-sm">
                    <caption>
                        <h4>Les menaces pour les tigres</h4>
                    </caption>
                    <thead>
                        <tr>
                            <th>Lieu</th>
                            <th>Menace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Grand Mekong</td>
                            <td>
                                Demande croissante de certaines parties de l’animal pour la
                                médecine chinoise traditionnelle et fragmentation des habitats
                                du fait du développement non durable d’infrastructures
                            </td>
                        </tr>
                        <tr>
                            <td>Île de Sumatra</td>
                            <td>Production d’huile de palme et de pâtes à papiers</td>
                        </tr>
                        <tr>
                            <td>Indonésie et Malaisie</td>
                            <td>Pâte à papier, l’huile de palme et le caoutchouc</td>
                        </tr>
                        <tr>
                            <td>États-Unis</td>
                            <td>
                                Les tigres captifs représentent un danger pour les tigres
                                sauvages
                            </td>
                        </tr>
                        <tr>
                            <td>Europe</td>
                            <td>Gros appétit pour l’huile de palme</td>
                        </tr>
                        <tr>
                            <td>Népal</td>
                            <td>Commerce illégal de produits dérivés de tigres</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-100"></div>
            <blockquote class="col blockquote">
                Il est vital de préserver un espace adapté à sa survie. Malgré
                l'augmentation de la pollution, malgré l’extension des zones
                cultivées, malgré les incendies, malgré le trafic illégal à des fins
                purement commerciales, il est possible de protéger son habitat tout en
                soutenant les intérêts des populations locales.
                <footer class="blockquote-footer">
                    Texte recueilli dans <cite>Planète tigre</cite>
                </footer>
            </blockquote>
            <div class="w-100"></div>
            <p class="col text-justify">
                Nous avons lancé une grande opération de préservation des tigres et
                nous vous convions à participer à cette démarche essentielle à la
                survie de ces nobles animaux. Pour tout renseignements veuillez me
                contacter à l'adresse ci-dessous.
            </p>
        </section>
        <section class="row justify-content-center">
            <div class="col-md-8">
                <p class="lead font-weight-bold">
                    Si vous voulez me laisser un message
                </p>
                <form>
                    <p class="lead">Comment m'avez-vous trouvé ?</p>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input id="radio1" name="origine" type="radio" class="custom-control-input" value="ami"
                            checked />
                        <label class="custom-control-label" for="radio1">Par un ami</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input id="radio2" name="origine" type="radio" class="custom-control-input" value="web" />
                        <label class="custom-control-label" for="radio2">Sur le web</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input id="radio3" name="origine" type="radio" class="custom-control-input" value="hasard" />
                        <label class="custom-control-label" for="radio3">Par hasard</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input id="radio4" name="origine" type="radio" class="custom-control-input" value="autre" />
                        <label class="custom-control-label" for="radio4">Autre...</label>
                    </div>
                    <fieldset class="form-group">
                        <label for="textarea">Votre message :</label>
                        <textarea id="textarea" class="form-control" rows="4"></textarea>
                        <small class="form-text text-muted">Vous pouvez agrandir la fenêtre</small>
                    </fieldset>
                    <div class="text-right">
                        <button class="btn btn-outline-success btn-lg" type="submit">
                            <span class="fa fa-send-o"></span> Envoyer
                        </button>
                    </div>
                </form>
                <br />
            </div>
        </section>
    </div>

    <nav class="mb-4">
        <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <?php
                for ($i = 1; $i < 6; ++$i) {
                    ?>
            <li class="page-item"><a class="page-link" href="#"><?php echo $i; ?></a></li>
            <?php
                }
            ?>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </nav>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <script>
    var number_of_pages = 4;
    var show_per_page = 3;
    var current_page = 0;

    function set_display(first, last) {
        $('#content').children().css('display', 'none')
        $('#content').children().slice(first, last).css('display', 'inherit')
    }

    function previous() {
        if (current_page > 0) go_to_page(current_page - 1)
    }

    function next() {
        if (current_page < number_of_pages - 1) go_to_page(current_page + 1)
    }

    function go_to_page(page_num) {
        current_page = parseInt(page_num)
        start_from = current_page * show_per_page
        end_on = start_from + show_per_page
        set_display(start_from, end_on)
        $('.active').removeClass('active')
        $('#' + page_num).parent().addClass('active')
    }
    $(function() {
        $(document).on('click', 'a', function(e) {
            e.preventDefault()
            var id = $(this).attr('id')
            if (id == 'previous') previous()
            else if (id == 'next') next()
            else go_to_page(id)
        })
    })
    </script>


</body>

</html>