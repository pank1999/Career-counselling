<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Interest', 'marks'],
         <?php
         $email_id=$_SESSION['email'];
         $connection= new mysqli('localhost:3308','root','','quizassignment1') or die(mysqli_error($connection));
         $result=mysqli_query($connection,"SELECT * FROM  result_interest_class_10 WHERE email='$email_id'");

          if(mysqli_num_rows($result)>0){
                
                while($row=mysqli_fetch_array($result)){
                  echo "['".$row['Assessment']."',".$row['marks']."],";
                }
             
             }
             ?>
        ]);

        var options = {
          chart: {
            title: 'students Performance',
            subtitle: 'responses of all the interest assessments',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 700px; height: 400px;"></div>
  </body>
</html>
