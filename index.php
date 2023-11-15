<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test task</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
    
    <!--Cookie notification-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Уведомление о куки</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Для функционирования этого сайта требуются куки</p>
            <button class="btn btn-success" id="accept" data-bs-dismiss="offcanvas">Принять</button>
            <button class="btn btn-outline-danger" data-bs-dismiss="offcanvas">Отказаться</button>
        </div>
    </div>

<?php
    $countries = file_get_contents('https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json');
    $countries= json_decode($countries, true);
    $masks = array();
    $names = array();
    for($i =0; $i < count($countries); $i++){
        $masks[$i] = str_replace("+", "", $countries[$i]['mask']);
        $masks[$i] = str_replace("#", "", $masks[$i]);
        $masks[$i] = str_replace("-", "", $masks[$i]);
        $masks[$i] = str_replace("(", "", $masks[$i]);
        $masks[$i] = str_replace(")", "", $masks[$i]);
        $names[$i] = $countries[$i]['name_ru'];       
    }  
    if(!empty($_GET['phone'])){
        $phone = htmlspecialchars($_GET['phone']); 
        $phone = str_replace("+", "", $phone);        
        $phone = str_replace("-", " ", $phone);
        $phone = str_replace("(", " ", $phone);
        $phone = str_replace(")", " ", $phone);
        $code = strtok($phone, ' ');     
        $index = array_search($code, $masks);
        if(is_numeric($index) && $index >=0){
            echo $names[$index];            
        }
        else{
            echo "Ничего не найдено";
        }
    }         
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="bckgrnd">                
                    <div class="card">
                        <h2>Fulfillment dla Twojego <br>e-Commerce</h2>
                            <ul>
                                <li>Przyjęcie i magazynowanie produktów</li>
                                <li>Kompletacja i pakowanie</li>
                                <li>Obsługa zwrotów i reklamacji</li>
                                <li>Współpraca ze wszystkimi dostępnymi przewoźnikami</li>
                                <li>Integracja z Twoją platformą e-Commerce</li>                    
                            </ul>
                            <button id="card_button">Więcej</button>
                    </div>
                </div>
            </div>    
            <div class="col-md-12 col-lg-6">                
                <img src="images/Rectangle 802.png">        
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>  