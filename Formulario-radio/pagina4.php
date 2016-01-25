<html>
    <head>
        <title>Problema</title>    
    </head>
    <body>
        <?php
        if ($_REQUEST['radio1']="noestudios")
        {
            $noestudios=$_REQUEST['noestudios'];
            echo "La persona ".$nombre "y " .$noestudios;
        }
        else
        {
        if ($_REQUEST['radio1']="estudios1")
        {
            $estudios2=$_REQUEST['estudios1'];
            echo "La persona ".$nombre "y tiene los " .$estudios1;
        }
        else
        {
        if ($_REQUEST['radio1']="estudios2")
        {
            $estudios2=$_REQUEST['estudios2'];
            echo "La persona ".$nombre "y tiene los " .$estudios2;
        }
        }
            ?>
    </body>    
</html>


