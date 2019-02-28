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
    <nav class="navbar is-fixed-top is-light" id="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" :class="{ 'is-active': active }" @click="alert" aria-label="menu" aria-expanded="false" data-target="navbarContent">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a><!-- burger -->
        </div><!-- navbar-brand -->

        <div id="navbarContent" class="navbar-menu" :class="{ 'is-active': active }">
            <div class="navbar-end">
                <a class="navbar-item" href="#">Home</a>

                <a class="navbar-item" href="#">Documentation</a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <span class="navbar-link">More</span>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="#">About</a>

                        <a class="navbar-item" href="#">Jobs</a>

                        <a class="navbar-item" href="#">Contact</a>

                        <hr class="navbar-divider">
                        
                        <a class="navbar-item" href="#">Report an issue</a>
                    </div><!-- dropdown -->
                </div><!-- has-dropdown -->
            </div><!-- navbar-start -->
        </div><!-- navbar-menu -->
    </nav><!-- navbar -->

    @yield ('content')

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>