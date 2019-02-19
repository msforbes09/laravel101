<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Controller</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body class="has-navbar-fixed-top">

<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarContent">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a><!-- burger -->
    </div><!-- navbar-brand -->

    <div id="navbarContent" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="#">Home</a>

            <a class="navbar-item" href="#">Documentation</a>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link">More</span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="#">About</a>

                    <a class="navbar-item" href="#">Jobs</a>

                    <a class="navbar-item" href="#">Contact</a>

                    <hr class="navbar-divider">
                    
                    <a class="navbar-item" href="#">Report an issue</a>
                </div><!-- dropdown -->
            </div><!-- has-dropdown -->
        </div><!-- navbar-start -->

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>Sign up</strong>
                    </a>
                    
                    <a class="button is-light">
                        Log in
                    </a>
                </div><!-- buttons -->
            </div><!-- navbar-item -->
        </div><!-- navbar-end -->
    </div><!-- navbar-menu -->
</nav><!-- navbar -->

</body>
</html>