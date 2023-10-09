<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="{{ mix('css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="logo">
        <img src="img/logo_extended.svg" alt="logo">
    </div>
    <h1>Log in</h1>
        <div class="signInContainer">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="email">email</label>
                <input type="text" id="email" name="email" required>

                <label for="password">password</label>
                <input type="password" id="password" name="password" required>

                <input class="btnSubmit" type="submit" value="Submit">
            </form>
            <div class="dividerContainer">
                <div class="dividerLine"></div>
                <div class="orText">or</div>
                <div class="dividerLine"></div>
            </div>
            <a href="signup.blade.php" class="btnSignUp">Sign up</a>
        </div>
</body>
</html>
