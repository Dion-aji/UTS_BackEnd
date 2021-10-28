<!DOCTYPE html>
<html>
<head>
	<title>Popularitas Game</title>
	<?php
        foreach($data as $data){
            $studio[] = $data->studio;
            $rating[] = (int) $data->rating;
        }
    ?>
<link rel="stylesheet" href="<?php echo base_url().'asset/style.css'; ?>">
</head>
<body>
<h2>Grafik Popularitas Game</h2>
	<canvas id="canvas" width="1000" height="280"></canvas>
	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
	<script>
            var lineChartData = {
                labels : <?php echo json_encode($studio);?>,
                datasets : [
                    {
                        fillColor: "#ed2939",
                        strokeColor: "#0099ff",
                        pointColor: "#0099ff",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "#0099ff",
                        data : <?php echo json_encode($rating);?>
                    }
                ]
            }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
   	</script>
</body>
</html>
