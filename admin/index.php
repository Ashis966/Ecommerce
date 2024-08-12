<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="indexBody">

    <div class="d-flex justify-content-center align-items-center loginPanel">
        <div class="card align-items-center gap-3 loginBody">
            <img src="image/logo.png" class="card-img-top" alt="">
            <div class="signin text-center">Sign In</div>
            <div class="card-body btnBody">
                <form action="action/account.php" method="POST" class="d-grid gap-3">
                    <input type="text" placeholder="Username/email id" class="namePassword ps-3" name="email">
                    <input type="password" placeholder="password" class="namePassword ps-3" name="password">
                    <div class="Remember">
                        <input type="checkbox" id="rememberMe" name="" value="Bike">
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <div class="login d-flex justify-content-center loginBtn">
                        <button type="submit" name="submit" value="login" class="btn btn-primary">Log In</button>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="account"><a href="#"><i class="fa-solid fa-lock me-2"></i> <span>Forgot your password?</span></a></div>
                        <div class="account"><a href="#">Create an account</a></div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/221cbd1801.js" crossorigin="anonymous"></script>

</html>