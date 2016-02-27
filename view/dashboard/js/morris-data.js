$(function() {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2015-1',
            power: 200,
            comsuption: 30,
            earn: 170*1.5
        }, {
            period: '2015-2',
            power: 220,
            comsuption: 40,
            earn: 180*1.5
        }, {
            period: '2015-3',
            power: 230,
            comsuption: 40,
            earn: 190*1.5
        }, {
            period: '2015-4',
            power: 235,
            comsuption: 33,
            earn: 200*1.5
        }, {
            period: '2015-5',
            power: 230,
            comsuption: 22,
            earn: 210*1.5
        }, {
            period: '2015-6',
            power: 240,
            comsuption: 34,
            earn: 210*1.5
        }, {
            period: '2015-7',
            power: 280,
            comsuption: 41,
            earn: 240*1.5
        }, {
            period: '2015-8',
            power: 300,
            comsuption: 45,
            earn: 260*1.5
        }, {
            period: '2015-9',
            power: 280,
            comsuption: 40,
            earn: 240*1.5
        }, {
            period: '2015-10',
            power: 220,
            comsuption: 38,
            earn: 190*1.5
        }],
        xkey: 'period',
        ykeys: ['power', 'comsuption', 'earn'],
        labels: ['power', 'comsuption', 'earn'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
        //behaveLikeLine: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Light",
            value: 25
        }, {
            label: "Plug-in",
            value: 20
        }, {
            label: "Cooker",
            value: 35
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2012-1',
            a: 10,
            b: 6
        }, {
            y: '2012-2',
            a: 9,
            b: 6
        }, {
            y: '2012-3',
            a: 11,
            b: 6.3
        }, {
            y: '2012-4',
            a: 10.5,
            b: 6.7
        }, {
            y: '2012-5',
            a: 14,
            b: 5.8
        }, {
            y: '2012-6',
            a: 17,
            b: 5.2
        }, {
            y: '2012-7',
            a: 18,
            b: 6
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Solar Panel', 'Founds'],
        hideHover: 'auto',
        resize: true
    });

});
