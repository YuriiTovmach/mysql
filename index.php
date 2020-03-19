<?php

//подключаем скрипт
//require_once 'conection.php';
////подключаем сервер mysql
//$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
////операции с базой даных
//$query = 'SELECT * FROM pages';
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//if($result){
//    $rows = mysqli_num_rows($result); // количество полученных строк
//
//    echo "<table><tr><th>1</th><th>2</th><th>3</th><th>4</th></tr>";
//    for ($i = 0 ; $i < $rows ; ++$i)
//    {
//        $row = mysqli_fetch_row($result);
//        echo "<tr>";
//            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
//        echo "</tr>";
//    }
//    echo "</table>";
//
//    mysqli_free_result($result);
//}

//________________________________
//подключаем скрипт
//require_once 'conection.php';
////подключаем сервер mysql
//$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
//
//
//$query1 = mysqli_query($link, "SELECT * FROM pages");
//
//$myrow = mysqli_fetch_array($query1);
//
//while($row=mysqli_fetch_array($query1))
//{
//echo $row['1'],' ', $row['2'],' ', $row['3'],' ', $row['4'],' '. "<br />";
//}
//___________________________________________________________

//подключаем скрипт
require_once 'conection.php';
//подключаем сервер mysql
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

         $sql = "SELECT * FROM pages";
         $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));


         while ($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $title = $row['title'];
            $url = $row['url'];
            $text = $row['text'];

            echo "<ul>";
                echo "<ol>";
                    echo "<div>$text</div>";
                echo "</ol>";
            echo "</ul>";


//            echo "<table>";
//                echo "<tr>";
//                 echo "<td>";
//                        echo "<div>$text</div>";
//                    echo "</td>";
//                 echo "</tr>";
//            echo "</table>";
            }
//закрываем соединение
mysqli_close($link);

//_________________________________________________________________________________________
