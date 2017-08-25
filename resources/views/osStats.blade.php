<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var os = {!! $os  !!};
        var desc = {!! $desc !!};
        console.log(os);
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawOSChart);
        function drawOSChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['MacOS',     os['MacOS']],
                ['Windows',      os['Windows']],
                ['Linu',      os['Linux']],

            ]);

            var options = {
                title: desc,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_os'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_os" style="width: 900px; height: 500px;"></div>
</body>
</html>