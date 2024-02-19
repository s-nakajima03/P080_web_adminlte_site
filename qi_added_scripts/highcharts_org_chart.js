Highcharts.chart('container', {
    chart: {
        height: 1500,
        inverted: true
    },

 

    accessibility: {
        point: {
            descriptionFormat: '{add index 1}. {toNode.name}' +
                '{#if (ne toNode.name toNode.id)}, {toNode.id}{/if}, ' +
                'reports to {fromNode.id}'
        }
    },

    series: [{
        type: 'organization',
        name: 'Highsoft',
        keys: ['from', 'to'],
        data: [
            ['特高', '構造C1(F1)'],
            ['構造C1(F1)', '構造材料C1①'],
            ['特高', '構造C2(F5)'],
            ['特高', '構造C3/損傷評価(F7)'],
            ['構造材料C1①', '高圧受電'],
            ['構造材料C1①', '低圧動力1'],
    
        ],
        levels: [{
            level: 0,
            color: 'silver',
            dataLabels: {
                color: 'black'
            },
            height: 25
        }, {
            level: 1,
            color: 'silver',
            dataLabels: {
                color: 'black'
            },
            height: 25
        }, {
            level: 2,
            color: '#980104'
        }, {
            level: 4,
            color: '#359154'
        }],
        nodes: [{
            id: '特高',
            name: '特高',

        }, {
            id: '構造C1(F1)',
            name: '構造C1(F1)',
            events: {
                click: function() {
                    location.replace("index.php?page_name=フィーダ毎");
                }
            }
        }, {
            id: '構造C2(F5)',
            name: '構造C2(F5)',
            events: {
                click: function() {
                    location.replace("index.php?page_name=フィーダ毎");
                }
            }
        }, 
        {
            id: '構造C3/損傷評価(F7)',
            name: '構造C3/損傷評価(F7)',
            events: {
                click: function() {
                    location.replace("index.php?page_name=フィーダ毎");
                }
            }
            
        },{
            id: '構造材料C1①',
            title: '構造材料C1①',
            name: '構造材料C1①',
            events: {
                click: function() {
                    location.replace("index.php?page_name=キュービクル毎");
                }
            }
            
        }, {
            id: '構造材料C1①',
            title: '構造材料C1①',
            name: '構造材料C1①',
            color: '#007ad0',
            events: {
                click: function() {
                    location.replace("index.php?page_name=測定箇所");
                }
            }
        }, {
            id: '高圧受電',
            title: '高圧受電',
            name: '高圧受電',
            events: {
                click: function() {
                    location.replace("index.php?page_name=測定箇所");
                }
            }
            
        }, {
            id: '低圧動力1',
            title: '低圧動力1',
            name: '低圧動力1',
            events: {
                click: function() {
                    location.replace("index.php?page_name=測定箇所");
                }
            }
            
        }, {
            id: '低圧動力2',
            title: '低圧動力2',
            name: '低圧動力2',
            events: {
                click: function() {
                    location.replace("index.php?page_name=測定箇所");
                }
            }
           
        }],
        colorByPoint: false,
        color: '#007ad0',
        dataLabels: {
            color: 'white'
        },
        borderColor: 'white',
        nodeWidth: 65
    }],
    tooltip: {
        outside: true
    },
    exporting: {
        allowHTML: true,
        sourceWidth: 800,
        sourceHeight: 600
    }

});
