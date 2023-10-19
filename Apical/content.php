<div class="contenuprincipal">
    <hr class="divider">
    <h1 id="titreh1" class="text-center"> Formation PUB020&nbsp;: WordPress, 2023
    </h1>
    <hr class="divider bas">

    <div class="contenu">
        <div id="chapitresformation" data-formation-id="36">


            <div class="boutonshaut">
                <div class="float-left">
                </div>
                <div class="float-right">
                    <a id="developperreduire" href="#" class="btn btn-secondary" role="button"
                       data-developper="Tout développer" data-reduire="Tout réduire">Tout développer</a>
                </div>
                <div class="push"></div>
            </div>
            <div id="dragchapitres">


                <?php 

                if (have_posts()) :
                    $compteurForm = 0;
                    while (have_posts()) : the_post();
                        $compteurForm = $compteurForm + 1;
                        ?>

                        <div class="card border-bottom-0" id="dragchapitre_<?php the_ID(); ?>">
                            <div class="card-header" id="chapitre-<?php echo sanitize_title(get_the_title()); ?>">
                                <a data-toggle="collapse" href="#<?php echo sanitize_title(get_the_title()); ?>">
                                    <span class="titrealigneboutons"><?php echo "$compteurForm. ";
                                        the_title(); ?></span>
                                </a>
                                <div class="float-right boutonsalignes"></div>
                            </div>
                            <div class="collapse" aria-expanded="false"
                                 id="<?php echo sanitize_title(get_the_title()); ?>">
                                <div class="card-body aucune-marge-haut-bas listefichesajax"
                                     id="fichesduchapitre-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>">
                                    <?php
                                    $comments = get_comments(array('post_id' => get_the_ID()));
                                    $compteurComment = 0;
                                    foreach ($comments as $comment) {
                                        $compteurComment = $compteurComment + 1;
                                        $tempsanitize_title = sanitize_title(get_the_title());
                                        $resanitizetemp_title = str_replace("-", "_", $tempsanitize_title);
                                        $temp_comment = get_comment_text($comment);
                                        $tempSanityse_comment = sanitize_title($temp_comment);
                                        $tempResanityse_comment = str_replace("-", "_", $tempSanityse_comment);
                                        echo '<div class="list-group list-group-flush">';
                                        echo "<div class='list-group-item'><a href='https://apical.xyz/fiches/" . $resanitizetemp_title . "/" . $tempResanityse_comment . "'>" . $compteurForm . "." . $compteurComment . ". " . $temp_comment . " </a></div></div>";


                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;
                endif;
                ?>
            </div>
