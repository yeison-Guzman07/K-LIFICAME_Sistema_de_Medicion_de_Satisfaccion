// CANAL 906 Familia Engals
document.addEventListener("DOMContentLoaded", function(){

    const darkModeInput = document.getElementById("darkModeInput");
    const darkThemeBox = document.getElementById("darkTheme");

    const greyScaleInput = document.getElementById("greyScaleInput");
    const greyScaleBox = document.getElementById("greyScale");

    const yellowBlackInput = document.getElementById("yellowBlackInput");
    const yellowBlackBox = document.getElementById("yellowBlack");

    const contrastInput = document.getElementById("contrastInput");
    const contrastBox = document.getElementById("contrast");

    const showHiperVInput = document.getElementById("showHiperVInput");
    const showHiperVBox = document.getElementById("showHiperV");

    checked();
    
    setInterval(checked, 100); // Consultar cada segundo

    // Funcionamiento De Los Inputs
        darkModeInput.addEventListener("click", function(){
            document.body.classList.toggle('darkTheme');     //AL BODY SE LE AGREGA LA CLASE 'DARK'
            
            //Guardamos el modo en localStorage
            if (document.body.classList.contains('darkTheme')) {
                localStorage.setItem('dark-mode', 'true');      //SE GUARDA EN EL STORAGE QUE EL MODO OSCURO ESTA ACTIVO

                localStorage.setItem('greyScale-mode', 'false');
                localStorage.setItem('yellowBlack-mode', 'false');
                localStorage.setItem('contrast-mode', 'false');
            } else {
                localStorage.setItem('dark-mode', 'false');     //SE GUARDA EN EL STORAGE QUE EL MODO OSCURO ESTA DESACTIVO
            }
        });

        greyScaleInput.addEventListener("click", function(){
            document.body.classList.toggle('greyScale');     //AL BODY SE LE AGREGA LA CLASE 'GREYSCALE'
            
            //Guardamos el modo en localStorage
            if (document.body.classList.contains('greyScale')) {
                localStorage.setItem('greyScale-mode', 'true');      //SE GUARDA EN EL STORAGE QUE EL MODO GREY SCALE ESTA ACTIVO

                localStorage.setItem('dark-mode', 'false');
                localStorage.setItem('yellowBlack-mode', 'false');
                localStorage.setItem('contrast-mode', 'false');
            } else {
                localStorage.setItem('greyScale-mode', 'false');     //SE GUARDA EN EL STORAGE QUE EL MODO GREY SCALE ESTA DESACTIVO
            }
        });

        yellowBlackInput.addEventListener("click", function(){
            document.body.classList.toggle('yellowBlack');     //AL BODY SE LE AGREGA LA CLASE 'YELLOWBLACK'
            
            //Guardamos el modo en localStorage
            if (document.body.classList.contains('yellowBlack')) {
                localStorage.setItem('yellowBlack-mode', 'true');      //SE GUARDA EN EL STORAGE QUE EL MODO YELLOW BLACK ESTA ACTIVO

                localStorage.setItem('dark-mode', 'false');
                localStorage.setItem('greyScale-mode', 'false');
                localStorage.setItem('contrast-mode', 'false');
            } else {
                localStorage.setItem('yellowBlack-mode', 'false');     //SE GUARDA EN EL STORAGE QUE EL MODO YELLOW BLACK ESTA DESACTIVO
            }
        });

        contrastInput.addEventListener("click", function(){
            document.body.classList.toggle('contrast');     //AL BODY SE LE AGREGA LA CLASE 'CONTRAST'
            
            //Guardamos el modo en localStorage
            if (document.body.classList.contains('contrast')) {
                localStorage.setItem('contrast-mode', 'true');      //SE GUARDA EN EL STORAGE QUE EL MODO CONTRAST ESTA ACTIVO

                localStorage.setItem('dark-mode', 'false');
                localStorage.setItem('greyScale-mode', 'false');
                localStorage.setItem('yellowBlack-mode', 'false');
            } else {
                localStorage.setItem('contrast-mode', 'false');     //SE GUARDA EN EL STORAGE QUE EL MODO CONTRAST ESTA DESACTIVO
            }
        });
    ////////////////////////////////////

        showHiperVInput.addEventListener("click", function(){
            document.body.classList.toggle('showHiperV');     //AL BODY SE LE AGREGA LA CLASE 'SHOWHIPERV'
            
            //Guardamos el modo en localStorage
            if (document.body.classList.contains('showHiperV')) {
                localStorage.setItem('showHiperV-mode', 'true');      //SE GUARDA EN EL STORAGE QUE SHOWHIPERV ESTA ACTIVO
            } else {
                localStorage.setItem('showHiperV-mode', 'false');     //SE GUARDA EN EL STORAGE QUE SHOWHIPERV ESTA DESACTIVO
            }
        });

    function checked(){
        // Obtenemos el modo actual
            if (localStorage.getItem('dark-mode') === 'true') {
                darkThemeBox.checked = true;
                document.body.classList.add('darkTheme');

                greyScaleBox.checked = false;
                yellowBlackBox.checked = false;
                contrastBox.checked = false;
            } else {                                            //DEPENDIENDO DE SI EN EL STORAGE ESTE ACTIVO O NO ES EL TEMA
                darkThemeBox.checked = false;
                document.body.classList.remove('darkTheme');
            }

            if (localStorage.getItem('greyScale-mode') === 'true') {
                greyScaleBox.checked = true;
                document.body.classList.add('greyScale');

                darkThemeBox.checked = false;
                yellowBlackBox.checked = false;
                contrastBox.checked = false;
            } else {                                            //DEPENDIENDO DE SI EN EL STORAGE ESTE ACTIVO O NO ES EL TEMA
                greyScaleBox.checked = false;
                document.body.classList.remove('greyScale');
            }

            if (localStorage.getItem('yellowBlack-mode') === 'true') {
                yellowBlackBox.checked = true;
                document.body.classList.add('yellowBlack');

                darkThemeBox.checked = false;
                greyScaleBox.checked = false;
                contrastBox.checked = false;
            } else {                                            //DEPENDIENDO DE SI EN EL STORAGE ESTE ACTIVO O NO ES EL TEMA
                yellowBlackBox.checked = false;
                document.body.classList.remove('yellowBlack');
            }

            if (localStorage.getItem('contrast-mode') === 'true') {
                contrastBox.checked = true;
                document.body.classList.add('contrast');

                darkThemeBox.checked = false;
                greyScaleBox.checked = false;
                yellowBlackBox.checked = false;
            } else {                                            //DEPENDIENDO DE SI EN EL STORAGE ESTE ACTIVO O NO ES EL TEMA
                contrastBox.checked = false;
                document.body.classList.remove('contrast');
            }

            ///////////////////////////////////////////////////////////////////////////

            
            if (localStorage.getItem('showHiperV-mode') === 'true') {
                showHiperVBox.checked = true;
                document.body.classList.add('showHiperV');
            } else {                                            //DEPENDIENDO DE SI EN EL STORAGE ESTE ACTIVO O NO ES EL TEMA
                showHiperVBox.checked = false;
                document.body.classList.remove('showHiperV');
            }
    }
});