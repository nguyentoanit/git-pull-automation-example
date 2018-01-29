
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
                <div class="col-sm-4" style="text-align: center;"><a title="To pull latest source codes on Server " href="/migration/code" class="btn btn-primary">Migrate Code</a></div>
                <div class="col-sm-4" style="text-align: center;"><a title="To drop all tables from the database and then execute the migrate command" href="/migration/database-fresh" class="btn btn-info">Migrate Database Fresh</a></div>
                <div class="col-sm-4" style="text-align: center;"><a title="To run all of your outstanding migrations, execute the migrate Artisan command" href="/migration/database-migrate" class="btn btn-info">Migrate Database</a></div>
            </div>
        </div>
    </body>
</html>
