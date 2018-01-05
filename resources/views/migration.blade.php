
<html>
    <head>
        <title>Migration page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="alert alert-info">
                  <strong>Info:</strong>
                  <pre>{{ $output }}</pre>
            </div>
            <div class="row">
                <div class="col-sm-6" style="text-align: center;"><a href="/migration/code" class="btn btn-primary">Migrate code</a></div>
                <div class="col-sm-6" style="text-align: center;"><a href="/migration/database" class="btn btn-info">Migrate database</a></div>
            </div>
        </div>
    </body>
</html>
