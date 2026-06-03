addSurvey.addEventListener('click', function() {
    window.location = "createQuest.php";
});

function showShareOptions(idSurvey) {
    Swal.fire({
      title: '¿Por dónde quieres compartir tu encuesta?',
      showCancelButton: true,
      showDenyButton: true,
      confirmButtonColor: "#00C201",
      confirmButtonText: '<i class="fa-brands fa-whatsapp"></i> WhatsApp',
      denyButtonColor: "#e47202",
      denyButtonText: '<i class="fa-solid fa-copy"></i> Copiar URL',
      cancelButtonColor: "#ff2952",
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.open('https://api.whatsapp.com/send?text=Te%20invitamos%20a%20responder%20nuestra%20encuesta%20de%20K-LIFICAME%20a%20traves%20del%20siguiente%20enlace:%20https://klificamefisico.comunisoft.com/pages/survey.php?encuesta=' + idSurvey, '_blank');
      } else if (result.isDenied) {
        const url = 'https://klificamefisico.comunisoft.com/pages/survey.php?encuesta=' + idSurvey;
        navigator.clipboard.writeText(url).then(() => {
          Swal.fire('URL copiada!', '', 'success');
        }).catch(err => {
          Swal.fire('Error al copiar la URL', '', 'error');
        });
      }
    });
  }