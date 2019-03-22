<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$phoneNum = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $phoneNum;



/**
  * Allocate the mobile number session variable to a text box
  */
?>

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

            p {
                font-family: cursive;
                font-size: 30px;
            }
        </style>
        <title>eBusiness 2</title>
    </head>
    <body background="blue2.png">
            <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Must be in the format of 000-000-0000" required /></td>
                        </tr>                       
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>                          
                        </tr>                      
                        <tr>                       
                                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"</td>
                        </tr>
                    </table>
                </center>
               
            <center>
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
            </center>
            </div>
            </form>
    </body>
</html>   


	
