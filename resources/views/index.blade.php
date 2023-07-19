<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>login</title>
</head>
<body class="bg-dark">
        <div class="bg-white">
                <form action="sesi/login" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row align-items-center w-50 p-2">
                      <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control mb-2" id="inlineFormInput" placeholder="Jane@blabla.com">
                      </div>
                      <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Password</label>
                        <input type="password" name="password" class="form-control mb-2" id="inlineFormInput" placeholder="Pass..">
                      </div>
                      <div class="col-auto">
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Sign In</button>
                      </div>
                    </div>
                  </form>
        </div>
</body>
</html>