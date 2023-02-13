<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //exo1
    echo 'exo1';
    echo '<br>';

    $ag = array("zineb" => 19, "rag" => 18, "yaya"=> 20 , "oumi" => 14);
    foreach($ag as $key=>$value){
        echo $key." a ".$value." ans ".'<br>';
    }
    echo '<table>';
    $lign= 1;
    $col= 1;
    //for ($i=0; $i<$lign; $i++) {

    echo '<tr>';

    //for ($j=0; $j<$col; $j++) {
            //echo '<td>';
            echo "<td>value</td>";
            foreach($ag as $key=>$value){
                echo "<td>$value</td>";
            }
 

          
            //echo '</td>';
    //}
    echo '</tr>';
    echo '<tr>';
    echo "<td>key</td>";

    foreach($ag as $key=>$value){
        echo "<td>$key</td>";
    } 
    echo '</tr>';
    //$j=1;
    //}
    echo '</table>';
    echo '<br>';
    

    //exo2
    echo 'exo2';
    echo '<br>';

    $tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.o 
    rg","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.as
    p","CSS"=>"https://www.w3schools.com/css/default.asp"); 
    $rk = array_rand($tab);
    echo $tab[$rk];
    echo '<br>';

    //exo3
    echo 'exo3';
    echo '<br>';
    $emp = array("ahmed" => 14, "joudia" => 19, "samir"=> 14 , "yassir" => 14.5 , "aya" => 12, "liham" => 16 , "yassine"=> 17);
    foreach($emp as $key=>$value){
        echo ("nom:".$key." note".$value).'<br>';
    }
    echo '<table>';
    echo '<tr>';
    echo "<td>key</td>";
    echo "<td>value</td>";


    echo '</tr>';
    $keys = array_keys($emp);
    $values = array_values($emp);



    for ($j=0; $j<count($emp); $j++) {
            echo '<tr>';

            echo "<td>$keys[$j]</td>";
            echo "<td>$values[$j]</td>";
            




           
            echo '</tr>';

    }
    
    echo '</table>';
    echo '<br>';


    

          



    
    $max = max($emp);
    $min = min($emp);
    echo "max ".array_search($max,$emp);
    echo '<br>';

    echo "min ".array_search($min,$emp);

    echo '<br>';
    $moy = 0;
    
    foreach($values as $val){
        $moy = $moy + $val;

    }
    $moy = $moy/count($values);
    echo "moyenne".$moy;









    //exo4
    echo '<br>';

    echo 'exo4';
    echo '<br>';

    $col = 10;
    $lign = 10;
    echo '<table border="1" width="400">';
    echo '<tr>';
    echo '<td bgcolor="#FFA500"></td>';
    for ($j=2; $j<=$col; $j++) {
        echo '<td bgcolor="#FFA500">'.$j.'</td>';
    }
    echo '</tr>';
    for ($i=2; $i<=$lign; $i++) {
    echo '<tr>';
    for ($j=2; $j<=$col; $j++) {
        if ($j==2) {
            echo '<td bgcolor="#FFA500">'.$i.'</td>';
        }

                echo '<td>';
            
        echo $i*$j;
        echo '</td>';
    }
    echo '</tr>';
    }
    echo '</table>';
    echo '<br>';
    //exo5
    echo '<br>';

    echo 'exo5';
    echo '<br>';

    $capitales = array("Maroc" => "Rabat" ,  "Allemagne" =>  "Berlin" , "Serbie" =>  "Belgrade" , "Brésil" =>  "Brasilia" , 
    "Slovaquie" =>  "Bratislava" , "Italie" =>  "Rome ", "Venezuela" =>  "Caracas" , "Moldavie" =>  "Chisinau" ,
    "Guyana" =>  "Georgetown ", "Viêt Nam" => "Hanoï"  , "Zimbabwe " => " Harare" , "Cuba" =>  "La Havane"  , "Pays-Bas" => "La 
    Haye" , "Finlande" =>  "Helsinki" );
    print_r($capitales);
    echo '<br>';
    echo '<table>';
    echo '<tr>';
    echo "<td>pays</td>";
    echo "<td>capitales</td>";


    echo '</tr>';
    $keys = array_keys($capitales);
    $values = array_values($capitales);



    for ($j=0; $j<count($capitales); $j++) {
            echo '<tr>';

            echo "<td>$keys[$j]</td>";
            echo "<td>$values[$j]</td>";
            




           
            echo '</tr>';

    }
    
    echo '</table>';
    echo '<br>';
    $country = "Maroc";
    echo "la capitale est ".$capitales["$country"];
    //exo6
    echo '<br>';

    echo 'exo6';
    echo '<br>';
    $nested = array("web" => array(array("nom" =>"php","lien" => "https://www.php.net/ ","avis"=>"*****" ),array("nom" =>"html","lien" => "https://www.w3schools.com/html/default.asp","avis"=>"****" ),array("nom" =>"JavaScript","lien" => "https://www.javascript.com/ ","avis"=>"**" ),array("nom" =>"css","lien" => "https://www.w3schools.com/css/ ","avis"=>"****" )),"db"=>array(array("nom" =>"mysql","lien" => "https://www.mysql.com/ ","avis"=>"*****" ),array("nom" =>"PostgreSQL","lien" => "https://www.postgresql.org/ ","avis"=>"*****" ),array("nom" =>"oracle","lien" => "https://www.oracle.com/","avis"=>"****" ),array("nom" =>"db2","lien" => "https://www.ibm.com/products/db2 ","avis"=>"****" )));
    print_r($nested);
    echo '<br>';
    echo 'pour web';
    echo '<br>';
    $lengthsweb = array();
    $links = array();



    for($i = 0;$i<4;$i++){
        echo $nested["web"][$i]["lien"].'<br>';
        $lengthsweb[] = strlen($nested["web"][$i]["avis"]);
        $links[] = ($nested["web"][$i]["lien"]);



    }
    echo 'pour db';
    echo '<br>';
    $lengthsdb= array();
    $links1 = array();




    for($i = 0;$i<4;$i++){
        echo $nested["db"][$i]["lien"].'<br>';
        $lengthsdb[] = strlen($nested["db"][$i]["avis"]);
        $links1[] = ($nested["db"][$i]["lien"]);


    }
    echo '<br>';
    print_r($lengthsweb);
    echo '<br>';
    print_r($links);
    echo '<br>';
    $rag = array();
    for($i=0;$i<4;$i++){
        $rag["$links[$i]"]= $lengthsweb[$i];
    }
    $raga = array();
    for($i=0;$i<4;$i++){
        $raga["$links1[$i]"]= $lengthsdb[$i];
    }


    echo '<br>';
    print_r($rag);
    echo '<br>';
    rsort($lengthsweb);
    echo 'pour web';
    echo '<br>';
    $tab = array();


    for($i=0;$i<4;$i++){
        if (!(in_array(array_search($lengthsweb[$i],$rag),$tab))){
            $tab[] =array_search($lengthsweb[$i],$rag).'<br>';


        }
    }


    echo '<br>';
    print_r($tab);
    echo '<br>';


    echo 'pour db';
    echo '<br>';
    rsort($lengthsdb);



    for($i=0;$i<4;$i++){
        echo array_search($lengthsdb[$i],$raga).'<br>';
    }


    echo '<br>';







    ?>
</body>
</html>