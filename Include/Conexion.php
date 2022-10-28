<?php

$conn = new mySqli('localhost', 'root', '', 'bdescala');
if (!$conn) {
    die("Error: ");
}
else {
    echo ("Conexión OK");
}

?>