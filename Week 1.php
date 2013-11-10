
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
            <h1>Week 1</h1>
        </div>
        
        <div class="navigation">
            <table border="1" width="120">



                <?php
                foreach ($weken as $waarde) {
                    $waarde = pathinfo( $waarde )[ 'filename' ];
                    echo '  <tr>
                            <td>
                               
                                  <a href="' . $waarde . '.php">' . $waarde . '</a>
                                
                          </td>
                       </tr>';
                }
                ?>

            </table>
        </div>
     

    </body>
</html>
