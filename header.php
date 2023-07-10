<!doctype html>
<html lang="en">

<head>
    <script src="/index.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skillinee is an interesting platform that will teach you in more an interactive way</title>
    <?php wp_head() ?>

</head>

<body class="m-0  p-0">
    <!--Header-->

    <!--Company-->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-sm">
                <a class="navbar-brand" type="button" href="#">
                    <div>
                        <p>Skilline</p>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <svg class="navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand align-middle " href="#">
                            <div>
                                <p>Skilline</p>
                            </div>
                        </a>
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>


                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            //as registered in function.php
                            'depth' => 3,
                            'container' => 'div',
                            //html wrapper of the menu ul
                            'container_class' => 'offcanvas-body',
                            'menu_class' => 'navbar-nav  justify-content-end flex-grow-1 pe-3 gap-5 link-underline-opacity-0',
                            'fallback_cb' => false

                        )
                    )
                        ?>
                </div>
            </div>

        </nav>
    </header>