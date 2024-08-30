
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
</head>
<body>
    <h1>wellcome {{Auth::user()->name}}</h1>

    <button>inner</button>
    <button><a href="{{ route ('user.logout')}}">logout</a></button>

</body>
</html>
