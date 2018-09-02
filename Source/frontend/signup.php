<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bg.css">

    <title>Login</title>
</head>

<body>
    <div class="img-bg-sig">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand text-white" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <div class="container mt-5">
            <div class="col-md-6 offset-md-3 bg-white rounded p-5 mt-5">
                <form method="POST" action="../backend/signup.php" id="identicalForm" class="form-horizontal" data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                    data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" data-bv-identical="true"
                            data-bv-identical-field="confirmPassword" data-bv-identical-message="The password and its confirm are not the same" />
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm your Password</label>
                        <input type="password" class="form-control" name="confirmPassword" data-bv-identical="true"
                            data-bv-identical-field="password" data-bv-identical-message="The password and its confirm are not the same" />
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>