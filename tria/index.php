<?php wp_head(); ?>
<?php get_header(); ?>

<body>
    <nav>
        <div class="gauche"></div>
        <div class="bande">
            <h1>Commité departemental de Triathlon (Haute-Saone)</h1>
            <button class="menu-burger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <ul class="menu">
                <li>
                    <a href="">Accueil </a>
                </li>
                <li>
                    <a href="">Actualités</a>
                </li>
                <li>
                    <a href="">Stages</a>
                </li>
                <li>
                    <a href="">Challenges</a>
                </li>
                <li>
                    <a href="">Class-tri</a>
                </li>
                <li>
                    <a href="">Matériels</a>
                </li>
                <li>
                    <a href="">Contact
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="">Club Vesoul</a>
                        </li>
                        <li>
                            <a href="">Club Gray</a>
                        </li>
                        <li>
                            <a href="">Club Lure</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    <div class="menu_tel"></div>

    <header>
        <div class="container-fluid">
            <div class="container justify-content-center tabnav">
                <div class="container nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link natation" id="nav-natation-tab" data-toggle="tab" href="#nav-natation" role="tab" aria-controls="nav-natation"
                        aria-selected="falseS">
                        <div style="background-image:url('');"></div>
                        <p>Natation</p>
                    </a>
                    <a class="nav-item nav-link velo" id="nav-velo-tab" data-toggle="tab" href="#nav-velo" role="tab" aria-controls="nav-velo"
                        aria-selected="false">
                        <div style="background-image:url('');"></div>
                        <p>Vélo</p>
                    </a>
                    <a class="nav-item nav-link course" id="nav-course-tab" data-background="" data-toggle="tab" href="#nav-course" role="tab"
                        aria-controls="nav-course" aria-selected="false">
                        <div style="background-image:url('');"></div>
                        <p>Course à pied</p>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="container tab-container">
        <div class="tab-content" id="nav-tabContent">

            <?php $loop = new WP_Query( array( 'post_type' => 'activite', 'posts_per_page' => 3, 'paged' => $paged) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="tab-pane fade" data-back="<?php the_field('image_de_fond') ?>" data-background="<?php the_field('image_de__bouton') ?>"
                id="<?php the_field('id') ?>" role="tabpanel" aria-labelledby="<?php the_field('tab_lab') ?>">
                <h1 class="titre">
                    <?php the_field('titre_de_lactivite') ?>
                </h1>
                <p class="paragraphe">
                    <?php the_field('texte_de_lactivite') ?>
                </p>
            </div>
            <?php endwhile ; ?>
        </div>
    </section>
    <section class="container president">
        <div class="row">
            <div class="col-lg-4 col-md-5 photo-president" style="background-image: url('');"></div>
            <!-- Si l'Article est dans la Catégorie que nous souhaitons exclure, nous passons à l'Article suivant. -->
            <?php $loop = new WP_Query( array( 'post_type' => 'president', 'posts_per_page' => 1, 'paged' => $paged) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-lg-8 col-md-7">
                <h2 class="text-center col-md-12">Mot du president</h2>
                <p class="text-center col-md-12">
                    <?php the_field('titre_president') ?>
                </p>
                <p class="col-lg-12 text-justify">
                    <?php the_field('texte_president') ?>
                </p>
            </div>
            <?php endwhile ; ?>
        </div>
    </section>
    <section class="container last_news">
        <div class="titre row">
            <div class="gauche col-lg-4 col-md-4 hidden-xs"></div>
            <div class="new col-lg-4 col-md-4 text-center">Dernières actualités</div>
            <div class="droite col-lg-4 col-md-4 hidden-xs"></div>
        </div>
        <div class="container">
            <div class="row">
                <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) ); ?>
                <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class=" cards col-lg-4 col-md-12 col-xs-12" style="width: 20rem;">
                    <div class="card-img-top" style=" background-image: url('<?php the_field("image_article") ?>'); ?>"></div>
                    <div class="card-block">
                        <h4 class="card-title col-lg-12 text-center">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h4>
                        <p class="card-text text-center">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); else: ?>
                <p>Désoler nous n'avons pas trouvé d'article..</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="partenaire container-fluid">
        <div class="row owl-carousel">
            <?php $loop = new WP_Query( array( 'post_type' => 'partenaire', 'posts_per_page' => 100, 'paged' => $paged) ); ?>

            <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <img class="img-fluid" src="<?php the_field('logo_partenaire') ?>" alt="Logo des partenaires" width="200" height="149">
            <?php endwhile ;else: ?>
            <p>Pas de partenaire</p>
<?php endif; ?>
        </div>

    </section>
    <section class="club container-fluid">
        <div class="container">
            <?php $loop = new WP_Query( array( 'post_type' => 'club', 'posts_per_page' => 3, 'paged' => $paged) ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="club-item col-xs-12 col-md-4 col-lg-4">
                <div class="card-img-top" style="background-image:url('<?php the_field('image_club') ?>');">
                    <h4>club de
                        <?php the_field('nom_du_club') ?>
                    </h4>
                </div>
                <div class="card-block col-lg-12">
                    <a href="<?php the_field('lien_du_club') ?>" class="text-center">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <?php endwhile ; ?>
        </div>
    </section>
    <?php get_footer() ?>

</body>

</html>