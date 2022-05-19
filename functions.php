<?php
    session_start();
    //mysql connection
    $mysqli = new mysqli('localhost', 'phpuser', 'phpuser', 'td_0901811');

    function countSubmissions() {
        echo "Pages was ".$_SESSION['count']++." Submited";
    }


    //function to insert data
    function insertData($name,$rating) {
        global $mysqli;
        $sql1 = "INSERT INTO `movies` (`id`, `name`, `rating`, `postDate`) VALUES (NULL, '$name',  '$rating', current_timestamp());";
        $result = mysqli_query($mysqli, $sql1);
        //var_dump($result);
        //var_dump($_SESSION);
    }


    //function to sanitizeArray
    function sanitizeArray($arg) {
        foreach($arg as $key => $val) {
            $cleanArray[$key] = htmlentities($val);
        }
        return $cleanArray;
    } 

    //function to select all data from database
    function selectAll() {
        global $mysqli;
        $sql = "SELECT * FROM `movies`";
        $result = mysqli_query($mysqli, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"."<td>".$row['name']."</td>"."<td>".$row['rating']."</td>"."<td>".$row['postDate']."</td>"."</tr>";
        }
    }

?>