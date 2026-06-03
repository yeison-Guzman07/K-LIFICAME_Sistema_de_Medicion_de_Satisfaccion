<?php
session_start();
include_once "../includes/sessionVarify.php";
include_once "../sources/php/adminSurvey.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Encuesta</title>

    <?php include_once "../includes/link.html"; ?>

    <link rel="stylesheet" href="https://klificamefisico.comunisoft.com/sources/css/createQuest.css">
    <script src="https://klificamefisico.comunisoft.com/lib/cdn.jsdelivr.net_npm_sweetalert2@9.js"></script>
</head>
<header>
    <?php include_once "../includes/nav.html";
    include_once "../includes/accessMenu.html";
    include_once "../includes/menu.php";
    ?>
</header>

<body>

    <div class="fix">
        <div class="options">
            <i class="fa-regular fa-square-plus" onclick="addQuestion()" title="Añadir Pregunta"></i>
            <label for="saveCuest"><i class="fa-regular fa-bookmark" title="Guardar"></i></label>
            <i class="fa-solid fa-share-from-square" title="Compartir"></i>
        </div>
    </div>
    <main>
        <h1>CREADOR DE ENCUESTAS</h1>
        <form id="dynamic-form" method="post" action="../sources/php/saveCuest.php">
            <section class="questTitle">
                <input type="text" name="title" placeholder="Encuesta Sin Titulo" required>
            </section>

            <div id="questions-container">

            </div>
            <div class="comentary">
                <textarea name="description" placeholder="Escribe una descripción para esta encuesta (opcional)"></textarea>
            </div>
            <input type="submit" id="saveCuest">
        </form>
    </main>

    <script>
        let questionCounter = 0;
        const maxQuestions = 5;
        const options = [{
                text: 'MUY INSATISFECHO',
                img: 'https://klificamefisico.comunisoft.com/sources/img/1_Color.png'
            },
            {
                text: 'INSATISFECHO',
                img: 'https://klificamefisico.comunisoft.com/sources/img/2_Color.png'
            },
            {
                text: 'NEUTRAL',
                img: 'https://klificamefisico.comunisoft.com/sources/img/3_Color.png'
            },
            {
                text: 'SATISFECHO',
                img: 'https://klificamefisico.comunisoft.com/sources/img/4_Color.png'
            },
            {
                text: 'MUY SATISFECHO',
                img: 'https://klificamefisico.comunisoft.com/sources/img/5_Color.png'
            }
        ];

        function addQuestion() {
            questionCounter++;
            const questionsContainer = document.getElementById('questions-container');

            const questionDiv = document.createElement('section');
            questionDiv.classList.add('question');
            questionDiv.setAttribute('id', `Question${questionCounter}`);
            questionDiv.innerHTML = `
            <input type="text" name="questions[${questionCounter}][text]" placeholder="Pregunta ${questionCounter}" required>
            <div class="questOptions">
                ${generateOptions(questionCounter)}
            </div>
            <i class="fa-solid fa-trash-can" onclick="removeQuestion(${questionCounter})"></i>
        `;

            questionsContainer.appendChild(questionDiv);
            addOptionEventListeners(questionCounter);
        }

        function generateOptions(questionNumber) {
            return options.map((option, index) => {
                const optionIndex = index + 1;
                return `
                <label for="Question${questionNumber}Option${optionIndex}" class="optionContent" id="ContentQuestion${questionNumber}Option${optionIndex}">
                    <img src="${option.img}" alt="">
                    <p class="optionP${optionIndex}">${option.text}</p>
                    <input type="radio" id="Question${questionNumber}Option${optionIndex}" name="questions[${questionNumber}][answer]" class="radioOption" value="${option.text}">
                </label>
            `;
            }).join('');
        }

        function addOptionEventListeners(questionNumber) {
            for (let i = 1; i <= options.length; i++) {
                const optionContent = document.getElementById(`ContentQuestion${questionNumber}Option${i}`);
                optionContent.addEventListener("click", function() {
                    for (let j = 1; j <= options.length; j++) {
                        document.getElementById(`ContentQuestion${questionNumber}Option${j}`).classList.remove('active');
                    }
                    optionContent.classList.add('active');
                });
            }
        }

        function removeQuestion(questionNumber) {
            const questionToRemove = document.getElementById(`Question${questionNumber}`);
            questionToRemove.remove();

            // Ajuste de los números de las preguntas
            const questionContainers = document.querySelectorAll('.question');
            questionCounter = 0;
            questionContainers.forEach((container, index) => {
                questionCounter++;
                const questionInput = container.querySelector('input[type="text"]');
                questionInput.setAttribute('placeholder', `Pregunta ${questionCounter}`);
                questionInput.setAttribute('name', `questions[${questionCounter}][text]`);
                container.setAttribute('id', `Question${questionCounter}`);
                container.querySelectorAll('label').forEach((label, idx) => {
                    const optionIndex = idx + 1;
                    label.setAttribute('for', `Question${questionCounter}Option${optionIndex}`);
                    label.setAttribute('id', `ContentQuestion${questionCounter}Option${optionIndex}`);
                });
                container.querySelectorAll('input[type="radio"]').forEach((radio, idx) => {
                    const optionIndex = idx + 1;
                    radio.setAttribute('id', `Question${questionCounter}Option${optionIndex}`);
                    radio.setAttribute('name', `questions[${questionCounter}][answer]`);
                });
                container.querySelector('.fa-trash-can').setAttribute('onclick', `removeQuestion(${questionCounter})`);
            });
        }
    </script>
    <?php include_once "../includes/footer.html"; ?>
</body>

</html>