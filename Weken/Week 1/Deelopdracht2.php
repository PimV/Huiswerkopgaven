
<?php
session_start();
$weken = ($_SESSION['array']);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Portal - Pim Verlangen - Deelopdracht 2</title>

        <?php echo '<link rel="stylesheet" type="text/css" href="/HuiswerkOpgaven/CSSPortal.css"/>' ?>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <h1>Deelopdracht 2</h1>
            </div>
            <div id="navigation">
                <?php
                foreach ($weken as $waarde) {
                    echo '<ul><a href="' . '/HuiswerkOpgaven/' . $waarde . '.php">' . $waarde . '</a></ul>';
                }
                ?>
            </div>
            <div id="main">
                <h2 text-align="center">Deelopdracht 2</h2>
                <br/>

                <form action="Testpagina.php" method="post">
                    <table>
                        <tr>
                            <td> Titel: </td>
                            <td><input type="text" name="title"/> </td>
                        </tr>
                        <tr>
                            <td> Achtergrondkleur:  </td>
                            <td>
                                <select name="kleur">
                                    <option  value="green">Groen</option>
                                    <option  value="red">Rood</option>
                                    <option  value="blue">Blauw</option>
                                    <option  value="yellow">Geel</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Lettertype: </td>
                            <td>

                                <input type="radio" name="font" value="Arial">Arial</input>
                                <br/>
                                <input type="radio" name="font" value="Comic Sans">Comic Sans</input>
                                <br/>
                                <input type="radio" name="font" value="Verdana">Verdana</input>



                            </td>
                        </tr>
                        <tr>
                            <td>Lettergrootte: </td>
                            <td>
                                <select name="size">
                                    <option value="3">3</option>
                                    <option  value="8">8</option>
                                    <option value="12">12</option>
                                    <option  value="20">20</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> 

                                <?php
                                
                               
                                ?>

                                <input type="submit" name="Verzenden!"/>
                            </td>
                        </tr>

                    </table>
                </form>

            </div>
        </div>


    </body>
</html>
