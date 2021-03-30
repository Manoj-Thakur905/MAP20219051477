<?php 
require_once 'app/models/User.php'
?>
<html>
    <head>
        <title>Sing up page </title>         
    </head>
    <body>
        <h1> Enter Credentials to Move Further </h1>
        <form action= "register/verify" method = "POST">
            <table>
                <tr>
                    <td>
                        <center>
                            <input type = "text" name = "username" placeholder = "User ID"/> <br>
                            
                            <input type = "text" name = "password" placeholder = "Password Please"/> <br>
                            <button type = "submit" name = "insert" >Sign Up</button>
                        </center>
                     </td>
                </tr>
            </table>
        </form>
    </body>
</html>