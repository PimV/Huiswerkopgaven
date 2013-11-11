
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Portal - Pim Verlangen</title>
        <link rel="stylesheet" type="text/css" href="CSSPortal.css"/>
    </head>
    <body>

        <div id ="wrap">
            <div id="header">
                <h1>Home</h1>
            </div>

            <?php
            session_start();

            $weken = array();

            if ($handle = opendir('.')) {
                while (false !== ($entry = readdir($handle))) {

                    if ($entry != "." && $entry != "..") {
                        $ext = pathinfo($entry, PATHINFO_EXTENSION);
                        if ($ext == 'php') {
                            $entry = pathinfo($entry, PATHINFO_FILENAME);
                            $weken[] = $entry;
                        }
                    }
                }
                closedir($handle);
            }
            $_SESSION['array'] = $weken;
            ?>
            <div id="navigation">
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

            <div id="main">
                <h2 text-align="center">Welkom</h2>
                Deze pagina is gemaakt door Pim Verlangen en is bedoeld om alle huiswerkopgaven voor het vak PHP weer te geven. 

                <br/>
                <br/>
                U kunt navigeren door de hier links staande links aan te klikken en van daaruit de verschillende deelopdrachten aan te klikken.

                <br/>
                <br/>

                Veel plezier met het doorlezen!

                <br/>
                <br/>

                - Pim Verlangen
            </div>
        </div>

    </body>
</html>
