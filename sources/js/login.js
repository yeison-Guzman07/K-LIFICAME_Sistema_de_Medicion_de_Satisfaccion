document.addEventListener("DOMContentLoaded", function(){

    localStorage.setItem('loginActive', 'true');

    const togglePasswordButton1 = document.getElementById('togglePassword1');
    const passwordInput1 = document.getElementById('password1');

    const togglePasswordButton2 = document.getElementById('togglePassword2');
    const passwordInput2 = document.getElementById('password2');

    const togglePasswordButton3 = document.getElementById('togglePassword3');
    const passwordInput3 = document.getElementById('password3');

    const formChange = document.getElementById('formChange');
    const formLogin = document.getElementById('formLogin');
    const formSign = document.getElementById('formSign');

    let isExecuting = false; // Bandera para controlar si la función está en proceso de ejecución

    togglePasswordButton1.addEventListener('click', function() {
        const type = passwordInput1.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput1.setAttribute('type', type);
        this.classList.toggle('fa-eye'); // Agrega o remueve la clase 'fa-eye'
        this.classList.toggle('fa-eye-slash'); // Agrega o remueve la clase 'fa-eye-slash'
    });

    togglePasswordButton2.addEventListener('click', function() {
        const type = passwordInput2.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput2.setAttribute('type', type);
        this.classList.toggle('fa-eye'); // Agrega o remueve la clase 'fa-eye'
        this.classList.toggle('fa-eye-slash'); // Agrega o remueve la clase 'fa-eye-slash'
    });

    togglePasswordButton3.addEventListener('click', function() {
        const type = passwordInput3.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput3.setAttribute('type', type);
        this.classList.toggle('fa-eye'); // Agrega o remueve la clase 'fa-eye'
        this.classList.toggle('fa-eye-slash'); // Agrega o remueve la clase 'fa-eye-slash'
    });

    formChange.addEventListener('click', function(){

        if (isExecuting) { // Si la función ya está en proceso de ejecución, no hagas nada
            return;
        }

        isExecuting = true; // Establece la bandera en verdadero para indicar que la función está en proceso de ejecución


        if (localStorage.getItem('loginActive') === 'true') {

            formChange.classList.add('formTransition');

            setTimeout(function() {
                formLogin.classList.add('form2');
                formLogin.classList.remove('form1');
                formSign.classList.add('form1');
                formSign.classList.remove('form2');
                formChange.classList.remove('formTransition');

                localStorage.setItem('loginActive', 'false');
            }, 1500); // Espera 2000 milisegundos (2 segundos) antes de ejecutar las siguientes líneas
            setTimeout(function() {
                isExecuting = false; // Restablece la bandera a falso cuando la función se completa
            }, 2500);
        } else {
            formChange.classList.add('formTransition');

            setTimeout(function() {
                formLogin.classList.remove('form2');
                formLogin.classList.add('form1');
                formSign.classList.remove('form1');
                formSign.classList.add('form2');
                formChange.classList.remove('formTransition');

                localStorage.setItem('loginActive', 'true');
            }, 1500); // Espera 2000 milisegundos (2 segundos) antes de ejecutar las siguientes líneas
            setTimeout(function() {
                isExecuting = false; // Restablece la bandera a falso cuando la función se completa
            }, 2500);
        }
    });
});
