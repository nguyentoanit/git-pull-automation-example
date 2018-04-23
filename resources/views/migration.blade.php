
<html>
    <head>
        <title>Migration page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="alert alert-info">
                  <strong>Info:</strong>
                  <pre>{{ $output }}</pre>
            </div>
            <div class="row">
            <form action="/migration/branch">
                <div class="form-group">
                    <label>Branch:</label>
                    <select name="branch">
                        @foreach ($branches as $branch)
                            @if ($branch[0]=='*')
                                <option value="{{trim(substr($branch,1))}}" selected>{{trim(substr($branch,1))}}</option>
                            @else
                                <option value="{{trim($branch)}}">{{trim($branch)}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3" style="text-align: center;"><button class="btn btn-warning">Change Git branch</button></div>
                <div class="col-sm-3" style="text-align: center;"><a title="To pull latest source codes on Server " href="/migration/code" class="btn btn-primary">Migrate Code</a></div>
                <div class="col-sm-3" style="text-align: center;"><a title="To drop all tables from the database and then execute the migrate command" href="/migration/database-fresh" class="btn btn-info">Migrate Database Fresh</a></div>
                <div class="col-sm-3" style="text-align: center;"><a title="To run all of your outstanding migrations, execute the migrate Artisan command" href="/migration/database-migrate" class="btn btn-info">Migrate Database</a></div>
            </div>
        </div>
    </body>
</html>
