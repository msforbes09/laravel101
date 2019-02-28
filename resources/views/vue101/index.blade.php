<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Vue!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <div class="container">
        <div class="section">
            <h1 class="title">Vue Basics</h1><!-- title -->
        </div>

        @include ('vue101.lesson.component-modal')

        @include ('vue101.lesson.component-message')

        @include ('vue101.lesson.computed')

        @include ('vue101.lesson.attribute-class-binding')
        
        @include ('vue101.lesson.lists')

        @include ('vue101.lesson.data-binding')
    </div><!-- container -->

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="./js/app.js"></script>
</body>
</html>
