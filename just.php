<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="science.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Science Quiz</title>
    <style>

        * {
            margin:0;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #ba89e4;
            padding: 10px 20px;
            margin: 0;
            display:flex;
        }

        .navbar a {
            color: white; 
            text-decoration: none;
        }

        h1 {
            text-align: center;
        }

        .question {
            margin-bottom: 20px;
        }

        .question input {
            margin-right: 10px;
        }

        .button {
            background-color: #9f63d4;
            border-color: aliceblue;
            color: white;
            width: 170px;
            height: 40px;
            border-radius: 25px;
            margin: 10px;
        }

        .submit-button {
            margin-left: 30%;
            margin-right: 7%;
        }

        .back-arrow {
            display: flex; 
            justify-content: space-between;   
            justify-content: center; 
            align-items: center;   
            height: 100px;          
            width: 50px;
            height: 50px;
            border-radius:50%;
            border: 1px solid #ddd;
            margin-left:85%;
        }

        .back-arrow:hover {
            background-color: white;
        }

        .back-arrow a:hover {
            color:black;
        }

        .back-arrow li {
            list-style-type: none; 
            margin: 0;             
            padding: 0;            
        }

        .container-fluid {
            margin-top:20px;
            margin-bottom:20px;
        }
        
        .back-arrow a {
            text-decoration: none; 
            /* color: inherit;        */
            color:white;
        }

        .fa-arrow-left {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa fa-camera-retro fa-lg"></i>
                <!-- <i class="fa fa-user-o fa-lg" aria-hidden="true"></i> -->
                <?php
                    if (isset($_SESSION["userName"])) {
                        echo $_SESSION["userName"];
                    } else {
                        echo "User Name";
                    }
                ?>
            </a>
        </div>
        <div class="back-arrow">
            <li>
                <a href="../welcome.php">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </li>
        </div>
    </nav>

    <h1>Science Quiz</h1>
    <h2 id="result" style="color:red;text-align: center"></h2>
    <form>
        <ol>
            <li class="question">
                <strong>What is the chemical symbol for water?</strong><br>
                <input type="radio" name="q1" value="A"> A) H<sub>2</sub>O<br>
                <input type="radio" name="q1" value="B"> B) CO<sub>2</sub><br>
                <input type="radio" name="q1" value="C"> C) O<sub>2</sub> <br>
                <input type="radio" name="q1" value="D"> D) NaCl<br>
            </li>
            <li class="question">
                <strong>Which planet is known as the Red Planet?</strong><br>
                <input type="radio" name="q2" value="A"> A) Venus<br>
                <input type="radio" name="q2" value="B"> B) Mars<br>
                <input type="radio" name="q2" value="C"> C) Jupiter<br>
                <input type="radio" name="q2" value="D"> D) Saturn<br>
            </li>
            <li class="question">
                <strong>What force keeps us on the ground?</strong><br>
                <input type="radio" name="q3" value="A"> A) Magnetism<br>
                <input type="radio" name="q3" value="B"> B) Friction<br>
                <input type="radio" name="q3" value="C"> C) Gravity<br>
                <input type="radio" name="q3" value="D"> D) Electromagnetism<br>
            </li>
            <li class="question">
                <strong>What is the basic unit of life?</strong><br>
                <input type="radio" name="q4" value="A"> A) Atom<br>
                <input type="radio" name="q4" value="B"> B) Cell<br>
                <input type="radio" name="q4" value="C"> C) Molecule<br>
                <input type="radio" name="q4" value="D"> D) Tissue<br>
            </li>
            <li class="question">
                <strong>Which gas do plants primarily use for photosynthesis?</strong><br>
                <input type="radio" name="q5" value="A"> A) Oxygen<br>
                <input type="radio" name="q5" value="B"> B) Nitrogen<br>
                <input type="radio" name="q5" value="C"> C) Carbon Dioxide<br>
                <input type="radio" name="q5" value="D"> D) Hydrogen<br>
            </li>
            <li class="question">
                <strong>What is the powerhouse of the cell?</strong><br>
                <input type="radio" name="q6" value="A"> A) Nucleus<br>
                <input type="radio" name="q6" value="B"> B) Ribosome<br>
                <input type="radio" name="q6" value="C"> C) Mitochondria<br>
                <input type="radio" name="q6" value="D"> D) Endoplasmic Reticulum<br>
            </li>
            <li class="question">
                <strong>What element does hemoglobin contain that is essential for transporting oxygen in the blood?</strong><br>
                <input type="radio" name="q7" value="A"> A) Calcium<br>
                <input type="radio" name="q7" value="B"> B) Iron<br>
                <input type="radio" name="q7" value="C"> C) Potassium<br>
                <input type="radio" name="q7" value="D"> D) Magnesium<br>
            </li>
            <li class="question">
                <strong>Which planet is known for its rings?</strong><br>
                <input type="radio" name="q8" value="A"> A) Earth<br>
                <input type="radio" name="q8" value="B"> B) Neptune<br>
                <input type="radio" name="q8" value="C"> C) Saturn<br>
                <input type="radio" name="q8" value="D"> D) Uranus<br>
            </li>
            <li class="question">
                <strong>What is the most abundant gas in Earth’s atmosphere?</strong><br>
                <input type="radio" name="q9" value="A"> A) Oxygen<br>
                <input type="radio" name="q9" value="B"> B) Carbon Dioxide<br>
                <input type="radio" name="q9" value="C"> C) Argon<br>
                <input type="radio" name="q9" value="D"> D) Nitrogen<br>
            </li>
            <li class="question">
                <strong>In which part of the cell does cellular respiration occur?</strong><br>
                <input type="radio" name="q10" value="A"> A) Nucleus<br>
                <input type="radio" name="q10" value="B"> B) Cytoplasm<br>
                <input type="radio" name="q10" value="C"> C) Mitochondria<br>
                <input type="radio" name="q10" value="D"> D) Golgi Apparatus<br>
            </li>
        </ol>

        <button 
            type="submit" 
            class="button submit-button"
        >
            Submit
        </button>
        <button 
            type="reset" 
            id="tryAgainButton"
            class="button"
        >
            Try again
        </button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const correctAnswers = ['A', 'B', 'C', 'B', 'C', 'C', 'B', 'C', 'D', 'C'];

            const form = document.querySelector('form');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                let correctCount = 0;

                for (let i = 0; i < correctAnswers.length; i++) {
                    const questionNum = i + 1;
                    const selectedAnswer = document.querySelector(`input[name=q${questionNum}]:checked`);

                    if (selectedAnswer) {
                        const selectedValue = selectedAnswer.value.toUpperCase();
                        if (selectedValue === correctAnswers[i]) {
                            correctCount++;
                            selectedAnswer.parentElement.style.color = 'green'; // Highlight correct answers
                        } else {
                            selectedAnswer.parentElement.style.color = 'red'; // Highlight incorrect answers
                        }
                    }
                }

                // Disable all radio buttons after submit
                const allRadioButtons = document.querySelectorAll('input[type=radio]');
                allRadioButtons.forEach(radio => {
                    radio.disabled = true;
                });

                Swal.fire(`You got ${correctCount} out of ${correctAnswers.length} correct!`);
            });

            // Add event listener for Try again button
            const tryAgainButton = document.getElementById('tryAgainButton');
            tryAgainButton.addEventListener('click', function () {
                location.reload();
            });
        });
    </script>
</body>
</html>
