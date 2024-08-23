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

    <h1>ICT Quiz</h1>
    <h2 id="result" style="color:red;text-align: center"></h2>
    <form>
    <ol>
            <li class="question">
                <strong>What does "CPU" stand for?</strong><br>
                <input type="radio" name="q1" value="A"> A) Central Processing Unit<br>
                <input type="radio" name="q1" value="B"> B) Computer Power Unit<br>
                <input type="radio" name="q1" value="C"> C) Central Programming Unit<br>
                <input type="radio" name="q1" value="D"> D) Control Processing Unit<br>
            </li>
            <li class="question">
                <strong>Which of the following is an example of an input device?</strong><br>
                <input type="radio" name="q2" value="A"> A) Monitort<br>
                <input type="radio" name="q2" value="B"> B) Keyboard<br>
                <input type="radio" name="q2" value="C"> C) Printer<br>
                <input type="radio" name="q2" value="D"> D) Speaker<br>
            </li>
            <li class="question">
                <strong>Which file extension is commonly used for Microsoft Word documents?</strong><br>
                <input type="radio" name="q3" value="A"> A) .jpg<br>
                <input type="radio" name="q3" value="B"> B) .mp3<br>
                <input type="radio" name="q3" value="C"> C) .docx<br>
                <input type="radio" name="q3" value="D"> D) .xlsx<br>
            </li>
            <li class="question">
                <strong>What does "RAM" stand for?</strong><br>
                <input type="radio" name="q4" value="A"> A) Random Access Memory<br>
                <input type="radio" name="q4" value="B"> B) Read Access Memory<br>
                <input type="radio" name="q4" value="C"> C) Run Access Memory<br>
                <input type="radio" name="q4" value="D"> D) Real Access Memory<br>
            </li>
            <li class="question">
                <strong>Which of these is an example of a web browser?</strong><br>
                <input type="radio" name="q5" value="A"> A) Windows<br>
                <input type="radio" name="q5" value="B"> B) Excel<br>
                <input type="radio" name="q5" value="C"> C) Chrome<br>
                <input type="radio" name="q5" value="D"> D) Word<br>
            </li>
            <li class="question">
                <strong>What is the primary purpose of an operating system?</strong><br>
                <input type="radio" name="q6" value="A"> A) To provide internet access<br>
                <input type="radio" name="q6" value="B"> B) To manage computer hardware and software resources<br>
                <input type="radio" name="q6" value="C"> C) To edit documents<br>
                <input type="radio" name="q6" value="D"> D) To store data<br>
            </li>
            <li class="question">
                <strong>Which protocol is used to transfer files over the internet?</strong><br>
                <input type="radio" name="q7" value="A"> A) HTTP<br>
                <input type="radio" name="q7" value="B"> B) FTP<br>
                <input type="radio" name="q7" value="C"> C) SMTP<br>
                <input type="radio" name="q7" value="D"> D) DNS<br>
            </li>
            <li class="question">
                <strong>What does "SQL" stand for in database management?</strong><br>
                <input type="radio" name="q8" value="A"> A) Structured Query Language<br>
                <input type="radio" name="q8" value="B"> B) Simple Query Language<br>
                <input type="radio" name="q8" value="C"> C) Standard Query Language<br>
                <input type="radio" name="q8" value="D"> D) System Query Language<br>
            </li>
            <li class="question">
                <strong>Which of the following is an example of a database management system?</strong><br>
                <input type="radio" name="q9" value="A"> A) Oracle<br>
                <input type="radio" name="q9" value="B"> B) Photoshop<br>
                <input type="radio" name="q9" value="C"> C) PowerPoint<br>
                <input type="radio" name="q9" value="D"> D) Windows<br>
            </li>
            <li class="question">
                <strong>What does "URL" stand for?</strong><br>
                <input type="radio" name="q10" value="A"> A) Uniform Resource Locator<br>
                <input type="radio" name="q10" value="B"> B) Uniform Retrieval Locator<br>
                <input type="radio" name="q10" value="C"> C) Unified Resource Locator<br>
                <input type="radio" name="q10" value="D"> D) Uniform Response Locator<br>
            </li>
            <li class="question">
                <strong>Which of the following is a type of cyber attack where data is encrypted and ransom is demanded?</strong><br>
                <input type="radio" name="q11" value="A"> A) Phishing<br>
                <input type="radio" name="q11" value="B"> B) Ransomware<br>
                <input type="radio" name="q11" value="C"> C) Malware<br>
                <input type="radio" name="q11" value="D"> D) DDoS<br>
            </li>
            <li class="question">
                <strong>In networking, what is the primary function of a router?</strong><br>
                <input type="radio" name="q12" value="A"> A) To store data<br>
                <input type="radio" name="q12" value="B"> B) To connect devices within a single network<br>
                <input type="radio" name="q12" value="C"> C) To forward data packets between different networks<br>
                <input type="radio" name="q12" value="D"> D) To secure the network<br>
            </li>
            <li class="question">
                <strong>Which of the following is a common form of asymmetric encryption?</strong><br>
                <input type="radio" name="q13" value="A"> A) AES<br>
                <input type="radio" name="q13" value="B"> B) DES<br>
                <input type="radio" name="q13" value="C"> C) RSA<br>
                <input type="radio" name="q13" value="D"> D) MD5<br>
            </li>
            <li class="question">
                <strong>What is the main difference between IPv4 and IPv6?</strong><br>
                <input type="radio" name="q14" value="A"> A) IPv6 is faster than IPv4<br>
                <input type="radio" name="q14" value="B"> B) IPv4 is more secure than IPv6<br>
                <input type="radio" name="q14" value="C"> C) IPv6 has a larger address space than IPv4<br>
                <input type="radio" name="q14" value="D"> D) IPv4 is only used in local networks<br>
            </li>
            <li class="question">
                <strong>In cloud computing, what does "IaaS" stand for?</strong><br>
                <input type="radio" name="q15" value="A"> A) Internet as a Service<br>
                <input type="radio" name="q15" value="B"> B) Infrastructure as a Service<br>
                <input type="radio" name="q15" value="C"> C) Information as a Service<br>
                <input type="radio" name="q15" value="D"> D) Integration as a Service<br>
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
            const correctAnswers = ['A', 'B', 'C', 'A', 'C', 'B', 'B', 'A', 'A', 'A', 'B', 'C', 'C', 'C','B'];

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
