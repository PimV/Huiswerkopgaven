
<?php 

session_start();
$weken = ($_SESSION['array']);

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Portal - Pim Verlangen</title>

        <link rel="stylesheet" type="text/css" href="CSSPortal.css"/>
    </head>
    <body>
        <div class="header">
            <h1>Week 3</h1>
        </div>
        
        <div class="navigation">
            <table border="1">



                <?php
                foreach ($weken as $waarde) {
                    //$waarde = pathinfo($waarde)['filename'];
                    echo '  
                            <ul> 
                                  <a href="' . $waarde . '.php">' . $waarde . '</a>
                                     </ul>
';
                }
                ?>

            </table>
        </div>
        
         <div class="main">
            <h2 text-align="center">Week 3</h2>
            Hier staan de opgaven voor week 3.
        </div>
     

    </body>
</html>
