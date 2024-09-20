<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="finalLogo.png" type="image/png" sizes="16x16">
    <title>Players</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('players.css') }}"> <!-- New CSS file for the container -->
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
        <button class="btn" onclick="window.location.href='{{ route('bulletins') }}'">Bulletins</button>
        <button class="btn" onclick="window.location.href='{{ route('tutorials') }}'">Tutorials</button>
        <button class="btn" onclick="window.location.href='{{ route('challenges') }}'">Challenges</button>
        <button class="btn challenge-btn active">Players</button>
    </div>

    <div class="half-line">
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
            <button class="btn" onclick="window.location.href='{{ route('gradebook') }}'">Gradebook</button>
        </div>
    </div>

    <div class="profile-container">
        <img src="ainz.jpg" alt="Profile Picture" class="profile-pic">
        <div class="profile-details">
            <div class="profile-name">John Irvin Panganiban</div>
        </div>
        <div class="profile-role">Adviser</div>
    </div>

    <!-- Add Button -->
    <button class="add-button" onclick="openModal()">Add</button>

    <!-- Modal -->
    <div id="addMemberModal" class="modal">
        <div class="modal-content">
            <h2>Add Member</h2>
            <input type="text" id="gbox-account" placeholder="Enter GBox account" class="input-field">

            <div class="modal-buttons">
                <button class="add-button-modal">Add</button>
                <button class="cancel-button" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="header1">
            <div class="label-left">Members</div>
            <div class="rank-label">Rank</div>
        </div>

        <!-- Repeatable member containers -->
        <div class="member-container">
            <img src="ainz.jpg" alt="Profile Picture" class="profile-pic">
            <div class="member-details">
                <div class="member-name">John Raphael Peoro</div>
            </div>
            <div class="rank-section">
                <img src="bronze.png" alt="Rank Picture" class="rank-pic">
            </div>
        </div>

        <div class="member-container">
            <img src="ainz.jpg" alt="Profile Picture" class="profile-pic">
            <div class="member-details">
                <div class="member-name">John Ignacious Albano</div>
            </div>
            <div class="rank-section">
                <img src="bronze.png" alt="Rank Picture" class="rank-pic">
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal functionality -->
    <script>
         // Scroll Up Function
        function scrollUp() {
            document.getElementById("scrollableModalContent").scrollBy(0, -50);
        }

        // Scroll Down Function
        function scrollDown() {
            document.getElementById("scrollableModalContent").scrollBy(0, 50);
        }

        // Function to open modal
        function openModal() {
            document.getElementById("addMemberModal").style.display = "block";
        }

        // Function to close modal
        function closeModal() {
            document.getElementById("addMemberModal").style.display = "none";
        }
    </script>

</body>
</html>
