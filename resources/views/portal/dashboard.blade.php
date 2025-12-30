@extends('portal.layout.main')

@section('content')
    <div class="cover-all-content">
        <div class="page-title d-flex align-items-center justify-content-between gap-3 flex-wrap">
            <h2>Dashboard</h2>
        </div>
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div
                            class="user-area d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap gap-3">
                            <img src="assets/images/user.png" alt="" style="width: 100px; aspect-ratio: 1">
                            <div class="text-center text-lg-start">
                                <h3 class="text-primary font-25px font-md-32px">Hi, <span class=" font-weight-600">John
                                        Smith</span></h3>
                                <h5 class="text-dark font-16px font-md-20px font-weight-400 m-0">Welcome to Resfoody Admin!
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <p class="m-0 font-16px font-md-18px opacity-07" style="letter-spacing: 0.3px;">Status:</p>
                            <p class="m-0 font-16px font-md-18px font-weight-600" style="color: #27AE60">Approval</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gx-3">
            <div class="col-md-6 col-lg-4">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="{{ asset('assets/images/icons/Total Customers.svg') }}" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">0</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Technicians</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="assets/images/icons/Total Revenue.svg" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">0</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Product</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="assets/images/icons/Total Orders.svg" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">0</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Qoutations</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('extra-js')
    <script>
        window.Promise ||
            document.write(
                '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
            )
        window.Promise ||
            document.write(
                '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
            )
        window.Promise ||
            document.write(
                '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
            )
    </script>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                name: 'Actual',
                data: [{
                        x: '2011',
                        y: 1292,
                        goals: [{
                            name: 'Expected',
                            value: 1400,
                            strokeHeight: 5,
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2012',
                        y: 4432,
                        goals: [{
                            name: 'Expected',
                            value: 5400,
                            strokeHeight: 5,
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2013',
                        y: 5423,
                        goals: [{
                            name: 'Expected',
                            value: 5200,
                            strokeHeight: 5,
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2014',
                        y: 6653,
                        goals: [{
                            name: 'Expected',
                            value: 6500,
                            strokeHeight: 5,
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2015',
                        y: 8133,
                        goals: [{
                            name: 'Expected',
                            value: 6600,
                            strokeHeight: 13,
                            strokeWidth: 0,
                            strokeLineCap: 'round',
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2016',
                        y: 7132,
                        goals: [{
                            name: 'Expected',
                            value: 7500,
                            strokeHeight: 5,
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2017',
                        y: 7332,
                        goals: [{
                            name: 'Expected',
                            value: 8700,
                            strokeHeight: 5,
                            strokeColor: '#FF8100'
                        }]
                    },
                    {
                        x: '2018',
                        y: 6553,
                        goals: [{
                            name: 'Expected',
                            value: 7300,
                            strokeHeight: 2,
                            strokeDashArray: 2,
                            strokeColor: '#FF8100'
                        }]
                    }
                ]
            }],
            chart: {
                height: 350,
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    columnWidth: '60%'
                }
            },
            colors: ['#F1416C'],
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false,

            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        // Dunotchart
        var dunotchart = {
            series: [33.3, 20.8, 21.9, 6.1, 4.5, 14.2],

            plotOptions: {
                pie: {
                    donut: {
                        width: 200,
                        size: '80%',
                        background: 'transparent',

                    },


                }
            },

            chart: {
                type: 'donut',
            },

            dataLabels: {
                enabled: false,
            },

            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }],
            legend: {
                width: 250,
                position: 'right',
                offsetY: 0,

            },
            colors: ['#EB5757', '#F2C94C', '#27AE60', '#2D9CDB', '#9B51E0', '#5C5C5C'],
            labels: [`Blue limits ${'<span class="opacity-05">(33.3%)</span>'}`,
                `HillTown Cafe ${'<span class="opacity-05">(20.8%)</span>'}`,
                `Illinois Track ${'<span class="opacity-05">(21.9%)</span>'}`,
                `Boho Beach ${'<span class="opacity-05">(6.1%)</span>'}`,
                `Fournous Cafe ${'<span class="opacity-05">(4.5%)</span>'}`,
                `OIA Beach ${'<span class="opacity-05">(14.2%)</span>'}`
            ]
        };

        var chart = new ApexCharts(document.querySelector("#dunotchart"), dunotchart);
        chart.render();




        // Dunotchart
        var dunotchart2 = {
            series: [50, 29.17, 20.83],

            plotOptions: {
                pie: {
                    donut: {
                        size: '40%',
                        background: 'transparent',

                    },

                }
            },

            chart: {
                width: 200,
                type: 'donut',
            },

            dataLabels: {
                enabled: false,
            },

            responsive: [{
                breakpoint: 480,
                options: {
                    legend: {
                        show: false
                    }
                }
            }],
            legend: {
                show: false,
                width: 250,
                position: 'right',
                offsetY: 0,
            },
            colors: ['#4f4f4f', '#FFA359', '#f1416c'],

        };

        var chart = new ApexCharts(document.querySelector("#dunotchart2"), dunotchart2);
        var chart3 = new ApexCharts(document.querySelector("#dunotchart3"), dunotchart2);
        var chart4 = new ApexCharts(document.querySelector("#dunotchart4"), dunotchart2);
        chart.render();
        chart3.render();
        chart4.render();

        // revenu Chart
        var revenuChart = {
            series: [{
                name: 'This Year',
                data: ["30 ", "40", "35", "50 ", "49 ", "60 ", "70 ", "91 ", "125"]
            }, {
                name: 'Last Year',
                data: ["30 ", "40", "3", "5 ", "4 ", "60 ", "70 ", "9 ", "25"]
            }],
            chart: {
                height: 400,
                type: 'area',
                background: 'transparent'
            },
            dataLabels: {
                enabled: false
            },

            legend: {
                show: false,
            },
            colors: ['#FFA359', '#F1416C'],
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                type: 'category',
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return "$" + value;
                    }
                },
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var revenu = new ApexCharts(document.querySelector("#revenuChart"), revenuChart);
        revenu.render();
    </script>
@endpush
