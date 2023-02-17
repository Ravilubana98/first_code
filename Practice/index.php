<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <h2>This is Dummy Content</h2>
                <form action="" method="post">
                    <input type="submit" class="btn btn-success" name="submit" value="Submit">
                </form>
                <?php
                 if(isset($_POST['submit'])){
                    echo "Hello";
                 }else{
                    echo "Error";
                 }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
