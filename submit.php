<?php
        session_start(); //starting a session
        //checking session
        if(!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        }

        if($_SESSION['count'] >= 3) {
            die("You have reached the maximum of 3 submissions for this session. Please return later.".'<br>'.'<a href="temirlan_derbishev_output.php">View All Records</a>');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
        font-size: 17px;
    }
    body {
        background-image: linear-gradient(to right ,#FFDE02, #00BCFF);
    }

    form {
        border: 1px solid white;
        text-align:center;
        width: 40%;
    }
    .d-flex {
        margin-top: 20%;
    }

    form {
        padding: 40px;
        color: white;
    }

    .btn {
        background-color: #74cc8d;
        color:white;
    }

    svg {
        margin-bottom: 5px;
    }
</style>
<body>
    <div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <form action="output.php" method="POST" class="form-group">
                    <label for="movie" >Movie Title</label><br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"/>
                    </svg>
                    <input type="text" class="form-control" name="movie"><br>
                    <label for="reatings">Movie Rating</label><br>
                    <select name="ratings" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br>
                    <input type="Submit" class="btn btn-light" name="button">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>