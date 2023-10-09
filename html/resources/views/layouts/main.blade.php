<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/main.css">
    <title>@yield('title', 'escuchaste')</title>
</head>
<body>
<div class="container">
<div class="aside">
    <div class="welcome">
        <img src="public/img/testProfilePic.jpeg" alt="Profile Image">  {{-- {{ asset($profileImage) }} --}}
        <h1 class="welcomeUser">Hi, {{ $userName }}</h1>
        <a href="/logout" class="LogInSignUp">Log out</a>
        <div class="followersFollowing">
        <div class="column">
            <h3 class="followers">Followers</h3>
            <p>30</p> {{-- {{ $followersCount }} --}}
        </div>
        <div class="column">
            <h3>Following</h3>
            <p>28</p> {{-- {{ $followingCount }} --}}
        </div>
        </div>
    </div>

    <ul class="navbar">
        <li><a href="feed"><img src="img/icon_home_after.svg" alt="icon_home"><h2>Home</h2></a></li>
        <li><a href="saved"><img src="img/icon_saved.svg" alt="icon_saved"><h2>Saved</h2></a></li>
        <li><a href="setting"><img src="img/icon_settings.svg" alt="icon_settings"><h2>Settings</h2></a></li>
    </ul>
</div>
<div class="mainContainer">
    <div class="mainContainerTopNav">
        <span class="displayDescription"><h2>Explore all</h2></span> {{--{{ $pageTitle }}--}}
            <a href="snippet/create" class="btnNewPost">New post +</a>
    </div>
@yield ('content')
</div>
</body>
