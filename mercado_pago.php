<?php 
require 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('');
$preference= new MercadoPago\Preference();
$item= new MercadoPago\Item();
$item->producto= '';
$item->color= '';
$item->cantidad= '';
$item->precio= '';
$item->subtotal= '';

$preference->items= array($item);

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
</head>
<body>
    <h3>Mercado Pago</h3>
    <div class="checkut-btn"></div>
    <script>
        const mp= new MercadoPago('', {
            locale: 'es-AR'
        });
        mp.checkout({
            preference:{
                producto: '<?php echo $preference->producto;?>'
            }, 
            render:{
                container: '.checkut-btn', 
                label: 'Pagar con MercadoPago'
            }
        })
    </script>
</body>
</html>