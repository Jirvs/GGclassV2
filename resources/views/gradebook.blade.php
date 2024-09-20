<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance</title>
    <link rel="icon" href="finalLogo.png" type="image/png" sizes="16x16">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('gradebook.css') }}"> <!-- New CSS file for the container -->
</head>
<body>

    <div class="navbar">
        <div class="left-section">
            <img class="logo-img" src="{{ asset('finalLogo.png') }}" alt="GGclass Logo">
            <h1 class="ggclass-font">GGclass ></h1>
            <h2 class="section-font">Section</h2>
        </div>

        <div class="right-section">
            <img class="profile-img" src="{{ asset('ainz.jpg') }}" alt="Create">
        </div>
    </div>

    <div class="top-buttons" style="position: fixed">
        <button class="btn"onclick="window.location.href='{{ route('bulletins') }}'">Bulletins</button>
        <button class="btn"onclick="window.location.href='{{ route('tutorials') }}'">Tutorials</button>
        <button class="btn"onclick="window.location.href='{{ route('challenges') }}'">Challenges</button>
        <button class="btn"onclick="window.location.href='{{ route('players') }}'">Players</button>
    </div>

    <div class="half-line">
        <hr>
    </div>

    <div class="attendance" style="position: fixed">Gradebook</div>

    <div class="create-quiz" style="position: fixed">
        <button type="submit" class="btn create-btn" id="createQuizButton">Export</button>
    </div>

    <div class="half-line2">
        <hr>
    </div>

    <div class="info-container">
        <img src="{{ asset('ainz.jpg') }}" alt="Picture" class="container-picture">
        <div class="container-name">Jirvs</div>
        <hr>
        <div class="container-info-section">
            <p>Section</p>
        </div>
        <div class="container-info-name">
            <p>John Irvin Panganiban</p>
        </div>
        <div class="container-info-email">
            <p>jipanganiban@gbox.adnu.edu.ph</p>
        </div>
        <hr>
        <div class="container-buttons">
            <button class="btn" onclick="window.location.href='{{ route('attendance') }}'">Attendance</button>
            <button class="btn" onclick="window.location.href='{{ route('grade') }}'">Grade</button>
            <button class="btn" onclick="window.location.href='{{ route('feedback') }}'">Feedback</button>
            <button class="btn challenge-btn active">Gradebook</button>
        </div>
    </div>

    <div class="container1">
        <button class="box1" onclick="window.location.href='{{ route('data') }}'">DATA</button>
        <button class="box2" onclick="window.location.href='{{ route('class-record') }}'">CLASS RECORD</button>
        <button class="box3" onclick="window.location.href='{{ route('summary') }}'">SUMMARY</button>
    </div>
</body>
</html>