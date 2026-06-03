

document.addEventListener('DOMContentLoaded', function() {

    const report = document.getElementById("report");

    report.addEventListener("click", function(){
        window.location.href = "selectReport.php";
    });
});