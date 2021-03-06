<!-- Header -->
<header>
    <div class="container">
        <div class="slider-container">
            <div class="intro-text">
                <div class="intro-lead-in">Aprenda também fora da sala de aula!</div>
                <div class="intro-heading">Espaço do Aluno</div>
                <a href="<?php echo base_url(); ?>#course" class="page-scroll btn btn-xl">Conheça nossas novidades</a> !
            </div>
        </div>
    </div>
</header>

<section id="about" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>SOBRE</h2>
                    <p></p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

<section class="overlay-dark bg-img1 dark-bg short-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-offset-2 col-md-2 mb-sm-30">
                <div class="counter-item">
                    <a class="page-scroll" href="#course">
                        <h6>Curso</h6>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-sm-30">
                <div class="counter-item">
                    <a class="page-scroll" href="#feeling">
                        <h6>Sentimentos</h6>
                    </a>
                </div>
            </div>
            <div class="col-md-2 mb-sm-30">
                <div class="counter-item">
                    <a class="page-scroll" href="#team">
                        <h6>Equipe</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="course" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Cursos</h2>
                    <p>Conheça nossa lista de cursos.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            if (!empty($courses)) {
                foreach ($courses as $course) {
                    ?>
                    <div class="col-md-4">
                        <div class="ot-portfolio-item">
                            <figure class="effect-bubba">
                                <img src="<?= base_url() . $course["course_img"] ?>" alt="img02" class="img-responsive center-block"/>
                                <figcaption>
                                    <a href="#" data-toggle="modal" data-target="#course_<?= $course["course_id"] ?>"></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="modal fade" id="course_<?= $course["course_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="X"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="Modal-label-1"><?= $course["course_name"] ?></h4>
                                </div>

                                <div class="modal-body">
                                    <img src="<?= base_url() . $course["course_img"] ?>" alt="img01" class="img-responsive center-block" />
                                    <p><?= $course["course_description"] ?></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } // FOREACH
            } // IF 
            ?>
        </div>
    </div><!-- end container -->
</section>

<section id="feeling" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Sentimentos</h2>
                    <p>Conheça nossa lista.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            if (!empty($feelings)) {
                foreach ($feelings as $feeling) {
                    ?>
                    <div class="col-md-4">
                        <div class="ot-portfolio-item">
                            <figure class="effect-bubba">
                                <img src="<?= base_url() . $feeling["feeling_img"] ?>" alt="img02" class="img-responsive center-block"/>
                                <figcaption>
                                    <a href="#" data-toggle="modal" data-target="#feeling_<?= $feeling["feeling_id"] ?>"></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="modal fade" id="feeling_<?= $feeling["feeling_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="X"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="Modal-label-1"><?= $feeling["feeling_name"] ?></h4>
                                </div>

                                <div class="modal-body">
                                    <img src="<?= base_url() . $feeling["feeling_img"] ?>" alt="img01" class="img-responsive center-block" />
                                    <p><?= $feeling["feeling_description"] ?></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } // FOREACH
            } // IF 
            ?>
        </div>
    </div><!-- end container -->
</section>

<section id="team" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Nossa equipe</h2>
                    <p>Conheça nossa equipe.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (!empty($team)) {
                foreach ($team as $member) {
                    ?>

                    <div class="col-md-3">
                        <a href="#" data-toggle="modal" data-target="#member_<?= $member["member_id"] ?>">
                            <div class="team-item">
                                <div class="team-image">
                                    <img src="<?= base_url() . $member["member_photo"] ?>" class="img-responsive img-circle" alt="author">
                                </div>
                                <div class="team-text">
                                    <h3><?= $member["member_name"] ?></h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="modal fade" id="member_<?= $member["member_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="Modal-label-1"><?= $member["member_name"] ?></h4>
                                </div>

                                <div class="modal-body">
                                    <img src="<?= base_url() . $member["member_photo"] ?>" alt="img01" class="img-responsive center-block" />
                                    <p><?= $member["member_description"] ?></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } // FOREACH
            } // IF 
            ?>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Contato</h2>
                    <p>Entre em contato conosco por aqui.<br>Tentaremos responder o mais rápido possível</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <form name="sentMessage" id="contactForm" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu nome *" id="name" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Seu email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Sua mensagem *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>