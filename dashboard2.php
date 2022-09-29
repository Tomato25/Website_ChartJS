<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <?php
    include "C:\shares\student\web\ITEC30151\N0826071\Connection.php";

    $sql = 'SELECT * FROM manufacturers';
    $result=mysqli_query($con,$sql);

    $dataX = "";
    $dataY = "";
    $dataZ = "";

    while($row=mysqli_fetch_assoc($result)){

   $dataX = $dataX . "'". $row['Manufacturer']."',";

   $dataY = $dataY . "'". $row['AvgRating']."',";

   $dataZ = $dataZ . "'". $row['UnitsSold2015']."',";

    }

    $dataX=trim($dataX, ",");
    $dataY=trim($dataY, ",");
    $dataZ=trim($dataZ, ",");

    ?>

    <link rel="stylesheet" href="dashboardstyle2.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="app1.js"></script>

</head>
<body onload="myAjaxFunction1()">
    <nav>
        <div class="logo">
            <h3>Car compare</h3>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard1.php">Compare</a></li>s
            <li><a href="#">Login</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <div class="burger-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    </nav>
    
    <div class="wrapper">


        <div class="box3">
             <div class="topuserInput">
                 <label>Manufacturer</label>
                 <?php
                 $sql="SELECT DISTINCT Manufacturer FROM cars";
                 $result=mysqli_query($con,$sql);
                 echo"<select id='manufacturer' onchange=myAjaxFunction();>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>";
                    }					 
                  echo"</select>"; ?>
             </div>   
             <div class="topuserInput">
                 <label>Model</label>
                 <?php
                 $sql="SELECT DISTINCT Manufacturer FROM cars";
                 $result=mysqli_query($con,$sql);
                 echo"<select id='manufacturer' onchange=myAjaxFunction(); disabled='disabled'>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>";
                    }					 
                  echo"</select>"; ?>
                </div>

        </div>

        <div class="box2">
            <div class="bottombox">

			</div>
            <div class="topbox">
                <canvas id="ChartNo2"></canvas>
            </div>
        </div>



                <div class="box1">
            <div class="bottombox">
			
			</div>
            <div class="topbox">
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <script type="text/javascript">

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
		    labels: [<?php echo $dataX; ?>],
		    datasets: [{
			    label: 'Manufacturer',
			    data: [<?php echo $dataY; ?>],
			    backgroundColor: [
				    "rgba(255, 99, 132, 0.2)",
				    "rgba(54, 162, 235, 0.2)",
				    "rgba(255, 206, 86, 0.2)",
				    "rgba(75, 192, 192, 0.2)",
				    "rgba(153, 102, 255, 0.2)"
			    ],
			    borderColor: [
				    "rgba(255, 99, 132, 1)",
				    "rgba(54, 162, 235, 1)",
				    "rgba(255, 206, 86, 1)",
				    "rgba(75, 192, 192, 1)",
				    "rgba(153, 102, 255, 1)",
			    ],
			    borderWidth: 1
		    }]
	    },
	        options: {
		        title: {
			        display: true,
			        text: "Average User Rating"
		        },

                scales: {
			        yAxes: [{
				    display: true,
				    ticks: {
				    	beginAtZero: true, steps: 10, stepvalue: 1, max: 5
                }

            }]
		},

		        maintainAspectRatio: false,
		        responsive: true
	        }
        }
)
        </script>
		

    </div>

</body>
</html>

