document.addEventListener('DOMContentLoaded', function() {

const calif_container = document.getElementById("calif-container");
    
const Calif_1 = document.getElementById("Calif_1");
const Calif_2 = document.getElementById("Calif_2");
const Calif_3 = document.getElementById("Calif_3");
const Calif_4 = document.getElementById("Calif_4");
const Calif_5 = document.getElementById("Calif_5");

const Abrir_1 = document.getElementById("Abrir_1");
const Abrir_2 = document.getElementById("Abrir_2");
const Abrir_3 = document.getElementById("Abrir_3");
const Abrir_4 = document.getElementById("Abrir_4");
const Abrir_5 = document.getElementById("Abrir_5");

const porcentajes_1 = document.getElementById("porcentajes_1");
const porcentajes_2 = document.getElementById("porcentajes_2");
const porcentajes_3 = document.getElementById("porcentajes_3");
const porcentajes_4 = document.getElementById("porcentajes_4");
const porcentajes_5 = document.getElementById("porcentajes_5");

const chartBarContainer_1 = document.getElementById("chartBarContainer_1");
const chartBarContainer_2 = document.getElementById("chartBarContainer_2");
const chartBarContainer_3 = document.getElementById("chartBarContainer_3");
const chartBarContainer_4 = document.getElementById("chartBarContainer_4");
const chartBarContainer_5 = document.getElementById("chartBarContainer_5");

const chartLineContainer_1 = document.getElementById("chartLineContainer_1");
const chartLineContainer_2 = document.getElementById("chartLineContainer_2");
const chartLineContainer_3 = document.getElementById("chartLineContainer_3");
const chartLineContainer_4 = document.getElementById("chartLineContainer_4");
const chartLineContainer_5 = document.getElementById("chartLineContainer_5");

const statistic_1 = document.getElementById("statistic_1");
const statistic_2 = document.getElementById("statistic_2");
const statistic_3 = document.getElementById("statistic_3");
const statistic_4 = document.getElementById("statistic_4");
const statistic_5 = document.getElementById("statistic_5");

const chartOfiice1 = document.getElementById("chartOfiice1");
const chartOfiice2 = document.getElementById("chartOfiice2");
const chartOfiice3 = document.getElementById("chartOfiice3");
const chartOfiice4 = document.getElementById("chartOfiice4");
const chartOfiice5 = document.getElementById("chartOfiice5");

function functionCal1() {
    if (Calif_1.classList.contains("InActive1")) {

        Calif_1.classList.add("active");
        Calif_2.classList.add("disActive");
        Calif_3.classList.add("disActive");
        Calif_4.classList.add("disActive");
        Calif_5.classList.add("disActive");

        Calif_1.classList.remove("InActive1");
        calif_container.classList.add("activeContainer");

        chartBarContainer_1.classList.add("ActiveCharts");
        chartBarContainer_1.classList.remove("DisActiveCharts");

        chartLineContainer_1.classList.add("ActiveCharts");
        chartLineContainer_1.classList.remove("DisActiveCharts");

        statistic_1.classList.add("ActiveStatistic");
        statistic_1.classList.remove("DisActiveStatistic");

        porcentajes_1.classList.add("ActivePorcentajes");
        porcentajes_1.classList.remove("DisActivePorcentajes");

        chartOfiice1.classList.add("ActiveChartOffice");
        chartOfiice1.classList.remove("DisActiveChartOffice");

    } else if (Calif_1.classList.contains("active")) {

        chartBarContainer_1.classList.remove("ActiveCharts");
        chartBarContainer_1.classList.add("DisActiveCharts");

        chartLineContainer_1.classList.remove("ActiveCharts");
        chartLineContainer_1.classList.add("DisActiveCharts");

        statistic_1.classList.remove("ActiveStatistic");
        statistic_1.classList.add("DisActiveStatistic");

        porcentajes_1.classList.remove("ActivePorcentajes");
        porcentajes_1.classList.add("DisActivePorcentajes");

        chartOfiice1.classList.remove("ActiveChartOffice");
        chartOfiice1.classList.add("DisActiveChartOffice");

        Calif_1.classList.add("InActive1");
        Calif_2.classList.remove("disActive");
        Calif_3.classList.remove("disActive");
        Calif_4.classList.remove("disActive");
        Calif_5.classList.remove("disActive");

        Calif_1.classList.remove("active");
        calif_container.classList.remove("activeContainer");
    }
}

function functionCal2() {
    if (Calif_2.classList.contains("InActive2")) {

        Calif_2.classList.add("active");
        Calif_1.classList.add("disActive");
        Calif_3.classList.add("disActive");
        Calif_4.classList.add("disActive");
        Calif_5.classList.add("disActive");

        Calif_2.classList.remove("InActive2");
        calif_container.classList.add("activeContainer");

        chartBarContainer_2.classList.add("ActiveCharts");
        chartBarContainer_2.classList.remove("DisActiveCharts");

        chartLineContainer_2.classList.add("ActiveCharts");
        chartLineContainer_2.classList.remove("DisActiveCharts");

        statistic_2.classList.add("ActiveStatistic");
        statistic_2.classList.remove("DisActiveStatistic");

        porcentajes_2.classList.add("ActivePorcentajes");
        porcentajes_2.classList.remove("DisActivePorcentajes");

        chartOfiice2.classList.add("ActiveChartOffice");
        chartOfiice2.classList.remove("DisActiveChartOffice");

    } else if (Calif_2.classList.contains("active")) {

        chartBarContainer_2.classList.remove("ActiveCharts");
        chartBarContainer_2.classList.add("DisActiveCharts");

        chartLineContainer_2.classList.remove("ActiveCharts");
        chartLineContainer_2.classList.add("DisActiveCharts");

        statistic_2.classList.remove("ActiveStatistic");
        statistic_2.classList.add("DisActiveStatistic");

        porcentajes_2.classList.remove("ActivePorcentajes");
        porcentajes_2.classList.add("DisActivePorcentajes");

        chartOfiice2.classList.remove("ActiveChartOffice");
        chartOfiice2.classList.add("DisActiveChartOffice");

        Calif_2.classList.add("InActive2");
        Calif_1.classList.remove("disActive");
        Calif_3.classList.remove("disActive");
        Calif_4.classList.remove("disActive");
        Calif_5.classList.remove("disActive");
    
        Calif_2.classList.remove("active");
        calif_container.classList.remove("activeContainer");
    }
}

function functionCal3() {
    if (Calif_3.classList.contains("InActive3")) {

        Calif_3.classList.add("active");
        Calif_2.classList.add("disActive");
        Calif_1.classList.add("disActive");
        Calif_4.classList.add("disActive");
        Calif_5.classList.add("disActive");

        Calif_3.classList.remove("InActive3");
        calif_container.classList.add("activeContainer");

        chartBarContainer_3.classList.add("ActiveCharts");
        chartBarContainer_3.classList.remove("DisActiveCharts");

        chartLineContainer_3.classList.add("ActiveCharts");
        chartLineContainer_3.classList.remove("DisActiveCharts");

        statistic_3.classList.add("ActiveStatistic");
        statistic_3.classList.remove("DisActiveStatistic");

        porcentajes_3.classList.add("ActivePorcentajes");
        porcentajes_3.classList.remove("DisActivePorcentajes");

        chartOfiice3.classList.add("ActiveChartOffice");
        chartOfiice3.classList.remove("DisActiveChartOffice");

    } else if (Calif_3.classList.contains("active")) {

        chartBarContainer_3.classList.remove("ActiveCharts");
        chartBarContainer_3.classList.add("DisActiveCharts");

        chartLineContainer_3.classList.remove("ActiveCharts");
        chartLineContainer_3.classList.add("DisActiveCharts");

        statistic_3.classList.remove("ActiveStatistic");
        statistic_3.classList.add("DisActiveStatistic");

        porcentajes_3.classList.remove("ActivePorcentajes");
        porcentajes_3.classList.add("DisActivePorcentajes");

        chartOfiice3.classList.remove("ActiveChartOffice");
        chartOfiice3.classList.add("DisActiveChartOffice");

        Calif_3.classList.add("InActive3");
        Calif_2.classList.remove("disActive");
        Calif_1.classList.remove("disActive");
        Calif_4.classList.remove("disActive");
        Calif_5.classList.remove("disActive");
    
        Calif_3.classList.remove("active");
        calif_container.classList.remove("activeContainer");
    }
}

function functionCal4() {
    if (Calif_4.classList.contains("InActive1")) {

        Calif_4.classList.add("active");
        Calif_2.classList.add("disActive");
        Calif_3.classList.add("disActive");
        Calif_1.classList.add("disActive");
        Calif_5.classList.add("disActive");

        Calif_4.classList.remove("InActive1");
        calif_container.classList.add("activeContainer");

        chartBarContainer_4.classList.add("ActiveCharts");
        chartBarContainer_4.classList.remove("DisActiveCharts");

        chartLineContainer_4.classList.add("ActiveCharts");
        chartLineContainer_4.classList.remove("DisActiveCharts");

        statistic_4.classList.add("ActiveStatistic");
        statistic_4.classList.remove("DisActiveStatistic");

        porcentajes_4.classList.add("ActivePorcentajes");
        porcentajes_4.classList.remove("DisActivePorcentajes");

        chartOfiice4.classList.add("ActiveChartOffice");
        chartOfiice4.classList.remove("DisActiveChartOffice");

    } else if (Calif_4.classList.contains("active")) {

        chartBarContainer_4.classList.remove("ActiveCharts");
        chartBarContainer_4.classList.add("DisActiveCharts");

        chartLineContainer_4.classList.remove("ActiveCharts");
        chartLineContainer_4.classList.add("DisActiveCharts");

        statistic_4.classList.remove("ActiveStatistic");
        statistic_4.classList.add("DisActiveStatistic");

        porcentajes_4.classList.remove("ActivePorcentajes");
        porcentajes_4.classList.add("DisActivePorcentajes");

        chartOfiice4.classList.remove("ActiveChartOffice");
        chartOfiice4.classList.add("DisActiveChartOffice");

        Calif_4.classList.add("InActive1");
        Calif_2.classList.remove("disActive");
        Calif_3.classList.remove("disActive");
        Calif_1.classList.remove("disActive");
        Calif_5.classList.remove("disActive");
    
        Calif_4.classList.remove("active");
        calif_container.classList.remove("activeContainer");
    }
}

function functionCal5() {
    if (Calif_5.classList.contains("InActive2")) {

        Calif_5.classList.add("active");
        Calif_2.classList.add("disActive");
        Calif_3.classList.add("disActive");
        Calif_4.classList.add("disActive");
        Calif_1.classList.add("disActive");

        Calif_5.classList.remove("InActive2");
        calif_container.classList.add("activeContainer");

        chartBarContainer_5.classList.add("ActiveCharts");
        chartBarContainer_5.classList.remove("DisActiveCharts");

        chartLineContainer_5.classList.add("ActiveCharts");
        chartLineContainer_5.classList.remove("DisActiveCharts");

        statistic_5.classList.add("ActiveStatistic");
        statistic_5.classList.remove("DisActiveStatistic");

        porcentajes_5.classList.add("ActivePorcentajes");
        porcentajes_5.classList.remove("DisActivePorcentajes");

        chartOfiice5.classList.add("ActiveChartOffice");
        chartOfiice5.classList.remove("DisActiveChartOffice");

    } else if (Calif_5.classList.contains("active")) {

        chartBarContainer_5.classList.remove("ActiveCharts");
        chartBarContainer_5.classList.add("DisActiveCharts");

        chartLineContainer_5.classList.remove("ActiveCharts");
        chartLineContainer_5.classList.add("DisActiveCharts");

        statistic_5.classList.remove("ActiveStatistic");
        statistic_5.classList.add("DisActiveStatistic");

        porcentajes_5.classList.remove("ActivePorcentajes");
        porcentajes_5.classList.add("DisActivePorcentajes");

        chartOfiice5.classList.remove("ActiveChartOffice");
        chartOfiice5.classList.add("DisActiveChartOffice");

        Calif_5.classList.add("InActive2");
        Calif_2.classList.remove("disActive");
        Calif_3.classList.remove("disActive");
        Calif_4.classList.remove("disActive");
        Calif_1.classList.remove("disActive");
    
        Calif_5.classList.remove("active");
        calif_container.classList.remove("activeContainer");
    }
}

Abrir_1.addEventListener("click", functionCal1);
Abrir_2.addEventListener("click", functionCal2);
Abrir_3.addEventListener("click", functionCal3);
Abrir_4.addEventListener("click", functionCal4);
Abrir_5.addEventListener("click", functionCal5);
});