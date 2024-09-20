<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="finalLogo.png" type="image/png" sizes="16x16">
    <title>Grade</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('grade-quiz.css') }}"> <!-- New CSS file for the container -->
</head>
<body>

    <div class="navbar">
        <div class="left-section">
            <img class="logo-img" src="{{ asset('finalLogo.png') }}" alt="GGclass Logo">
            <h1 class="ggclass-font">GGclass ></h1>
            <h2 class="section-font">Section</h2>
        </div>

        <div class="back-container">
            <button class="back-button" onclick="goBack()">Back</button>
        </div>
        
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

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

    <div class="grade" style="position: fixed">Grade > Quiz 1</div>

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
            <button class="btn challenge-btn active">Grade</button>
            <button class="btn" onclick="window.location.href='{{ route('feedback') }}'">Feedback</button>
            <button class="btn" onclick="window.location.href='{{ route('gradebook') }}'">Gradebook</button>
        </div>
    </div>


    <div class="main-container">
        <div class="student-container">
            <div class="student">
                <p class="student-name">John Ignacious Albano</p>
                <p class="student-score">19/20</p>
                <button class="edit-btn" onclick="editScore(this)">Edit</button>
            </div>
            <div class="student">
                <p class="student-name">John Raphael Peoro</p>
                <p class="student-score">18/20</p>
                <button class="edit-btn" onclick="editScore(this)">Edit</button>
            </div>
            <!-- Add more student containers as needed -->
            
        </div>

        <!-- Edit modal -->
        <div id="edit-modal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <h2>Edit Score</h2>
                <input type="text" id="new-score" placeholder="Enter new score">
                <button class="save-btn" onclick="saveScore()">Save</button>
            </div>
        </div>
    </div>


    <script>
        let currentScoreElement;

            function editScore(button) {
            // Get the score element
            const scoreElement = button.previousElementSibling;
            currentScoreElement = scoreElement;
            
            // Show modal
            document.getElementById('edit-modal').style.display = 'block';
            }

            function closeModal() {
            document.getElementById('edit-modal').style.display = 'none';
            }

            function saveScore() {
            const newScore = document.getElementById('new-score').value;
            
            // Update the score
            if (newScore) {
                currentScoreElement.textContent = newScore;
            }
            
            // Close modal
            closeModal();
            }

    </script>

</body>
</html>