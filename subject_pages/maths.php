<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maths.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Maths Quiz</title>

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

        .container-fluid {
            margin-top:20px;
            margin-bottom:20px;
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

        .back-arrow a {
            text-decoration: none; 
            color:white;
        }

        .fa-arrow-left {
            font-size: 24px;
        }

        .swal2-confirm {
            background-color: #ba89e4 !important; 
            border-color: #ba89e4 !important;
        }

        .swal2-confirm:hover {
            background-color: #a470d3 !important; 
        }

        .swal2-popup {
            border-radius: 20px !important;
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

    <h1>Maths Quiz</h1>
    <h2 id="result" style="color:red;text-align: center"></h2>
    <form>
    <ol>
            <li>
                <strong>What is 7 + 5?</strong><br>
                <input type="radio" name="q1" value="A"> A) 10<br>
                <input type="radio" name="q1" value="B"> B) 11<br>
                <input type="radio" name="q1" value="C"> C) 12<br>
                <input type="radio" name="q1" value="D"> D) 13<br>
            </li>
            <li>
                <strong>What is the value of 5*65 \times 65*6?</strong><br>
                <input type="radio" name="q2" value="A"> A) 25<br>
                <input type="radio" name="q2" value="B"> B) 30<br>
                <input type="radio" name="q2" value="C"> C) 35<br>
                <input type="radio" name="q2" value="D"> D) 40<br>
            </li>
            <li>
                <strong>What is the square root of 16?</strong><br>
                <input type="radio" name="q3" value="A"> A) 2<br>
                <input type="radio" name="q3" value="B"> B) 3<br>
                <input type="radio" name="q3" value="C"> C) 4<br>
                <input type="radio" name="q3" value="D"> D) 5<br>
            </li>
            <li>
                <strong>What is the perimeter of a square with side length 4 units?</strong><br>
                <input type="radio" name="q4" value="A"> A) 8 units<br>
                <input type="radio" name="q4" value="B"> B) 12 units<br>
                <input type="radio" name="q4" value="C"> C) 16 units<br>
                <input type="radio" name="q4" value="D"> D) 20 units<br>
            </li>
            <li>
                <strong>What is 15 divided by 3?</strong><br>
                <input type="radio" name="q5" value="A"> A) 3<br>
                <input type="radio" name="q5" value="B"> B) 4<br>
                <input type="radio" name="q5" value="C"> C) 5<br>
                <input type="radio" name="q5" value="D"> D) 6<br>
            </li>
            <li>
                <strong>What is 828^282?</strong><br>
                <input type="radio" name="q6" value="A"> A) 16<br>
                <input type="radio" name="q6" value="B"> B) 32<br>
                <input type="radio" name="q6" value="C"> C) 64<br>
                <input type="radio" name="q6" value="D"> D) 256<br>
            </li>
            <li>
                <strong>Solve for xxx in the equation 3x−5=73x - 5 = 73x−5=7:</strong><br>
                <input type="radio" name="q7" value="A"> A) 1<br>
                <input type="radio" name="q7" value="B"> B) 2<br>
                <input type="radio" name="q7" value="C"> C) 3<br>
                <input type="radio" name="q7" value="D"> D) 4<br>
            </li>
            <li>
                <strong>What is the value of 7!7!7! (7 factorial)?</strong><br>
                <input type="radio" name="q8" value="A"> A) 720<br>
                <input type="radio" name="q8" value="B"> B) 2,520<br>
                <input type="radio" name="q8" value="C"> C) 5,040<br>
                <input type="radio" name="q8" value="D"> D) 7,200<br>
            </li>
            <li>
                <strong>If the angles in a triangle are 45°, 45°, and 90°, what type of triangle is it?</strong><br>
                <input type="radio" name="q9" value="A"> A) Equilateral<br>
                <input type="radio" name="q9" value="B"> B) Isosceles<br>
                <input type="radio" name="q9" value="C"> C) Scalene<br>
                <input type="radio" name="q9" value="D"> D) Right<br>
            </li>
            <li>
                <strong>What is the area of a circle with a radius of 3 units? (Use π≈3.14\pi \approx 3.14π≈3.14)</strong><br>
                <input type="radio" name="q10" value="A"> A) 9.42 square units<br>
                <input type="radio" name="q10" value="B"> B) 18.84 square units<br>
                <input type="radio" name="q10" value="C"> C) 28.26 square units<br>
                <input type="radio" name="q10" value="D"> D) 37.68 square units<br>
            </li>
            <li>
                <strong>Solve the quadratic equation: x2−4x+3=0x^2 - 4x + 3 = 0x2−4x+3=0:</strong><br>
                <input type="radio" name="q11" value="A"> A) x=1x = 1x=1 or x=3x = 3x=3<br>
                <input type="radio" name="q11" value="B"> B) x=−1x = -1x=−1 or x=−3x = -3x=−3<br>
                <input type="radio" name="q11" value="C"> C) x=1x = 1x=1 or x=2x = 2x=2<br>
                <input type="radio" name="q11" value="D"> D) x=2x = 2x=2 or x=3x = 3x=3<br>
            </li>
            <li>
                <strong>What is the derivative of f(x)=3x2+2x−5f(x) = 3x^2 + 2x - 5f(x)=3x2+2x−5?</strong><br>
                <input type="radio" name="q12" value="A"> A) 6x+26x + 26x+2<br>
                <input type="radio" name="q12" value="B"> B) 3x+23x + 23x+2<br>
                <input type="radio" name="q12" value="C"> C) 6x−26x - 26x−2<br>
                <input type="radio" name="q12" value="D"> D) 2x+32x + 32x+3<br>
            </li>
            <li>
                <strong>What is the value of ∫01(2x+3)dx\int_0^1 (2x + 3)dx∫01(2x+3)dx?</strong><br>
                <input type="radio" name="q13" value="A"> A) 1<br>
                <input type="radio" name="q13" value="B"> B) 2<br>
                <input type="radio" name="q13" value="C"> C) 3<br>
                <input type="radio" name="q13" value="D"> D) 4<br>
            </li>
            <li>
                <strong>Which of the following is an irrational number?</strong><br>
                <input type="radio" name="q14" value="A"> A) 227\frac{22}{7}722<br>
                <input type="radio" name="q14" value="B"> B) 2\sqrt{2}2<br>
                <input type="radio" name="q14" value="C"> C) 0.750.750.75<br>
                <input type="radio" name="q14" value="D"> D) 3.143.143.14<br>
            </li>
            <li>
                <strong>If the sum of the first 10 terms of an arithmetic series is 55 and the first term is 1, what is the common difference?</strong><br>
                <input type="radio" name="q15" value="A"> A) 0.5<br>
                <input type="radio" name="q15" value="B"> B) 1<br>
                <input type="radio" name="q15" value="C"> C) 1.5<br>
                <input type="radio" name="q15" value="D"> D) 2<br>
            </li>
            <!-- answers are "C,B,C,C,C,C,D,C,B,C,C,A,D,B,B" -->
        </ol>

        <div class="button-container">
            <button 
                type="submit" 
                style="background-color: #9f63d4;
                    border-color: aliceblue;
                    color: white;
                    width: 170px;
                    height:40px;
                    border-radius : 25px;
                    margin-right:30%;
                    margin-left:7%;
                    "
            >
                Submit
            </button>
            <button 
                type="reset" 
                id="tryAgainButton"
                style="background-color: #9f63d4;
                    border-color: aliceblue;
                    color: white;
                    width: 170px;
                    height:40px;
                    border-radius : 25px;" 
            >
                Try again
            </button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const correctAnswers = ['C','B','C','C','C','C','D','C','B','C','C','A','D','B','B'];

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
                location.reload(); // Reload the page
            });
        });
    </script>
</body>
</html>
