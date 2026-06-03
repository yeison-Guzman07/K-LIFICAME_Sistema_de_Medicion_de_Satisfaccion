document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
        icon: 'success',
        title: '¡Tu reporte ya esta listo!',
        text: 'Haz clic en el icono de K-LIFICAME para imprimir o guardar como PDF.',
        confirmButtonColor: '#00C201'
    });
    

    var botonImprimir = document.getElementById('print');

    // Asignar un evento de clic al objeto
    botonImprimir.addEventListener('click', function() {
        Swal.fire({
            icon: 'info',
            title: '¡Antes De Proceder!',
            text: 'Se recomienda el tamaño de hoja carta.',
            confirmButtonColor: '#00C201'
        }).then((result) => {
            // Retraso de 1 segundo antes de ejecutar la acción
            setTimeout(() => {
                // La acción que deseas realizar después de hacer clic en "OK"
                if (result.isConfirmed) {
                    // Aquí puedes agregar la lógica que deseas ejecutar después de 1 segundo
                    window.print();
                }
            }, 1000);
        });

    });
});