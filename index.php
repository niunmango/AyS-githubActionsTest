<?php
$machine_name = php_uname('n');
$current_date = date('Y-m-d H:i:s');
$total_space = number_format(disk_total_space('/') / (1024 * 1024 * 1024), 2);
$free_space = number_format(disk_free_space('/') / (1024 * 1024 * 1024), 2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del Servidor</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            margin: 0;
            padding: 24px;
            background-color: #f5f5f5;
            text-align: center;
        }

        h1 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 16px;
            color: #111;
        }

        h2 {
            font-size: 20px;
            font-weight: 500;
            margin-top: 32px;
            margin-bottom: 8px;
        }

        p {
            font-size: 16px;
            margin-top: 4px;
        }
        
        hr {
          border: 1px solid #ccc;
          margin-top: 24px;
          margin-bottom: 24px;
        }
        
        pre {
          font-size: 14px;
          margin-top: 8px;
          background-color: black;
          color: lime;
          font-family: 'Courier New', Courier, monospace;
          text-align: left;
          padding: 10px 0px 0px 10px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            text-align: center;
            padding: 16px;  
            font-size: 5px; 
        }
    </style>
    <script>
        setInterval(function() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "top.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("top_output").textContent = xhr.responseText;
                }
            }
            xhr.send();
        }, 5000);
    </script>
</head>
<body>
    <h1>Información del Servidor</h1>
    <h2>Nombre de la máquina:</h2>
    <p><?php echo $machine_name; ?></p>
    
    <hr>
    
    <h2>Fecha actual:</h2>
    <p><?php echo $current_date; ?></p>
    
    <hr>
    
    <h2>Espacio en disco:</h2>
    <p>Espacio total: <?php echo $total_space; ?> GB</p>
    <p>Espacio libre: <?php echo $free_space; ?> GB</p>
    
    <hr>
    
    <h2>top</h2>
    <pre id="top_output"></pre>

    <footer>
        <hr>
        <p>&copy niunmango - Licencia GPLv3 - <a href="https://github.com/niunmango/ays-githubactionstest/">Link al repo</a>
    </footer>
</body>
</html>