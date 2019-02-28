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
        <section id="app-1" class="section">
            <h1 class="title">
                Vue Basics
            </h1><!-- title -->

            <div class="field">
                <label class="label" for="">Basic Data Binding</label>
            
                <div class="control">
                    <input class="input" type="text" id="" value="" placeholder="Text input" v-model="message">
                </div><!-- control -->
            </div><!-- field -->

            <div class="subtitle">Here is the content: @{{ message }}</div>
        </section><!-- section -->
    </div><!-- container -->

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="./js/app.js"></script>
</body>
</html>
