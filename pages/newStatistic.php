<?php
session_start();
include_once "../includes/sessionVarify.php";
if ($_SESSION['rol'] != 3) {
    echo '<script> window.location.href = "https://klificamefisico.comunisoft.com/pages/index.php"; </script>';
}
include_once "../sources/php/statisticSQL.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/link.html"; ?>
    <link rel="stylesheet" href="https://klificamefisico.comunisoft.com/sources/css/statistics.css">
    <title>Estadisticas Generales</title>
</head>

<header>
    <?php include "../includes/nav.html"; ?>
    <?php include "../includes/accessMenu.html"; ?>
    <?php include "../includes/menu.php"; ?>
</header>

<body>
    <main class="container">
        <h1 class="title">ESTADISTICAS MENSUAL "<?php echo strtoupper($nomEntidad[0]); ?>"</h1>
        <div class="calif-container" id="calif-container">

            <div class="Calif InActive1" id="Calif_1">
                <div class="statistic_container">
                    <div class="front">
                        <div class="scaleFace">
                            <img src="https://klificamefisico.comunisoft.com/sources/img/1_Blanco.png" id="Abrir_1" alt="Cara Muy Insatisfecho">
                            <p class="cantidad"><?php echo $totalMuyInsatisGraf_2[4]; ?></p>
                        </div>
                        <div class="DisActivePorcentajes ocultos" id="porcentajes_1">
                            <p class="porcentaje"><?php echo round($PorcenMuyInsatis, 1) ?>% Del Total</p>
                        </div>
                    </div>
                    <div class="DisActiveStatistic ocultos" id="statistic_1">
                        <div class="charts DisActiveCharts" id="chartBarContainer_1">
                            <canvas id="chartBar1" style="width: 100%; height: 100%;"></canvas>
                        </div>
                        <div class="charts DisActiveCharts" id="chartLineContainer_1">
                            <canvas id="chartLine1" style="width: 100%; height: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="offices ocultos DisActiveChartOffice" id="chartOfiice1">
                        <p class="titleCal">MUY INSATISFECHO</p>
                        <div class="chart2">
                            <canvas id="chartBarHo1" style="width: 100%; height: 400px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Calif InActive2" id="Calif_2">
                <div class="statistic_container">
                    <div class="front">
                        <div class="scaleFace">
                            <img src="https://klificamefisico.comunisoft.com/sources/img/2_Blanco.png" id="Abrir_2" alt="Cara Insatisfecho">
                            <p class="cantidad"><?php echo $totalInsatisGraf_2[4]; ?></p>
                        </div>
                        <div class="DisActivePorcentajes ocultos" id="porcentajes_2">
                            <p class="porcentaje"><?php echo round($PorcenInsatis, 1) ?>% Del Total</p>
                        </div>
                    </div>
                    <div class="DisActiveStatistic ocultos" id="statistic_2">
                        <div class="charts DisActiveCharts" id="chartBarContainer_2">
                            <canvas id="chartBar2" style="width: 100%; height: 100%;"></canvas>
                        </div>
                        <div class="charts DisActiveCharts" id="chartLineContainer_2">
                            <canvas id="chartLine2" style="width: 100%; height: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="offices ocultos DisActiveChartOffice" id="chartOfiice2">
                        <p class="titleCal">INSATISFECHO</p>
                        <div class="chart2">
                            <canvas id="chartBarHo2" style="width: 100%; height: 400px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Calif InActive3" id="Calif_3">
                <div class="statistic_container">
                    <div class="front">
                        <div class="scaleFace">
                            <img src="https://klificamefisico.comunisoft.com/sources/img/3_Blanco.png" id="Abrir_3" alt="Cara Neutral">
                            <p class="cantidad"><?php echo $totalNeutralGraf_2[4]; ?></p>
                        </div>
                        <div class="DisActivePorcentajes ocultos" id="porcentajes_3">
                            <p class="porcentaje"><?php echo round($PorcenNeutral, 1) ?>% Del Total</p>
                        </div>
                    </div>
                    <div class="DisActiveStatistic ocultos" id="statistic_3">
                        <div class="charts DisActiveCharts" id="chartBarContainer_3">
                            <canvas id="chartBar3" style="width: 100%; height: 100%;"></canvas>
                        </div>
                        <div class="charts DisActiveCharts" id="chartLineContainer_3">
                            <canvas id="chartLine3" style="width: 100%; height: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="offices ocultos DisActiveChartOffice" id="chartOfiice3">
                        <p class="titleCal">NEUTRAL</p>
                        <div class="chart2">
                            <canvas id="chartBarHo3" style="width: 100%; height: 400px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Calif InActive1" id="Calif_4">
                <div class="statistic_container">
                    <div class="front">
                        <div class="scaleFace">
                            <img src="https://klificamefisico.comunisoft.com/sources/img/4_Blanco.png" id="Abrir_4" alt="Cara Satisfecho">
                            <p class="cantidad"><?php echo $totalSatisGraf_2[4]; ?></p>
                        </div>
                        <div class="DisActivePorcentajes ocultos" id="porcentajes_4">
                            <p class="porcentaje"><?php echo round($PorcenSatis, 1) ?>% Del Total</p>
                        </div>
                    </div>
                    <div class="DisActiveStatistic ocultos" id="statistic_4">
                        <div class="charts DisActiveCharts" id="chartBarContainer_4">
                            <canvas id="chartBar4" style="width: 100%; height: 100%;"></canvas>
                        </div>
                        <div class="charts DisActiveCharts" id="chartLineContainer_4">
                            <canvas id="chartLine4" style="width: 100%; height: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="offices ocultos DisActiveChartOffice" id="chartOfiice4">
                        <p class="titleCal">SATISFECHO</p>
                        <div class="chart2">
                            <canvas id="chartBarHo4" style="width: 100%; height: 400px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Calif InActive2" id="Calif_5">
                <div class="statistic_container">
                    <div class="front">
                        <div class="scaleFace">
                            <img src="https://klificamefisico.comunisoft.com/sources/img/5_Blanco.png" id="Abrir_5" alt="Cara Muy Insatisfecho">
                            <p class="cantidad"><?php echo $totalMuySatisGraf_2[4]; ?></p>
                        </div>
                        <div class="DisActivePorcentajes ocultos" id="porcentajes_5">
                            <p class="porcentaje"><?php echo round($PorcenMuySatis, 1) ?>% Del Total</p>
                        </div>
                    </div>
                    <div class="DisActiveStatistic ocultos" id="statistic_5">
                        <div class="charts DisActiveCharts" id="chartBarContainer_5">
                            <canvas id="chartBar5" style="width: 100%; height: 100%;"></canvas>
                        </div>
                        <div class="charts DisActiveCharts" id="chartLineContainer_5">
                            <canvas id="chartLine5" style="width: 100%; height: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="offices ocultos DisActiveChartOffice" id="chartOfiice5">
                        <p class="titleCal">MUY SATISFECHO</p>
                        <div class="chart2">
                            <canvas id="chartBarHo5" style="width: 100%; height: 400px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="title" id="separadorDissatis">ESTADISTICA DE INSATISFACCIÓN</h1>
        <div class="dissatisfaction">
            <div class="dissatisfactionRate">
                <h2 class="subtitle">TASA DE INSATISFACCIÓN</h2>
                <canvas class="dissatisRateChart" id="chartDissatisRate"></canvas>
                <div class="RateP">
                    <p><?php echo round($TasaInsatisfaccionActual, 1); ?>%</p>
                    <p><span><?php echo $TotalInsatisfaccionActual; ?></span>/<?php echo $TotalCalMes; ?></p>
                </div>
            </div>
            <div class="dissatisfactionEvolution">
                <h2 class="subtitle">EVOLUCIÓN DE INSATISFACCIÓN</h2>
                <p>En esta sección, analiza las calificaciones de <span class="Sp1"> 'Muy Insatisfecho' </span> e <span class="Sp2">'Insatisfecho'
                    </span> para comprender la evolución mensual del nivel de insatisfacción de manera porcentual.</p>
                <div class="evolutionDissatis">
                    <div class="chartPercentage">
                        <canvas id="percentageChart" style="width: 100%; height: 100%;"></canvas>
                    </div>
                    <?php
                    echo $ConstructorTasa;
                    ?>
                </div>
            </div>
        </div>
        <h1 class="title">TENDENCIAS DEL MES</h1>
        <div class="monthTrends">
            <div class="monthTrendChartContainer">
                <canvas id="trendChart" style="width: 100%; height: 100%;"></canvas>
            </div>
            <div class="averages">
                <div class="average">
                    <h2 class="subtitle">PROMEDIO DEL MES COMPLETO</h2>
                    <P><?php echo $ContCal . "/" . $Dias . " = <span> " . round($PromCompleto, 2) . "</span> "; ?> Calificaciones por día</P>
                    <h2 class="subtitle">PROMEDIO DIAS ACTIVOS DEL MES</h2>
                    <P><?php echo $ContCal . "/" . $ContDias . " = <span> " . round($PromDiaCal, 2) . "</span> "; ?> Calificaciones por día</P>
                    <h2 class="subtitle">DIA CON MAYOR ACTIVIDAD</h2>
                    <P>El <span> <?php echo substr($nomDias[$posicion], 4) . " de " . strftime('%B', mktime(0, 0, 0, $mes, 1)); ?> </span> tuvo mayor actividad</P>
                </div>
                <div class="sello">
                    <img class="selloIMG" src="https://klificamefisico.comunisoft.com/sources/img/sello.png" alt="Sello Equipo K-LIFICAME">
                </div>
            </div>
        </div>
        <div class="Pfinal">
            <p class="viewMore">Si quieres conocer más sobre las calificaciones, te invitamos a hacer <a href="../sources/php/excel.php">clic aquí.</a>
                Accede a la tabla completa con información detallada sobre cada evaluación. ¡Agradecemos tu participación!</p>
        </div>
    </main>
    <?php include "../includes/footer.html"; ?>
    <script src="https://klificamefisico.comunisoft.com/sources/js/statistics.js"></script>
    <script src="https://klificamefisico.comunisoft.com/lib/cdn.jsdelivr.net_npm_sweetalert2@9.js"></script>
    <script src="https://klificamefisico.comunisoft.com/lib/cdn.jsdelivr.net_npm_chart.js"></script>
    <script src="https://klificamefisico.comunisoft.com/lib/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeInput = document.getElementById("darkModeInput");

            const chartBar1 = document.getElementById("chartBar1").getContext("2d");
            const chartBar2 = document.getElementById("chartBar2").getContext("2d");
            const chartBar3 = document.getElementById("chartBar3").getContext("2d");
            const chartBar4 = document.getElementById("chartBar4").getContext("2d");
            const chartBar5 = document.getElementById("chartBar5").getContext("2d");

            const chartLine1 = document.getElementById("chartLine1").getContext("2d");
            const chartLine2 = document.getElementById("chartLine2").getContext("2d");
            const chartLine3 = document.getElementById("chartLine3").getContext("2d");
            const chartLine4 = document.getElementById("chartLine4").getContext("2d");
            const chartLine5 = document.getElementById("chartLine5").getContext("2d");

            const chartBarHo1 = document.getElementById("chartBarHo1").getContext("2d");
            const chartBarHo2 = document.getElementById("chartBarHo2").getContext("2d");
            const chartBarHo3 = document.getElementById("chartBarHo3").getContext("2d");
            const chartBarHo4 = document.getElementById("chartBarHo4").getContext("2d");
            const chartBarHo5 = document.getElementById("chartBarHo5").getContext("2d");

            const chartDissatisRate = document.getElementById("chartDissatisRate").getContext("2d");
            const percentageChart = document.getElementById('percentageChart').getContext('2d');
            const trendChart = document.getElementById("trendChart").getContext("2d");

            const skippedWhite = (ctx, value) => ctx.p0.skip || ctx.p1.skip ? value : undefined;
            const skipped = (ctx, value) => ctx.p0.skip || ctx.p1.skip ? value : undefined;
            const down = (ctx, value) => ctx.p0.parsed.y > ctx.p1.parsed.y ? value : undefined;

            var ColorPrin, color1, color2, color3, color4, color5, color6, Texto1, GraficosCartas, CartasClaras;

            var chartDisRatePie, chartPercentage, chartTrends;

            var chartWeek_1, chartMoths_1, chartOffices_1, chartWeek_2, chartMoths_2, chartOffices_2, chartWeek_3, chartMoths_3, chartOffices_3, chartWeek_4, chartMoths_4, chartOffices_4, chartWeek_5, chartMoths_5, chartOffices_5;

            let created = false;

            function buscarColor() {
                ColorPrin = "#ffffff";
                color1 = "#ff2952";
                color2 = "#e47202";
                color3 = "#ffdb00";
                color4 = "#88e74f";
                color5 = "#01c302";
                color6 = "#0073ff";
                Texto1 = "#1f0043";
                GraficosCartas = "#ffffff";

                if (localStorage.getItem('dark-mode') === 'true') {
                    ColorPrin = "#1f0043";
                    color1 = "#ff2952";
                    color2 = "#e47202";
                    color3 = "#ffdb00";
                    color4 = "#88e74f";
                    color5 = "#01c302";
                    color6 = "#0073ff";
                    Texto1 = "#ffffff";
                    GraficosCartas = "#ffffff";
                }

                if (localStorage.getItem('greyScale-mode') === 'true') {
                    ColorPrin = "#ffffff";
                    color1 = "#5a5a5a";
                    color2 = "#808080";
                    color3 = "#d3d3d3";
                    color4 = "c8c8c8";
                    color5 = "8b8b8b";
                    color6 = "#5c5c5c";
                    Texto1 = "000000";
                    GraficosCartas = "#ffffff";
                }

                if (localStorage.getItem('yellowBlack-mode') === 'true') {
                    ColorPrin = "#000000";
                    color1 = "#6f6001";
                    color2 = "#9e8801";
                    color3 = "#ffdf1b";
                    color4 = "#f8d501";
                    color5 = "#ac9401";
                    color6 = "#6f6001";
                    Texto1 = "#ffdf1b";
                    GraficosCartas = "#000000";
                }

                if (localStorage.getItem('contrast-mode') === 'true') {
                    ColorPrin = "#ffffff";
                    color1 = "#FF0024";
                    color2 = "#FF5E00";
                    color3 = "#FFFF00";
                    color4 = "#90FF1E";
                    color5 = "#00FF00";
                    color6 = "#00d9ff";
                    Texto1 = "#130033";
                    GraficosCartas = "#ffffff";
                }

            }

            buscarColor();

            function cargarGraficos() {
                if (created) {
                    chartDisRatePie.destroy();
                    chartPercentage.destroy();
                    chartTrends.destroy();

                    chartWeek_1.destroy();
                    chartMoths_1.destroy();
                    chartOffices_1.destroy();

                    chartWeek_2.destroy();
                    chartMoths_2.destroy();
                    chartOffices_2.destroy();

                    chartWeek_3.destroy();
                    chartMoths_3.destroy();
                    chartOffices_3.destroy();

                    chartWeek_4.destroy();
                    chartMoths_4.destroy();
                    chartOffices_4.destroy();

                    chartWeek_5.destroy();
                    chartMoths_5.destroy();
                    chartOffices_5.destroy();
                    created = false;
                }
                buscarColor();

                setTimeout(function() {

                    chartWeek_1 = new Chart(chartBar1, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($semanasMuyInsatisGraf_1 as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "MUY INSATISFECHO",
                                data: [<?php
                                        foreach ($totalMuyInsatisGraf_1 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Calificaciones En Las Semanas De <?php echo ucfirst(strftime('%B', mktime(0, 0, 0, $mes, 1))); ?>",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartMoths_1 = new Chart(chartLine1, {
                        type: "line",
                        data: {
                            labels: [<?php
                                        foreach ($mesAnio as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "MUY INSATISFECHO",
                                data: [<?php
                                        foreach ($totalMuyInsatisGraf_2 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4d',
                                borderWidth: 3,
                                segment: {
                                    borderColor: ctx => skippedWhite(ctx, 'rgb(255,255,255,0.5)'),
                                    borderDash: ctx => skippedWhite(ctx, [6, 6]),
                                },
                                spanGaps: true
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Comparación Con Los Meses Anteriores",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartOffices_1 = new Chart(chartBarHo1, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($nomOffice as $valor) {
                                            echo '"' . utf8_encode($valor) . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "MUY INSATISFECHO",
                                data: [<?php
                                        foreach ($totalMuyInsatisGraf_3 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            indexAxis: 'y', // Indica que el eje X debe ser horizontal
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Distribución Por Oficinas",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });


                    chartWeek_2 = new Chart(chartBar2, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($semanasInsatisGraf_1 as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "INSATISFECHO",
                                data: [<?php
                                        foreach ($totalInsatisGraf_1 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Calificaciones En Las Semanas De <?php echo ucfirst(strftime('%B', mktime(0, 0, 0, $mes, 1))); ?>",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartMoths_2 = new Chart(chartLine2, {
                        type: "line",
                        data: {
                            labels: [<?php
                                        foreach ($mesAnio as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "INSATISFECHO",
                                data: [<?php
                                        foreach ($totalInsatisGraf_2 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                                segment: {
                                    borderColor: ctx => skippedWhite(ctx, 'rgb(255,255,255,0.5)'),
                                    borderDash: ctx => skippedWhite(ctx, [6, 6]),
                                },
                                spanGaps: true
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Comparación Con Los Meses Anteriores",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartOffices_2 = new Chart(chartBarHo2, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($nomOffice as $valor) {
                                            echo '"' . utf8_encode($valor) . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "INSATISFECHO",
                                data: [<?php
                                        foreach ($totalInsatisGraf_3 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            indexAxis: 'y', // Indica que el eje X debe ser horizontal
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Distribución Por Oficinas",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });


                    chartWeek_3 = new Chart(chartBar3, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($semanasNeutralGraf_1 as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "NEUTRAL",
                                data: [<?php
                                        foreach ($totalNeutralGraf_1 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Calificaciones En Las Semanas De <?php echo ucfirst(strftime('%B', mktime(0, 0, 0, $mes, 1))); ?>",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartMoths_3 = new Chart(chartLine3, {
                        type: "line",
                        data: {
                            labels: [<?php
                                        foreach ($mesAnio as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "NEUTRAL",
                                data: [<?php
                                        foreach ($totalNeutralGraf_2 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                                segment: {
                                    borderColor: ctx => skippedWhite(ctx, 'rgb(255,255,255,0.5)'),
                                    borderDash: ctx => skippedWhite(ctx, [6, 6]),
                                },
                                spanGaps: true
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Comparación Con Los Meses Anteriores",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartOffices_3 = new Chart(chartBarHo3, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($nomOffice as $valor) {
                                            echo '"' . utf8_encode($valor) . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "NEUTRAL",
                                data: [<?php
                                        foreach ($totalNeutralGraf_3 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4d',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            indexAxis: 'y', // Indica que el eje X debe ser horizontal
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Distribución Por Oficinas",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });


                    chartWeek_4 = new Chart(chartBar4, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($semanasSatisGraf_1 as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "SATISFECHO",
                                data: [<?php
                                        foreach ($totalSatisGraf_1 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Calificaciones En Las Semanas De <?php echo ucfirst(strftime('%B', mktime(0, 0, 0, $mes, 1))); ?>",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartMoths_4 = new Chart(chartLine4, {
                        type: "line",
                        data: {
                            labels: [<?php
                                        foreach ($mesAnio as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "SATISFECHO",
                                data: [<?php
                                        foreach ($totalSatisGraf_2 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                                segment: {
                                    borderColor: ctx => skippedWhite(ctx, 'rgb(255,255,255,0.5)'),
                                    borderDash: ctx => skippedWhite(ctx, [6, 6]),
                                },
                                spanGaps: true
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Comparación Con Los Meses Anteriores",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartOffices_4 = new Chart(chartBarHo4, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($nomOffice as $valor) {
                                            echo '"' . utf8_encode($valor) . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "SATISFECHO",
                                data: [<?php
                                        foreach ($totalSatisGraf_3 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            indexAxis: 'y', // Indica que el eje X debe ser horizontal
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Distribución Por Oficinas",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });


                    chartWeek_5 = new Chart(chartBar5, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($semanasMuySatisGraf_1 as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "MUY SATISFECHO",
                                data: [<?php
                                        foreach ($totalMuySatisGraf_1 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4D',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Calificaciones En Las Semanas De <?php echo ucfirst(strftime('%B', mktime(0, 0, 0, $mes, 1))); ?>",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartMoths_5 = new Chart(chartLine5, {
                        type: "line",
                        data: {
                            labels: [<?php
                                        foreach ($mesAnio as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "MUY SATISFECHO",
                                data: [<?php
                                        foreach ($totalMuySatisGraf_2 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4d',
                                borderWidth: 3,
                                segment: {
                                    borderColor: ctx => skippedWhite(ctx, 'rgb(255,255,255,0.5)'),
                                    borderDash: ctx => skippedWhite(ctx, [6, 6]),
                                },
                                spanGaps: true
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Comparación Con Los Meses Anteriores",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });

                    chartOffices_5 = new Chart(chartBarHo5, {
                        type: "bar",
                        data: {
                            labels: [<?php
                                        foreach ($nomOffice as $valor) {
                                            echo '"' . utf8_encode($valor) . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: "MUY SATISFECHO",
                                data: [<?php
                                        foreach ($totalMuySatisGraf_3 as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: GraficosCartas,
                                backgroundColor: GraficosCartas + '4d',
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            indexAxis: 'y', // Indica que el eje X debe ser horizontal
                            responsive: true,
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico De Distribución Por Oficinas",
                                    color: GraficosCartas, // Color del texto del título
                                    font: {
                                        size: 14,
                                    },
                                },
                                legend: {
                                    labels: {
                                        color: GraficosCartas, // Cambiar el color del texto del conjunto de datos
                                        font: {
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: GraficosCartas,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: GraficosCartas + '81' // Color de las líneas del eje y
                                    }
                                }
                            }
                        },
                    });

                    chartDisRatePie = new Chart(chartDissatisRate, {
                        type: "doughnut",
                        data: {
                            labels: ["<?php echo $totalMuyInsatisGraf_2[4] ?>-MUY INSATISFECHO", "<?php echo $totalInsatisGraf_2[4] ?>-INSATISFECHO"],
                            datasets: [{
                                label: "Cantidad Total",
                                data: [<?php echo $totalMuyInsatisGraf_2[4] . "," . $totalInsatisGraf_2[4] ?>],
                                backgroundColor: [color1, color2],
                                borderColor: ColorPrin,
                                borderWidth: 3,
                            }]
                        },
                        options: {
                            plugins: {
                                legend: {
                                    labels: {
                                        color: Texto1,
                                        font: {
                                            size: 18,
                                            family: 'Franklin Gothic Heavy'

                                        }
                                    }
                                }
                            },
                        }
                    });

                    chartPercentage = new Chart(percentageChart, {
                        type: 'line',
                        data: {
                            labels: [<?php
                                        foreach ($mesAnio as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                    label: 'Cantidad Calif. 1 y 2',
                                    data: [<?php echo $TotalInsatisfaccionMesAnt_4 . "," . $TotalInsatisfaccionMesAnt_3 . "," . $TotalInsatisfaccionMesAnt_2 . "," . $TotalInsatisfaccionMesAnt_1 . "," . $TotalInsatisfaccionActual; ?>],
                                    borderColor: color1,
                                    backgroundColor: color1 + '4d',
                                    borderWidth: 4,
                                    segment: {
                                        borderColor: ctx => down(ctx, color3),
                                    },
                                    spanGaps: true
                                },
                                {
                                    label: 'Cantidad Porcentual',
                                    data: [<?php echo round($TasaInsatisfaccionMesAnt_4, 1) . "," . round($TasaInsatisfaccionMesAnt_3, 1) . "," . round($TasaInsatisfaccionMesAnt_2, 1) . "," . round($TasaInsatisfaccionMesAnt_1, 1) . "," . round($TasaInsatisfaccionActual, 1); ?>],
                                    borderColor: color2,
                                    backgroundColor: color2 + "4d",
                                    borderWidth: 4,
                                    segment: {
                                        borderColor: ctx => down(ctx, color5),
                                    },
                                    spanGaps: true
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                legend: {
                                    labels: {
                                        color: Texto1,
                                        font: {
                                            size: 14,
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: Texto1,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: Texto1 + "4d", // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: Texto1,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: Texto1 + "4d", // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });
                    chartTrends = new Chart(trendChart, {
                        type: 'line',
                        data: {
                            labels: [<?php
                                        foreach ($nomDias as $valor) {
                                            echo '"' . $valor . '",';
                                        }
                                        ?>],
                            datasets: [{
                                label: 'Cantidad',
                                data: [<?php
                                        foreach ($totalDias as $valor) {
                                            echo $valor . ',';
                                        }
                                        ?>],
                                borderColor: color6,
                                backgroundColor: color6 + "4d",
                                borderWidth: 3,
                                segment: {
                                    borderColor: ctx => skipped(ctx, Texto1),
                                    borderDash: ctx => skipped(ctx, [6, 6]),
                                },
                                spanGaps: true
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            },
                            plugins: {
                                title: {
                                    display: true,
                                    text: "Grafico Total De Calificaciones En El Mes Enero",
                                    color: Texto1, // Color del texto del título
                                    font: {
                                        size: 14,
                                        family: 'Franklin Gothic Heavy'
                                    }
                                },
                                legend: {
                                    labels: {
                                        color: Texto1,
                                        font: {
                                            size: 14,
                                            family: 'Franklin Gothic Heavy'
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    ticks: {
                                        color: Texto1,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: Texto1 + "4d", // Color de las líneas del eje y
                                    }
                                },
                                y: {
                                    ticks: {
                                        color: Texto1,
                                        font: {
                                            size: 14,
                                        },
                                    },
                                    grid: {
                                        color: Texto1 + "4d", // Color de las líneas del eje y
                                    }
                                }
                            }
                        }
                    });
                }, 100);
                created = true;
            }

            cargarGraficos();

            darkModeInput.addEventListener("click", function() {
                cargarGraficos();
            });
            greyScaleInput.addEventListener("click", function() {
                cargarGraficos();
            });
            yellowBlackInput.addEventListener("click", function() {
                cargarGraficos();
            });
            contrastInput.addEventListener("click", function() {
                cargarGraficos();
            });
        });
    </script>
</body>

</html>