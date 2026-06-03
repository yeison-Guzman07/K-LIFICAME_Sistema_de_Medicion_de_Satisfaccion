///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO DEL TOTAL DE CALIFICACIONES  /////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var total = document.getElementById("total").getContext("2d");

    var myChart = new Chart(total, {
        type: "bar",
        data: {
            labels: ["Cantidades"],
            datasets: [{
                label: "Muy Insatisfecho",
                data: [37],
                borderColor: '#FF2A50',
                backgroundColor: '#FF2A504D',
                borderWidth: 3,
            },
            {
                label: "Insatisfecho",
                data: [3],
                borderColor: '#E47202',
                backgroundColor: '#E472024D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Neutral",
                data: [13],
                borderColor: '#FFDB00',
                backgroundColor: '#FFDB004D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Satisfecho",
                data: [17],
                borderColor: '#88E74F',
                backgroundColor: '#88E74F4D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Muy Satisfecho",
                data: [459],
                borderColor: '#01C302',
                backgroundColor: '#01C3024D',
                borderWidth: 3,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Grafico De Las Calificaciones Totales Durante La Prueba Piloto"
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO DE LAS INSATISFACCIONES  /////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var dissatisfaction = document.getElementById("graphic").getContext("2d");

    var myChart = new Chart(dissatisfaction, {
        type: "line",
        data: {
            labels: ["Octubre", "Noviembre", "Diciembre", "Enero"],
            datasets: [{
                label: "Muy Insatisfecho",
                data: [4, 8, 21, 4],
                borderColor: '#FF2A50',
                backgroundColor: '#FF2A504D',
                borderWidth: 3,
            },
            {
                label: "Insatisfecho",
                data: [0, 0, 3, 0],
                borderColor: '#E47202',
                backgroundColor: '#E472024D',
                borderWidth: 3,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Histograma De Calificaciones Negativas Durante La Prueba Piloto"
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO DE LOS 4 MESES EN GENERAL  //////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var amountGeneral = document.getElementById("amountGeneral").getContext("2d");

    var myChart = new Chart(amountGeneral, {
        type: "bar",
        data: {
            labels: ["Octubre", "Noviembre", "Diciembre", "Enero"],
            datasets: [{
                label: "Muy Insatisfecho",
                data: [4,3,2,1],
                borderColor: '#FF2A50',
                backgroundColor: '#FF2A504D',
                borderWidth: 3,
            },
            {
                label: "Insatisfecho",
                data: [3,2,1,4],
                borderColor: '#E47202',
                backgroundColor: '#E472024D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Neutral",
                data: [1,2,3,4],
                borderColor: '#FFDB00',
                backgroundColor: '#FFDB004D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Satisfecho",
                data: [3,4,1,2],
                borderColor: '#88E74F',
                backgroundColor: '#88E74F4D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Muy Satisfecho",
                data: [3,1,2,4],
                borderColor: '#01C302',
                backgroundColor: '#01C3024D',
                borderWidth: 3,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Cantidad Total De Calificaciones Durante La Prueba Piloto"
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });


///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO DEL TOTAL POR OFICINAS  //////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var totalOffice = document.getElementById("totalOffice").getContext("2d");

    var myChart = new Chart(totalOffice, {
        type: "bar",
        data: {
            labels: ["Atencion Al Ciudadano", "Vicerrectoria Academica"],
            datasets: [{
                label: "Muy Insatisfecho",
                data: [4,3],
                borderColor: '#FF2A50',
                backgroundColor: '#FF2A504D',
                borderWidth: 3,
            },
            {
                label: "Insatisfecho",
                data: [3,2],
                borderColor: '#E47202',
                backgroundColor: '#E472024D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Neutral",
                data: [1,2],
                borderColor: '#FFDB00',
                backgroundColor: '#FFDB004D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Satisfecho",
                data: [3,4],
                borderColor: '#88E74F',
                backgroundColor: '#88E74F4D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Muy Satisfecho",
                data: [3,1],
                borderColor: '#01C302',
                backgroundColor: '#01C3024D',
                borderWidth: 3,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Cantidad Total De Calificaciones De Las Oficinas Durante La Prueba Piloto"
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO INSATISFACCION OFICINAS  /////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var dissatisfactionOffice = document.getElementById("graphicOffice").getContext("2d");

var myChart = new Chart(dissatisfactionOffice, {
    type: "bar",
    data: {
        labels: ["Octubre", "Noviembre", "Diciembre", "Enero"],
        datasets: [{
            label: "Muy Insatisfecho Vicerrectoria",
            data: [3, 7, 21, 6],
            borderColor: '#FF2A50',
            backgroundColor: '#FF2A504D',
            borderWidth: 3,
        },
        {
            label: "Insatisfecho Vicerrectoria",
            data: [0, 0, 2, 0],
            borderColor: '#E47202',
            backgroundColor: '#E472024D',
            borderWidth: 3,
            fill: false
        },
        {
            label: "Muy Insatisfecho Atencion",
            data: [1, 1, 0, 0],
            borderColor: '#4495E1',
            backgroundColor: '#4495E14D',
            borderWidth: 3,
        },
        {
            label: "Insatisfecho Atencion",
            data: [0, 0, 1, 0],
            borderColor: '#CE53E0',
            backgroundColor: '#CE53E04D',
            borderWidth: 3,
            fill: false
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: "Histograma De Calificaciones Negativas De Las Oficinas Durante La Prueba Piloto"
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO DE LOS 4 MESES OFICINA 1  //////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var amountOffice1 = document.getElementById("amountOffice1").getContext("2d");

    var myChart = new Chart(amountOffice1, {
        type: "bar",
        data: {
            labels: ["Octubre", "Noviembre", "Diciembre", "Enero"],
            datasets: [{
                label: "Muy Insatisfecho",
                data: [4,3,2,1],
                borderColor: '#FF2A50',
                backgroundColor: '#FF2A504D',
                borderWidth: 3,
            },
            {
                label: "Insatisfecho",
                data: [3,2,1,4],
                borderColor: '#E47202',
                backgroundColor: '#E472024D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Neutral",
                data: [1,2,3,4],
                borderColor: '#FFDB00',
                backgroundColor: '#FFDB004D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Satisfecho",
                data: [3,4,1,2],
                borderColor: '#88E74F',
                backgroundColor: '#88E74F4D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Muy Satisfecho",
                data: [3,1,2,4],
                borderColor: '#01C302',
                backgroundColor: '#01C3024D',
                borderWidth: 3,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Cantidad Total De Calificaciones En Atencion Al Ciudadano Durante La Prueba Piloto"
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////  GRAFICO DE LOS 4 MESES OFICINA 2  //////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////

var amountOffice2 = document.getElementById("amountOffice2").getContext("2d");

    var myChart = new Chart(amountOffice2, {
        type: "bar",
        data: {
            labels: ["Octubre", "Noviembre", "Diciembre", "Enero"],
            datasets: [{
                label: "Muy Insatisfecho",
                data: [4,3,2,1],
                borderColor: '#FF2A50',
                backgroundColor: '#FF2A504D',
                borderWidth: 3,
            },
            {
                label: "Insatisfecho",
                data: [3,2,1,4],
                borderColor: '#E47202',
                backgroundColor: '#E472024D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Neutral",
                data: [1,2,3,4],
                borderColor: '#FFDB00',
                backgroundColor: '#FFDB004D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Satisfecho",
                data: [3,4,1,2],
                borderColor: '#88E74F',
                backgroundColor: '#88E74F4D',
                borderWidth: 3,
                fill: false
            },
            {
                label: "Muy Satisfecho",
                data: [3,1,2,4],
                borderColor: '#01C302',
                backgroundColor: '#01C3024D',
                borderWidth: 3,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Cantidad Total De Calificaciones En Vicerrectoria Academica Durante La Prueba Piloto"
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });