<?php
    $files = array_diff(scandir("./scores"), array('.', '..'));
    $allData = array();
    foreach($files as $file){
        if(strlen($file) > 4 && substr($file, strlen($file)-4) === ".txt"){
            $myfile = fopen("scores/".$file, "r") or die("Unable to open file!");
            $info = explode("\n", fread($myfile,filesize("scores/".$file)));
            fclose($myfile);
            foreach($info as $entry){
                $arr = explode(" ", $entry);
                $key = $arr[0];
                $val = intval($arr[1]);
                // echo $key.$val."\n";
                if(array_key_exists($key, $allData))
                    $allData[$key] += $val;
                else
                    $allData[$key] = $val;
            }
        }
    }
    arsort($allData);
    $rank = 0;
    foreach($allData as $key => $val){
        $rank++;
        if($rank == 1){
            echo "<tr style='color:red'>";
        } elseif($rank == 2){
            echo "<tr style='color:yellow'>";
        } elseif($rank == 3){
            echo "<tr style='color:blue'>";
        }
        else echo "<tr>";
        echo "<td>";
        echo $rank;
        echo "</td>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $val;
        echo "</td>";
        echo "</tr>";
    }
?>