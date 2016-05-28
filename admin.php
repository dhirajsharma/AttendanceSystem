<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Compact login form BS 3 - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-min.css" rel="stylesheet">
        
        <style type="text/css">
            body{padding-top:20px;}    </style>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            window.alert = function () {
            };
            var defaultCSS = document.getElementById('bootstrap-css');
            function changeCSS(css) {
                if (css)
                    $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
                else
                    $('head > link').filter(':first').replaceWith(defaultCSS);
            }
            $(document).ready(function () {
                var iframe_height = parseInt($('html').height());
                window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
            });
        </script>
        <script>
$(function() {
    $("#warning").delay("1800");
  $( "#warning" ).fadeOut( "slow" );
  $('#inputGroupSuccess3').focus();
});
</script>
    </head>
<?php
$servername = "localhost";
$username = "root";
$password = "whocares";
$dbname = "Attendance";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    $date = date("m-d-Y");

    $sql = "CREATE TABLE `$date` (
        SrN0 INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        kid VARCHAR(100) NOT NULL,
        date VARCHAR(100) NOT NULL,
        time VARCHAR(100) NOT NULL,
        CONSTRAINT uc_kid UNIQUE (kid)
        )";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn->exec($sql);
        if($conn){
            $kidErr = "<font color='green'>Template generated successfully</font>";
        }else{
                    $kidErr = "Template not Generated";
                }
    }

$conn = null;
?>
<body>

                </div>
                                <div class="msg">
                                    <label>
                                        <h4>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="index.php">Attendance</a></h4>
                                    </label>
                                </div>
                </div>
        <div class="container">
            <div class="row">
                <br><br><br>
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        Mobile Application Programming</h1>
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo date("l").' | '.date("m-d-Y"); ?>
                    </h2>
                <div class="col-md-4 col-md-offset-4">

                    <br><br><br><br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center">Generate Attendance Template</h3>
                        </div>
                        <div class="panel-body">
                            <div>
                                <span class="warning" id="warning"><font color="red"><?php echo $kidErr; ?></font></span>
                            </div>
                <br>
                            <form class="form-inline" accept-charset="UTF-8" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <!--<div class="form-group has-success has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">K00</span>
                                        <input type="text" placeholder="Enter your KID without K00" name="kid" class="form-control" step='6' maxlength='6' id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status">
                                    </div>
                                </div>
                                <br><br>
                                -->
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Generate">

                            </form>
                        </div>
                    </div>
                <div>
                </div>
            </div>
                                <div class="msg">
                                    <label>
                                        <h4>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <font color='red'>Note: Attendance will be recorded with time stamp.</font></h4>
                                    </label>
                                </div>
                </div>
        </div>

        <script type="text/javascript">
        </script>
    </body>
</html>
