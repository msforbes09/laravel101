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
    <section class="section">
        <div class="container">
            <p class="title">{{ "$month->name $month->year"}}</p>
            
            <div class="columns">
                <div class="column is-paddingless">
                    <div class="box is-radiusless">Monday</div>
                </div><!-- column -->

                <div class="column is-paddingless">
                    <div class="box is-radiusless">Tuesday</div>
                </div><!-- column -->

                <div class="column is-paddingless">
                    <div class="box is-radiusless">Wednesday</div>
                </div><!-- column -->

                <div class="column is-paddingless">
                    <div class="box is-radiusless">Thursday</div>
                </div><!-- column -->

                <div class="column is-paddingless">
                    <div class="box is-radiusless">Friday</div>
                </div><!-- column -->

                <div class="column is-paddingless">
                    <div class="box is-radiusless">Saturday</div>
                </div><!-- column -->

                <div class="column is-paddingless">
                    <div class="box is-radiusless">Sunday</div>
                </div><!-- column -->
            </div><!-- columns -->

            @foreach ( $month->weeks as $week )
                <div class="columns">
                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('mon') }}</div>
                    </div><!-- column -->

                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('tue') }}</div>
                    </div><!-- column -->

                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('wed') }}</div>
                    </div><!-- column -->

                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('thu') }}</div>
                    </div><!-- column -->

                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('fri') }}</div>
                    </div><!-- column -->

                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('sat') }}</div>
                    </div><!-- column -->

                    <div class="column is-paddingless">
                        <div class="box is-radiusless">{{ $week->getDay('sun') }}</div>
                    </div><!-- column -->
                </div><!-- columns -->
            @endforeach
        </div><!-- container -->
    </section><!-- section -->
</body>
</html>