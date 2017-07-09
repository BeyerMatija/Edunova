<script>

	Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Proizvodnja i Potrošnja generičkih i organskih lijekova u razdoblju 1980-2010 g.'
    },
    subtitle: {
        text: 'Source: www.WHO.org'
    },
    xAxis: {
        categories: ['1980', '1985', '1990', '1995', '2000', '2005', '2010'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Billions'
        },
        labels: {
            formatter: function () {
                return this.value / 1000;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' millions'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [{
        name: 'Asia',
        data: [1902, 635, 809, 947, 1402, 3634, 5268]
    }, {
        name: 'Africa',
        data: [406, 107, 111, 133, 221, 767, 1766]
    }, {
        name: 'Europe',
        data: [993, 203, 276, 408, 547, 729, 628]
    }, {
        name: 'America',
        data: [189, 221, 154, 156, 339, 818, 1201]
    }, {
        name: 'Oceania',
        data: [2, 2, 2, 6, 113, 30, 46]
    }]
});

</script>
