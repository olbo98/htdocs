<!doctype html>

<html>
    
    <head>
        
        <meta charset="utf-8">
        
        <title><?php echo "$_GET[titel]"; ?></title>
        
    </head>
    
    <body>
        
        <?php
            
            echo "<h1>Hello fredagsmys</h1>";
            echo "Denna sida heter: $_GET[titel]";
        
        ?>
        
        <script>
            
            alert("<?php echo "$_GET[titel]"; ?>");
        
        </script>
        
        
    </body>
    
</html>