 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Election System Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" href="images/icon.png">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>Online Election System</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination.html"><span class="subFont"><strong>Nomination's List</strong></span></a></li>
            <!-- <li><a href="changePassword.php"><span class="subFont"><strong>Admin's Password</strong></span></a></li> -->
            <li><a href=""><span class=""><strong>Feedback Report</strong></span></a></li> 
          
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"> <span class="glyphicon glyphicon-home"></span> <strong>&nbsp Go Home</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="background: linear-gradient(rgba(255,255,255,.3), rgba(255,255,255,.3)), url(images/ecs.png); background-repeat: no-repeat; background-position: center; height: 100%; background-size: 350px 350px;border:2px solid gray;border-radius: 15px">
          
          <div class="page-header">
            <h2 class="specialHead">ELECTION CURRENT SITUATION</h2>
            <p class="normalFont">This is the current Election Situation. Here, Voters can View the Election Progress Live !! </p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $BJP=0;
              $BAL=0;
              $BNP=0;
              $BRP=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //Bangladesh Jatiya Party (BJP)
                $sql ="SELECT * FROM voterdb WHERE voted_for='BJP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BJP++;
                  }

                  $bjp_val= $BJP*10;

                  echo "<strong>Bangladesh Jatiya Party: </strong>";
                  echo "<strong>$BJP </strong>";
				  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$bjp_val\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bjp_val."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // Awami League
                $sql ="SELECT * FROM voterdb WHERE voted_for='BAL'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BAL++;
                  }


                  $bal_val= $BAL*10;

                  echo "<strong>Bangladesh Awami League: </strong>";
				  echo "<strong>$BAL </strong>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bal_val."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // Bangladesh Nationalist Party
                $sql ="SELECT * FROM voterdb WHERE voted_for='BNP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BNP++;
                  }


                  $bnp_val= $BNP*10;

                  echo "<strong>Bangladesh Nationalist Party: </strong>";
				  echo "<strong>$BNP </strong>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bnp_val."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // Bangladesh Republican Party
                $sql ="SELECT * FROM voterdb WHERE voted_for='BRP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BRP++;
                  }


                  $brp_val= $BRP*10;

                  echo "<strong>Bangladesh Republican Party: </strong>";
				  echo "<strong>$BRP </strong>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$brp_val."%'>
                      <span class='sr-only'>BRP</span>
                    </div>
                  </div>
                  ";
                }

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM voterdb";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $total++;
                  }


                  $tptal= $total*10;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
