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

    <h1>Science Quiz</h1>
    <h2 id="result" style="color:red;text-align: center"></h2>
    <form>
        <ol>
                <li class="question">
                    <strong>What planet is known as the Red Planet?</strong><br>
                    <input type="radio" name="q1" value="A"> A) Earth<br>
                    <input type="radio" name="q1" value="B"> B) Mars<br>
                    <input type="radio" name="q1" value="C"> C) Venus<br>
                    <input type="radio" name="q1" value="D"> D) Jupiter<br>
                </li>
                <li class="question">
                    <strong>What is the chemical symbol for water?</strong><br>
                    <input type="radio" name="q2" value="A"> A) CO2<br>
                    <input type="radio" name="q2" value="B"> B) H2O<br>
                    <input type="radio" name="q2" value="C"> C) O2<br>
                    <input type="radio" name="q2" value="D"> D) NaCl<br>
                </li>
                <li class="question">
                    <strong>Which of the following is a gas at room temperature?</strong><br>
                    <input type="radio" name="q3" value="A"> A) Iron<br>
                    <input type="radio" name="q3" value="B"> B) Mercury<br>
                    <input type="radio" name="q3" value="C"> C) Nitrogen<br>
                    <input type="radio" name="q3" value="D"> D) Sodium<br>
                </li>
                <li class="question">
                    <strong>How many legs does an insect have?</strong><br>
                    <input type="radio" name="q4" value="A"> A) 4<br>
                    <input type="radio" name="q4" value="B"> B) 6<br>
                    <input type="radio" name="q4" value="C"> C) 8<br>
                    <input type="radio" name="q4" value="D"> D) 10<br>
                </li>
                <li class="question">
                    <strong>Which organ pumps blood throughout the body?</strong><br>
                    <input type="radio" name="q5" value="A"> A) Liver<br>
                    <input type="radio" name="q5" value="B"> B) Brain<br>
                    <input type="radio" name="q5" value="C"> C) Heart<br>
                    <input type="radio" name="q5" value="D"> D) Lungs<br>
                </li>
                <li class="question">
                    <strong>What is the process by which plants make their own food using sunlight?</strong><br>
                    <input type="radio" name="q6" value="A"> A) Respiration<br>
                    <input type="radio" name="q6" value="B"> B) Photosynthesis<br>
                    <input type="radio" name="q6" value="C"> C) Fermentation<br>
                    <input type="radio" name="q6" value="D"> D) Digestion<br>
                </li>
                <li class="question">
                    <strong>Which of the following is a renewable energy source?</strong><br>
                    <input type="radio" name="q7" value="A"> A) Coal<br>
                    <input type="radio" name="q7" value="B"> B) Oil<br>
                    <input type="radio" name="q7" value="C"> C) Wind<br>
                    <input type="radio" name="q7" value="D"> D) Natural Gas<br>
                </li>
                <li class="question">
                    <strong>What is the main gas found in the Earth's atmosphere?</strong><br>
                    <input type="radio" name="q8" value="A"> A) Oxygen<br>
                    <input type="radio" name="q8" value="B"> B) Carbon Dioxide<br>
                    <input type="radio" name="q8" value="C"> C) Nitrogen<br>
                    <input type="radio" name="q8" value="D"> D) Helium<br>
                </li>
                <li class="question">
                    <strong>Which planet is the largest in our solar system?</strong><br>
                    <input type="radio" name="q9" value="A"> A) Earth<br>
                    <input type="radio" name="q9" value="B"> B) Saturn<br>
                    <input type="radio" name="q9" value="C"> C) Jupiter<br>
                    <input type="radio" name="q9" value="D"> D) Neptune<br>
                </li>
                <li class="question">
                    <strong>What is the boiling point of water at sea level?</strong><br>
                    <input type="radio" name="q10" value="A"> A) 0°C<br>
                    <input type="radio" name="q10" value="B"> B) 50°C<br>
                    <input type="radio" name="q10" value="C"> C) 100°C<br>
                    <input type="radio" name="q10" value="D"> D) 200°C<br>
                </li>
                <li class="question">
                    <strong>Which scientist proposed the theory of general relativity?</strong><br>
                    <input type="radio" name="q11" value="A"> A) Isaac Newton<br>
                    <input type="radio" name="q11" value="B"> B) Albert Einstein<br>
                    <input type="radio" name="q11" value="C"> C) Galileo Galilei<br>
                    <input type="radio" name="q11" value="D"> D) Stephen Hawking<br>
                </li>
                <li class="question">
                    <strong>What is the most abundant element in the universe?</strong><br>
                    <input type="radio" name="q12" value="A"> A) Oxygen<br>
                    <input type="radio" name="q12" value="B"> B) Helium<br>
                    <input type="radio" name="q12" value="C"> C) Hydrogen<br>
                    <input type="radio" name="q12" value="D"> D) Carbon<br>
                </li>
                <li class="question">
                    <strong>What is the chemical formula for glucose?</strong><br>
                    <input type="radio" name="q13" value="A"> A) CO2<br>
                    <input type="radio" name="q13" value="B"> B) C6H12O6<br>
                    <input type="radio" name="q13" value="C"> C) H2SO4<br>
                    <input type="radio" name="q13" value="D"> D) NaCl<br>
                </li>
                <li class="question">
                    <strong>Which particle is responsible for carrying a negative charge in an atom?</strong><br>
                    <input type="radio" name="q14" value="A"> A) Proton<br>
                    <input type="radio" name="q14" value="B"> B) Neutron<br>
                    <input type="radio" name="q14" value="C"> C) Electron<br>
                    <input type="radio" name="q14" value="D"> D) Positron<br>
                </li>
                <li class="question">
                    <strong>What is the primary function of the large intestine in the digestive system?</strong><br>
                    <input type="radio" name="q15" value="A"> A) Absorption of nutrients<br>
                    <input type="radio" name="q15" value="B"> B) Breakdown of food<br>
                    <input type="radio" name="q15" value="C"> C) Absorption of water and electrolytes<br>
                    <input type="radio" name="q15" value="D"> D) Production of digestive enzymes<br>
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
            const correctAnswers = ['B', 'B', 'C', 'B', 'C', 'B', 'C', 'C', 'C', 'C', 'B', 'C', 'B', 'C','C'];

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
