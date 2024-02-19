const data = [
    {
        id: '0.0',
        parent: '',
        name: '構造材料C1①'
    },
    {
        id: '1.3',
        parent: '0.0',
        name: '高圧受電'
    },
    {
        id: '1.1',
        parent: '0.0',
        name: '低圧電力1'
    },
    {
        id: '1.2',
        parent: '0.0',
        name: '低圧電力2'
    },
    {
        id: '1.4',
        parent: '0.0',
        name: '低圧電力3'
    },
    {
        id: '1.5',
        parent: '0.0',
        name: '低圧電灯1'
    },

    /* Africa */
 
];

Highcharts.chart('container-box-layout', {
    title: {
        text: ''
    },
    series: [
        {
            type: 'treegraph',
            data,
            tooltip: {
                pointFormat: '{point.name}'
            },
            marker: {
                symbol: 'rect',
                width: '25%'
            },
            borderRadius: 10,
            dataLabels: {
                pointFormat: '{point.name}',
                style: {
                    whiteSpace: 'nowrap'
                }
            },
            levels: [
                {
                    level: 1,
                    levelIsConstant: false
                },
                {
                    level: 2,
                    colorByPoint: true
                },
                {
                    level: 3,
                    colorVariation: {
                        key: 'brightness',
                        to: -0.5
                    }
                },
                {
                    level: 4,
                    colorVariation: {
                        key: 'brightness',
                        to: 0.5
                    }
                }
            ]
        }
    ]
});
