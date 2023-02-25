<?php 
require 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-1040330731403668-112123-1b16af8758f9cd4f1490ae6b4a60be99-254635608');
$preference= new MercadoPago\Preference();
$item= new MercadoPago\Item();
$item->id=1;
$item->title= 'ghj';
$item->quantity= 1;
$item->unit_price= 6;
$item->currency_id= "AR";

$item2= new MercadoPago\Item();
$item2->id=2;
$item2->title= 'de';
$item2->quantity= 1;
$item2->unit_price= 16;
$item2->currency_id= "AR";

$preference->items= array($item, $item2);

$preference->back_urls = array (
    "success" => "http://localhost:3000/captura.php",
    "failure" => "http://localhost:3000/fallo.php"
);
$preference->auto_return = "approved";
$preference->binary_mode = true;
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MercadoPago</title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <link rel="stylesheet" href="Style/Css/style.css">
</head>
<body>
    <h3>Mercado Pago</h3>
    <div class="checkut-btn"></div>
    
    <script>
        const mp= new MercadoPago('TEST-0c6020ee-af1e-424d-8b50-520a890381f3', {
            locale: 'es-AR'
        });
        mp.checkout({
            preference:{
                id: '<?php echo $preference->id;?>'
               
            }, 
            render:{
                container: '.checkut-btn', 
                label: 'Pagar con MercadoPago'
            }
        })
    </script>
</body>
</html>