<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var course = {!! $course  !!};
        console.log(course);
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawOSChart);
        function drawOSChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['BS1',     course['BS1']],
                ['BS2',     course['BS2']],
                ['BS3',     course['BS3']],
                ['BS4',     course['BS4']],
                ['MS1',     course['MS1']],
                ['MS2',     course['MS2']],
            ]);

            var options = {
                title: 'Choose your course',
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_course'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_course" style="width: 900px; height: 500px;"></div>
</body>
</html>