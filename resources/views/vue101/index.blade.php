<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
    <div class="container">
        @include ('vue101.lesson.data-binding')

        @include ('vue101.lesson.lists')
        
        @include ('vue101.lesson.attribute-class-binding')
    </div><!-- container -->

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="./js/app.js"></script>
</body>
</html>
