<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>home</title>
</head>
<body>
    <?php
    $lines = file ('lotofacil.txt');
    $num = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

    foreach ($lines as $line_num => $line) {
        $item = explode('-', $line);
        $cod = trim($item[0]);
        $data = trim($item[1]);
        $numeros = trim($item[2]);
        $bolas = explode(' ', $numeros);

        /*
        echo "Código(".$cod.") Data(".$data.") Números(".$numeros.")<br>";

        for ($i=0; $i < 15; $i++) { 
            echo "b".($i+1)."(".$bolas[$i].") ";
        }
        echo "<br>";
        */
    
      
        
        foreach ($bolas as $key => $item) {
            $num[$item-1]++;
        }

       
     
    }
    
    for ($i=0; $i < 25; $i++) { 
        echo "(".($i+1).")".$num[$i]."<br>";
    }

    ?>
    
</body>
</html>