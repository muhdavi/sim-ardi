<x-app-layout>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <x-slot name="header">
        <style>
            @import "https://code.highcharts.com/css/highcharts.css";

            .highcharts-pie-series .highcharts-point {
                stroke: #ede;
                stroke-width: 2px;
            }

            .highcharts-pie-series .highcharts-data-label-connector {
                stroke: silver;
                stroke-dasharray: 2, 2;
                stroke-width: 2px;
            }

            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 320px;
                max-width: 600px;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }
        </style>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var pdpk_lk = <?php echo $pdpk_lk ?>;
        var pdpk_pr = <?php echo $pdpk_pr ?>;
        var jumlah_pegawai = <?php echo $jumlah_pegawai ?>;
        var tahun = 2022;

        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: `Pegawai Kabupaten Aceh Timur Tahun ${tahun}`
            },
            subtitle: {
                text: `Berdasarkan Arsip Digital (${jumlah_pegawai} Pegawai)`
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Sebanyak',
                colorByPoint: true,
                data: [{
                    name: 'Telah Memiliki Arsip',
                    y: pdpk_lk,
                    color: "#0090d0",
                    sliced: true,
                    selected: true
                }, {
                    name: 'Belum Memiliki Arsip',
                    y: pdpk_pr,
                    color: "#d7127a"
                }]
            }]
        });
    </script>
</x-app-layout>
