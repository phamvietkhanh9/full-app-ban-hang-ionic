(function ($) {
    'use strict';
    if ($("#chart-10").length) {
        var Options = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false,
                },
            },

            stroke: {
                colors: [colors[5]],
                curve: 'straight',
                width: 3
            },
            fill: {
                opacity: 0.7,
                gradient: {
                    enabled: false
                }
            },
            series: [{
                data: [0, 68, 50, 98, 62, 43, 85, 71, 25, 14, 89, 25, 25, 32, 68, 0]
            }],
            yaxis: {
                min: 0
            },
            colors: colors[5],

        }
        var chart = new ApexCharts(
            document.querySelector("#chart-10"),
            Options
        );

        chart.render();
    }

    if ($("#chart-11").length) {
        var Options = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false,
                },
            },

            stroke: {
                colors: [colors[0]],
                curve: 'straight',
                width: 3
            },
            fill: {
                opacity: 0.7,
                gradient: {
                    enabled: false
                }
            },
            series: [{
                data: [12, 98, 50, 68, 44, 55, 41, 67, 22, 43]
            }],
            yaxis: {
                min: 0
            },
            colors: colors[0],

        }
        var chart = new ApexCharts(
            document.querySelector("#chart-11"),
            Options
        );

        chart.render();
    }

    if ($("#chart-12").length) {
        var Options = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false,
                },
            },

            stroke: {
                colors: [colors[2]],
                curve: 'straight',
                width: 3
            },
            fill: {
                opacity: 0.7,
                gradient: {
                    enabled: false
                }
            },
            series: [{
                data: [65, 55, 78, 12, 98, 50, 68, 89, 25, 52]
            }],
            yaxis: {
                min: 0
            },
            colors: colors[2],

        }
        var chart = new ApexCharts(
            document.querySelector("#chart-12"),
            Options
        );

        chart.render();
    }

    if ($("#chart-13").length) {
        var Options = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false,
                },
            },

            stroke: {
                colors: [colors[3]],
                curve: 'straight',
                width: 3
            },
            fill: {
                opacity: 0.7,
                gradient: {
                    enabled: false
                }
            },
            series: [{
                data: [12, 57, 12, 98, 50, 68, 66, 78, 12, 43]
            }],
            yaxis: {
                min: 0
            },
            colors: colors[3],

        }
        var chart = new ApexCharts(
            document.querySelector("#chart-13"),
            Options
        );

        chart.render();
    }

    if ($("#chart-14").length) {
        var Options = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false,
                },
            },

            stroke: {
                colors: [colors[6]],
                curve: 'straight',
                width: 3
            },
            fill: {
                opacity: 0.7,
                gradient: {
                    enabled: false
                }
            },
            series: [{
                data: [15, 68, 50, 98, 62, 43]
            }],
            yaxis: {
                min: 0
            },
            colors: colors[6],

        }
        var chart = new ApexCharts(
            document.querySelector("#chart-14"),
            Options
        );

        chart.render();
    }

    if ($("#chart-15").length) {


        var Options = {
            colors: ['#6766e5', '#4db4ff'],

            chart: {
                width: 240,
                type: 'donut',
            },
            series: [44, 55],
            dataLabels: {
                enabled: false
            },
            legend: {

                position: 'bottom',
            }

        }

        var chart = new ApexCharts(
            document.querySelector("#chart-15"),
            Options
        );

        chart.render();
    }

    if ($("#chart-16").length) {
        var Options = {

            chart: {
                height: 300,
                type: 'bar',
                stacked: true,

            },
            colors: ['#6766e5', '#4db4ff'],
            responsive: [{
                breakpoint: 700,
                Options: {
                    legend: {
                        position: 'bottom',
                        offsetX: -10,
                        offsetY: 0
                    }
                }
            }],

            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            series: [{
                name: 'Facebook',
                data: [44, 55, 41, 67, 22, 43]
            }, {
                name: 'Twitter',
                data: [13, 23, 20, 32, 13, 27]
            }],
            xaxis: {
                type: 'datetime',
                categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT', '01/05/2011 GMT', '01/06/2011 GMT'],
            },
            fill: {
                opacity: 1
            },
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-16"),
            Options
        );

        chart.render();

    }
})(window.jQuery);


