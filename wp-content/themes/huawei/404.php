<?php get_header() ?>

    <div class="main">

        <div class="w-flex error">
            <div class="container">
                <h1 class="h1 error__title">Oupss, la page recherchée n'existe pas !</h1>
                <div class="row">
                    <div class="error__column">
                        <h3 class="h3"">Causes les plus probables</h2>
                        <div class="wysiwyg">
                            <ul>
                                <li>Il y a une erreur de frappe dans l'url</li>
                                <li>Si vous avez cliqué sur un lien, il n'est peut-être plus à jour</li>
                                <li>Vous n'avez peut-être pas les droits nécessaires pour accéder à cette page</li>
                            </ul>
                        </div>
                    </div>

                    <div class="error__column">
                        <h3 class="h3"">Ce que vous pouvez essayer</h2>
                        <div class="wysiwyg">
                            <ul>
                                <li>Retourner à la <a href="<?php bloginfo('url') ?>">page d'accueil</a></li>
                                <li><a href="mailto:watch@huawei.com"><span class="link">Nous contacter</span></a> si vous
                                    pensez qu'il s'agit d'une erreur
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

<?php get_footer() ?>