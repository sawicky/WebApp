<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    require_once('lib/BrowserDetection.php');
    $browser = new BrowserDetection;
    $userAgent = $browser->getUserAgent();
?>
<html>
    <link rel = "stylesheet" type = "text/css" HREF = "style/Main.css">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p class ="info"><?php echo $_SERVER['REMOTE_ADDR']; ?> on <?php echo $userAgent ?></p>
            <form method="post" action="index.jsp">
                <div class ="center">
                    <table class="register">
                        <tr><td><input class="button" name="user" placeholder="Enter username ..."></td></tr>
                        <tr><td><input class="button" name="pass" type ="password" placeholder="Enter password"></td></tr>
                        <input type="submit" name="update" value=" Apply " 
                            style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;"
                             hidefocus="true" tabindex="-1"/>
                     </table>
                </div>
            </form>
    </body>
</html>