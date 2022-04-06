var script = document.createElement("script");
script.src = "https://code.jquery.com/jquery-3.4.1.min.js";
script.type = "text/javascript";
document.getElementsByTagName("head")[0].appendChild(script);

$.ajax({
    type: "GET",
    url: "/admin/getInfo",
    success: function (data) {
        demoOptions["radial-bar-beklenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["beklenen"];
        demoOptions["radial-bar-evrakBekleyen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakBekleyen"];
        demoOptions["radial-bar-tamamlanan"].plotOptions.radialBar.dataLabels.total.label = data.msg["tamamlanan"];
        demoOptions["radial-bar-evrakIncelenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakIncelenen"];
        demoOptions["radial-bar-eksikEvrak"].plotOptions.radialBar.dataLabels.total.label = data.msg["eksikEvrak"];
        demoOptions["radial-bar-redEdilen"].plotOptions.radialBar.dataLabels.total.label = data.msg["redEdilen"];
        updateCharts();
    },
});
setInterval(function () {
    $.ajax({
        type: "GET",
        url: "/admin/getInfo",
        success: function (data) {
            demoOptions["radial-bar-beklenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["beklenen"];
            demoOptions["radial-bar-evrakBekleyen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakBekleyen"];
            demoOptions["radial-bar-tamamlanan"].plotOptions.radialBar.dataLabels.total.label = data.msg["tamamlanan"];
            demoOptions["radial-bar-evrakIncelenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakIncelenen"];
            demoOptions["radial-bar-eksikEvrak"].plotOptions.radialBar.dataLabels.total.label = data.msg["eksikEvrak"];
            demoOptions["radial-bar-redEdilen"].plotOptions.radialBar.dataLabels.total.label = data.msg["redEdilen"];
            updateCharts();
        },
    });
    $.ajax({
        type: "GET",
        url: "/personal/getInfo",
        success: function (data) {
            demoOptions["radial-bar-beklenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["beklenen"];
            demoOptions["radial-bar-evrakBekleyen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakBekleyen"];
            demoOptions["radial-bar-tamamlanan"].plotOptions.radialBar.dataLabels.total.label = data.msg["tamamlanan"];
            demoOptions["radial-bar-evrakIncelenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakIncelenen"];
            demoOptions["radial-bar-eksikEvrak"].plotOptions.radialBar.dataLabels.total.label = data.msg["eksikEvrak"];
            demoOptions["radial-bar-redEdilen"].plotOptions.radialBar.dataLabels.total.label = data.msg["redEdilen"];
            updateCharts();
        },
    });
}, 15000);

$.ajax({
    type: "GET",
    url: "/personal/getInfo",
    success: function (data) {
        demoOptions["radial-bar-beklenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["beklenen"];
        demoOptions["radial-bar-evrakBekleyen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakBekleyen"];
        demoOptions["radial-bar-tamamlanan"].plotOptions.radialBar.dataLabels.total.label = data.msg["tamamlanan"];
        demoOptions["radial-bar-evrakIncelenen"].plotOptions.radialBar.dataLabels.total.label = data.msg["evrakIncelenen"];
        demoOptions["radial-bar-eksikEvrak"].plotOptions.radialBar.dataLabels.total.label = data.msg["eksikEvrak"];
        demoOptions["radial-bar-redEdilen"].plotOptions.radialBar.dataLabels.total.label = data.msg["redEdilen"];
        updateCharts();
    },
});
let demoOptions = {
    "area-small-blue": {
        series: [
            {
                data: [
                    26, 26, 25, 25, 25, 24, 25, 24, 24, 25, 25, 26,
                    24, 25, 24, 25, 25, 26,
                ],
            },
        ],
        chart: {
            height: 180,
            type: "area",
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#326BFF"],
        stroke: {
            curve: "straight",
            width: 2,
        },
        fill: {
            type: "gradient",
            colors: ["#C5D8FF"],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.9,
                stops: [0, 100],
            },
        },
    },
    "area-small-indigo": {
        series: [
            {
                data: [
                    26, 26, 25, 25, 25, 24, 25, 24, 24, 25, 25, 26,
                    24, 25, 24, 25, 25, 26,
                ],
            },
        ],
        chart: {
            height: 180,
            type: "area",
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#7635FF"],
        stroke: {
            curve: "straight",
            width: 2,
        },
        fill: {
            type: "gradient",
            colors: ["#E1D2FF"],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.9,
                stops: [0, 100],
            },
        },
    },
    "area-small-orange": {
        series: [
            {
                data: [
                    26, 26, 25, 25, 25, 24, 25, 24, 24, 25, 25, 26,
                    24, 25, 24, 25, 25, 26,
                ],
            },
        ],
        chart: {
            height: 180,
            type: "area",
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#F44F1C"],
        stroke: {
            curve: "straight",
            width: 2,
        },
        fill: {
            type: "gradient",
            colors: ["#FFD6CA"],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.9,
                stops: [0, 100],
            },
        },
    },
    "area-small-green": {
        series: [
            {
                data: [
                    26, 26, 25, 25, 25, 24, 25, 24, 24, 25, 25, 26,
                    24, 25, 24, 25, 25, 26,
                ],
            },
        ],
        chart: {
            height: 180,
            type: "area",
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#25C248"],
        stroke: {
            curve: "straight",
            width: 2,
        },
        fill: {
            type: "gradient",
            colors: ["#D2FFDC"],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.9,
                stops: [0, 100],
            },
        },
    },
    "columns-stacked": {
        series: [
            {
                data: [20, 10, 18, 30, 10, 20, 10, 8, 15],
            },
            {
                data: [30, 40, 32, 20, 40, 30, 40, 42, 35],
            },
        ],
        chart: {
            type: "bar",
            height: 100,
            stacked: true,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#7635FF", "#ECEEFF"],
        fill: {
            opacity: 1,
        },
        plotOptions: {
            bar: {
                borderRadius: 6,
                endingShape: "rounded",
                columnWidth: "60%",
            },
        },
    },
    "columns-stacked-blue": {
        series: [
            {
                data: [20, 10, 18, 30, 10, 20, 10, 8, 15],
            },
            {
                data: [30, 40, 32, 20, 40, 30, 40, 42, 35],
            },
        ],
        chart: {
            type: "bar",
            height: 100,
            stacked: true,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#326BFF", "#ECEEFF"],
        fill: {
            opacity: 1,
        },
        plotOptions: {
            bar: {
                borderRadius: 5,
                endingShape: "rounded",
                columnWidth: "60%",
            },
        },
    },
    "columns-thin": {
        series: [
            {
                name: "Unique visitors",
                data: [
                    99200, 68400, 72111, 65020, 62000, 71000, 84232,
                    84232,
                ],
            },
            {
                name: "Total visitors",
                data: [
                    112001, 92402, 86240, 97201, 72102, 102011,
                    98212, 98212,
                ],
            },
        ],
        chart: {
            type: "bar",
            height: 300,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            colors: ["transparent"],
            width: 4,
        },
        colors: ["#8128DE", "#382CDD"],
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        plotOptions: {
            bar: {
                borderRadius: 5,
                columnWidth: 20,
            },
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
            ],
        },
        __variants: {
            orange: {
                colors: ["#C3C9FF", "#FA9246"],
            },
        },
    },

    columns: {
        series: [
            {
                data: [
                    300, 400, 200, 350, 500, 400, 300, 200, 100,
                    400, 500, 300, 400, 200, 100, 300, 400, 200,
                    350, 500, 400, 300, 200, 100, 400, 500, 300,
                    400, 200, 100, 250,
                ],
            },
        ],
        chart: {
            height: 200,
            type: "bar",
            toolbar: {
                show: false,
            },
        },
        grid: {
            show: true,
        },
        dataLabels: {
            enabled: false,
        },
        colors: ["#C3C9FF"],
        xaxis: {
            type: "integer",
            categories: [
                1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28,
                29, 30, 31,
            ],
            labels: {
                show: true,
                hideOverlappingLabels: false,
                showDuplicates: true,
                trim: false,
            },
        },
        yaxis: {
            opposite: true,
            labels: {
                show: true,
                align: "right",
            },
        },
        plotOptions: {
            bar: {
                borderRadius: 5,
            },
        },
    },

    "radial-bar-beklenen": {
        series: [54],
        chart: {
            type: "radialBar",
            height: 170,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#727355"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            radialBar: {
                startAngle: -120,
                endAngle: 545,
                hollow: {
                    margin: 15,
                    size: "70%",
                },
                track: {
                    background: "#EBEAFC",
                    strokeWidth: "97%",
                    margin: 5,
                },
                dataLabels: {
                    value: {
                        fontSize: 12,
                    },
                    total: {
                        show: true,
                        label: 0,
                        fontSize: 28,
                        formatter: () => "Bekleyenler",
                    },
                },
            },
        },
    },

    "radial-bar-evrakBekleyen": {
        series: [54],
        chart: {
            type: "radialBar",
            height: 170,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#7534FF"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            radialBar: {
                startAngle: -120,
                endAngle: 545,
                hollow: {
                    margin: 15,
                    size: "70%",
                },
                track: {
                    background: "#EBEAFC",
                    strokeWidth: "97%",
                    margin: 5,
                },
                dataLabels: {
                    value: {
                        fontSize: 12,
                    },
                    total: {
                        show: true,
                        label: 0,
                        fontSize: 28,
                        formatter: () => "Evrak Bekleyenler",
                    },
                },
            },
        },
    },
    "radial-bar-tamamlanan": {
        series: [54],
        chart: {
            type: "radialBar",
            height: 170,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#31E944"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            radialBar: {
                startAngle: -120,
                endAngle: 545,
                hollow: {
                    margin: 15,
                    size: "70%",
                },
                track: {
                    background: "#EBEAFC",
                    strokeWidth: "97%",
                    margin: 5,
                },
                dataLabels: {
                    value: {
                        fontSize: 12,
                    },
                    total: {
                        show: true,
                        label: 0,
                        fontSize: 28,
                        formatter: () => "Tamamlananlar",
                    },
                },
            },
        },
    },
    "radial-bar-evrakIncelenen": {
        series: [54],
        chart: {
            type: "radialBar",
            height: 170,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#326BFF"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            radialBar: {
                startAngle: -120,
                endAngle: 545,
                hollow: {
                    margin: 15,
                    size: "70%",
                },
                track: {
                    background: "#EBEAFC",
                    strokeWidth: "97%",
                    margin: 5,
                },
                dataLabels: {
                    value: {
                        fontSize: 12,
                    },
                    total: {
                        show: true,
                        label:0,
                        fontSize: 28,
                        formatter: () => "Evrak Inceleniyor",
                    },
                },
            },
        },

    },
    "radial-bar-eksikEvrak": {
        series: [54],
        chart: {
            type: "radialBar",
            height: 170,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#FF8B36"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            radialBar: {
                startAngle: -120,
                endAngle: 545,
                hollow: {
                    margin: 15,
                    size: "70%",
                },
                track: {
                    background: "#EBEAFC",
                    strokeWidth: "97%",
                    margin: 5,
                },
                dataLabels: {
                    value: {
                        fontSize: 12,
                    },
                    total: {
                        show: true,
                        label: 0,
                        fontSize: 28,
                        formatter: () => "Eksik Evrak",
                    },
                },
            },
        },

    },
    "radial-bar-redEdilen": {
        series: [54],
        chart: {
            type: "radialBar",
            height: 170,
            sparkline: {
                enabled: true,
            },
        },
        colors: ["#f54242"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            radialBar: {
                startAngle: -120,
                endAngle: 545,
                hollow: {
                    margin: 15,
                    size: "70%",
                },
                track: {
                    background: "#EBEAFC",
                    strokeWidth: "97%",
                    margin: 5,
                },
                dataLabels: {
                    value: {
                        fontSize: 12,
                    },
                    total: {
                        show: true,
                        label: 0,
                        fontSize: 28,
                        formatter: () => "Red Edilenler",
                    },
                },
            },
        },

    },
    donut: {
        series: [2445, 2445, 2445],
        chart: {
            type: "donut",
            width: "100%",
            height: 240,
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        colors: ["#FA9246", "#326BFF", "#C3C9FF"],
        stroke: {
            lineCap: "round",
        },
        plotOptions: {
            pie: {
                donut: {
                    size: "80%",
                    labels: {
                        show: true,
                        total: {
                            label: "Customers",
                            showAlways: true,
                            show: true,
                        },
                    },
                },
            },
            stroke: {
                colors: undefined,
            },
        },
    },
    "pie-chart": {
        series: [33, 36, 31],
        chart: {
            type: "pie",
            width: "100%",
            height: 240,
        },
        legend: {
            show: false,
        },
        colors: ["transparent", "#326BFF", "#C3C9FF"],
    },
};

const renderedCharts = [];
function updateCharts() {
    if (typeof ApexCharts !== "function") {
        return;
    }

    const chartElements = document.querySelectorAll(".chart");

    chartElements.forEach((chartElement) => {
        if (renderedCharts.includes(chartElement)) {
            return;
        }

        const type = chartElement.getAttribute("data-type");
        const variant = chartElement.getAttribute("data-variant");

        if (typeof demoOptions[type] === "object") {
            let options = demoOptions[type];

            if (
                typeof options["__variants"] === "object" &&
                typeof options["__variants"][variant] === "object"
            ) {
                options = {
                    ...options,
                    ...options["__variants"][variant],
                };
            }

            const chart = new ApexCharts(chartElement, options);
            chart.render();
            renderedCharts.push(chartElement);
        }
    });
}