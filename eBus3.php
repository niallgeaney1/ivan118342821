<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color:#ffc144;
                font-family: cursive;
                font-size: 16px;
                text-align: center;
            }

            h1 {
                color: white;
                text-align: center;
            }
            
            .button {
                background-color: #595b5b;
                border: none;
                color: white;
                padding: 15px 25px;
                text-align: center;
                font-size: 16px;
                cursor: pointer;
            }

            .button:hover {
                background-color: #8d7cef;
                border: none;
                color: white;
                padding: 30px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
              }
              
        </style>
    </head>
    <body>
    <center> 
    <!-- //Starting the session to get the session variable from the last page-->
    <?php

    session_start();
    $totalValue = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    $phoneNum = $_POST['txtNum'];
    
    
    echo "The name is: ".$fullNameValue.".";
    echo "<br></br><br></br>";
    echo "The phone Number is: ".$phoneNum.".";
    echo "<br></br><br></br>";
    echo "The total value is ".$totalValue.".";
    echo "<br></br><br></br>";
    
    ?>
    
    <a href="ConsultingServicesHome.html" class="button">Return to Shop Homepage</a>

   
    </center>
    </body>
</html>


