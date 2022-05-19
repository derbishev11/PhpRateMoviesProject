<?php
    include_once 'functions.php';
    $cleaned = sanitizeArray($_POST); //sanitizing incoming data
    //checking if button is set
    if(isset($_POST['button'])) {
        echo "Your rate was inserted";
        //inserting data
        insertData($cleaned['movie'], (int)$cleaned['ratings']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 17px;
    }
    body {
        background-image: linear-gradient(to right ,#FFDE02, #00BCFF);
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        color:#fff;
        border: 0.5px solid #fff;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: transparent;
    }

    .movie {
        margin-top: 10px
    }

    header {
        margin-bottom: 15px;
    }

    a {
        color:#fff;
        background-color: transparent;
        border: 1px solid #fff;
        padding: 10px;
    }

    a:hover {
        text-decoration: none;
        color:#000;
        border: 1px solid #000;
    }
</style>
<body>
    <div class="movie">
        <div class="container-fluid">
        <header>
            <a href="submit.php">BACK TO FORM</a>
            <?php countSubmissions(); ?>
        </header>
        <table>
            <tr>
                <th>Movie Title</th>
                <th>Rating</th>
                <th>Date</th>
            </tr>
            <?php
                selectAll();
            ?>
        </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>