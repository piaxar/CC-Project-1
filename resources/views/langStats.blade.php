<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var lang = {!! $lang  !!};
        var desc = {!! $desc !!};
        console.log(lang);
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawOSChart);
        function drawOSChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Java',     lang['Java']],
                ['PHP',      lang['PHP']],
                ['C/C++',    lang['C/C++']],
                ['Eiffel',   lang['Eiffel']],
                ['Python',   lang['Python']],

            ]);

            var options = {
                title: desc,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_lang'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_lang" style="width: 900px; height: 500px;"></div>
</body>
</html>