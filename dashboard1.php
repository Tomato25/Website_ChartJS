<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <?php
    include "C:\shares\student\web\ITEC30151\N0826071\Connection.php";

    $sql = 'SELECT * FROM tbl_books';
    $result=mysqli_query($con,$sql);

    $dataX ="";
    $dataY = "";

    while($row=mysqli_fetch_assoc($result)){

   $dataX = $dataX . "'". $row['title']."',";

   $dataY = $dataY . "'". $row['unitprice']."',";
    }

    $dataX=trim($dataX, ",");
    $dataY=trim($dataY, ",");

    ?>

    <link rel="stylesheet" href="dashboardstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>

</head>
<body onload="myAjaxFunction()">
    <nav>
        <div class="logo">
            <h3>Car compare</h3>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard1.php">Compare</a></li>
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
        <div class="box1">
            <div class="bottombox">
				<div class="userInput">
				 <form action="/action_page.php">
					 <select id="browsers" name="browser">
					     <option value="Internet Explorer">Internet Explorer</option>
						 <option value="Firefox">Firefox</option>
						 <option value="Chrome">Chrome</option>
						 <option value="Opera">Opera</option>
						 <option value="Safari">Safari</option>
                  </select>
                  <input type="submit">
                </form>  
                </div>
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
			    label: 'Popular JavaScript Frameworks',
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
			        text: "Product Sales Report"
		        },

		        maintainAspectRatio: false,
		        responsive: true
	        }
        }
)
        </script>


        <div class="box2">
            <div class="bottombox">
				<div class="userInput">
                 <?php
                 $sql="SELECT DISTINCT Manufacturer FROM cars";
                 $result=mysqli_query($con,$sql);
                 echo"<select id='manufacturer' onchange=myAjaxFunction();>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['Manufacturer']."'>".$row['Manufacturer']."</option>";
                    }					 
                  echo"</select>"; ?>
                </div>
			</div>
            <div class="topbox">
                <canvas id="ChartNo2"></canvas>
            </div>
        </div>
		

        <div class="box3">
            <canvas id="ChartNo3"></canvas>
        </div>

   
        <div class="box4">
            <canvas id="scatterChart"></canvas>
        </div>
        <div class="box5"></div>
        <div class="box6"></div>



    </div>

</body>
</html>

