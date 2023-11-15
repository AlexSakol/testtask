<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test task</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form action="" method="GET">
            <div class="form-group mb-3 mt-3">
                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
            </div>
            <input type="submit" class="btn btn-primary mb-3">
        </form>
    </div>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>   
<?php
    $codes = file_get_contents('https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json');
    $codes = json_decode($codes, true);
    $masks = array();
    $names = array();
    for($i =0; $i < count($codes); $i++){
        $masks[$i] = strtok($codes[$i]['mask'], '-');
        $masks[$i] = strtok($masks[$i], '(');
        $masks[$i] = str_replace('+', '', $masks[$i]);        
    }   
?>