<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="it.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>IT Quiz</title>
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
            /* color: inherit;        */
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

    <h1>Physics Quiz</h1>
    <h2 id="result" style="color:red;text-align: center"></h2>
    <form>
        <ol>
            <li>
                <strong>What is the force that pulls objects toward the center of the Earth?</strong><br>
                <input type="radio" name="q1" value="A"> A) Magnetism<br>
                <input type="radio" name="q1" value="B"> B) Gravity<br>
                <input type="radio" name="q1" value="C"> C) Friction<br>
                <input type="radio" name="q1" value="D"> D) Tension<br>
            </li>
            <li>
                <strong>What is the speed of light in a vacuum?</strong><br>
                <input type="radio" name="q2" value="A"> A) 300,000 meters per second<br>
                <input type="radio" name="q2" value="B"> B) 300,000 kilometers per second<br>
                <input type="radio" name="q2" value="C"> C) 150,000 kilometers per second<br>
                <input type="radio" name="q2" value="D"> D) 150,000 meters per second<br>
            </li>
            <li>
                <strong>Which of the following is a unit of force?</strong><br>
                <input type="radio" name="q3" value="A"> A) Newton<br>
                <input type="radio" name="q3" value="B"> B) Joule<br>
                <input type="radio" name="q3" value="C"> C) Watt<br>
                <input type="radio" name="q3" value="D"> D) Volt<br>
            </li>
            <li>
                <strong>What is the standard unit of electric current?</strong><br>
                <input type="radio" name="q4" value="A"> A) Volt<br>
                <input type="radio" name="q4" value="B"> B) Watt<br>
                <input type="radio" name="q4" value="C"> C) Ampere<br>
                <input type="radio" name="q4" value="D"> D) Ohm<br>
            </li>
            <li>
                <strong>What type of energy is stored in a compressed spring?</strong><br>
                <input type="radio" name="q5" value="A"> A) Kinetic energy<br>
                <input type="radio" name="q5" value="B"> B) Thermal energy<br>
                <input type="radio" name="q5" value="C"> C) Potential energy<br>
                <input type="radio" name="q5" value="D"> D) Chemical energy<br>
            </li>
            <li>
                <strong>What is the formula for calculating the speed of an object?</strong><br>
                <input type="radio" name="q6" value="A"> A) Speed = Distance × Time<br>
                <input type="radio" name="q6" value="B"> B) Speed = Distance ÷ Time<br>
                <input type="radio" name="q6" value="C"> C) Speed = Time ÷ Distance<br>
                <input type="radio" name="q6" value="D"> D) Speed = Distance + Time<br>
            </li>
            <li>
                <strong>Which of the following is true about an object in free fall near the Earth's surface?</strong><br>
                <input type="radio" name="q7" value="A"> A) Its acceleration decreases<br>
                <input type="radio" name="q7" value="B"> B) Its acceleration is constant<br>
                <input type="radio" name="q7" value="C"> C) Its acceleration increases<br>
                <input type="radio" name="q7" value="D"> D) Its acceleration is zero<br>
            </li>
            <li>
                <strong>What is the work done when a force of 10 Newtons moves an object 5 meters?</strong><br>
                <input type="radio" name="q8" value="A"> A) 2 Joules<br>
                <input type="radio" name="q8" value="B"> B) 15 Joules<br>
                <input type="radio" name="q8" value="C"> C) 50 Joules<br>
                <input type="radio" name="q8" value="D"> D) 100 Joules<br>
            </li>
            <li>
                <strong>Which of the following waves requires a medium to travel through?</strong><br>
                <input type="radio" name="q9" value="A"> A) Light waves<br>
                <input type="radio" name="q9" value="B"> B) Sound waves<br>
                <input type="radio" name="q9" value="C"> C) X-rays<br>
                <input type="radio" name="q9" value="D"> D) Gamma rays<br>
            </li>
            <li>
                <strong>What is the unit of frequency?</strong><br>
                <input type="radio" name="q10" value="A"> A) Hertz<br>
                <input type="radio" name="q10" value="B"> B) Joule<br>
                <input type="radio" name="q10" value="C"> C) Coulomb<br>
                <input type="radio" name="q10" value="D"> D) Tesla<br>
            </li>
            <li>
                <strong>What is the principle of conservation of energy?</strong><br>
                <input type="radio" name="q11" value="A"> A) Energy can be created but not destroyed<br>
                <input type="radio" name="q11" value="B"> B) Energy cannot be created or destroyed, only transformed<br>
                <input type="radio" name="q11" value="C"> C) Energy is always increasing in the universe<br>
                <input type="radio" name="q11" value="D"> D) Energy is always decreasing in the universe<br>
            </li>
            <li>
                <strong>In a parallel circuit, how does the total resistance compare to the individual resistances?</strong><br>
                <input type="radio" name="q12" value="A"> A) The total resistance is the sum of individual resistances<br>
                <input type="radio" name="q12" value="B"> B) The total resistance is equal to the smallest resistance<br>
                <input type="radio" name="q12" value="C"> C) The total resistance is less than the smallest individual resistance<br>
                <input type="radio" name="q12" value="D"> D) The total resistance is greater than the largest individual resistance<br>
            </li>
            <li>
                <strong>What is the Doppler effect?</strong><br>
                <input type="radio" name="q13" value="A"> A) The change in frequency of a wave as the source and observer move relative to each other<br>
                <input type="radio" name="q13" value="B"> B) The bending of light as it passes through different media<br>
                <input type="radio" name="q13" value="C"> C) The spreading out of waves when they pass through a narrow opening<br>
                <input type="radio" name="q13" value="D"> D) The interference of two waves that meet in a medium<br>
            </li>
            <li>
                <strong>What is the energy required to raise the temperature of 1 kilogram of water by 1°C called?</strong><br>
                <input type="radio" name="q14" value="A"> A) Specific heat capacity<br>
                <input type="radio" name="q14" value="B"> B) Thermal conductivity<br>
                <input type="radio" name="q14" value="C"> C) Latent heat<br>
                <input type="radio" name="q14" value="D"> D) Heat flux<br>
            </li>
            <li>
                <strong>Which law explains the relationship between the pressure and volume of a gas at constant temperature?</strong><br>
                <input type="radio" name="q15" value="A"> A) Boyle's Law<br>
                <input type="radio" name="q15" value="B"> B) Charles's Law<br>
                <input type="radio" name="q15" value="C"> C) Avogadro's Law<br>
                <input type="radio" name="q15" value="D"> D) Newton's Law<br>
            </li>
                <!-- answers are "B, B, A, C, C, B, B, C, B, A, B, C, A, A, A" -->
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
            const correctAnswers = ['B', 'B', 'A', 'C', 'C', 'B', 'B', 'C', 'B', 'A', 'B', 'C', 'A', 'A', 'A'];

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
