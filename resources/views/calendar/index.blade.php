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
            <p class="title">{{ date('F') }}</p>
            <table class="table is-fullwidth is-bordered is-hoverable">
                <thead>
                    <tr class="has-background-grey-light">
                        <th class="has-text-centered">Sunday</th>
                        <th class="has-text-centered">Monday</th>
                        <th class="has-text-centered">Tuesday</th>
                        <th class="has-text-centered">Wednesday</th>
                        <th class="has-text-centered">Thursday</th>
                        <th class="has-text-centered">Friday</th>
                        <th class="has-text-centered">Saturday</th>
                    </tr>
                </thead>
            
                <tbody>
                    <tr>
                        <td class="has-text-centered">{{ date('j', $week['sun']) }}</td>
                        <td class="has-text-centered">{{ date('j', $week['mon']) }}</td>
                        <td class="has-text-centered">{{ date('j', $week['tue']) }}</td>
                        <td class="has-text-centered">{{ date('j', $week['wed']) }}</td>
                        <td class="has-text-centered">{{ date('j', $week['thu']) }}</td>
                        <td class="has-text-centered">{{ date('j', $week['fri']) }}</td>
                        <td class="has-text-centered">{{ date('j', $week['sat']) }}</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- container -->
    </section><!-- section -->
</body>
</html>