<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="container">
    <form action="" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">English - Vietnamese Dictionary</label>
            <input name="words" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <button class="btn btn-danger" type="submit" >Translate
        </button>
    </form>
</body>

</html>