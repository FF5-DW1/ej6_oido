<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
    <div class="logo">
        <img src="img/logo_extended.svg" alt="logo">
    </div>
    <h1>Create new account</h1>
        <div class="signInContainer">
            <form  name="form" action="{{ route('signup') }}" method="post">
                @csrf
                <label for="name">name</label>
                <input type="text" id="name" name="name" value ="{{ old('name', '') }}" >

                <label for="surname">surname</label>
                <input type="text" id="fname" name="fname" value ="{{ old('surname', '') }}">

                <label for="username">username</label>
                <input type="text" id="username" name="username">

                <label for="email">email</label>
                <input type="text" id="email" name="email">

                <label for="email">email confirmation</label>
                <input type="text" id="emailconf" name="emailconf">

                <label for="password">password</label>
                <input type="password" id="password" name="password">

                <label for="password">password confirmation</label>
                <input type="password" id="passwordconf" name="passwordconf">

                <input class="btnSubmit" type="submit" value="Sign up">
            </form>
        </div>
        <script src="./js/validateSignup.js"></script>
</body>
</html>
