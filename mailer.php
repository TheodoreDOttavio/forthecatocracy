<?php
echo("sent from ". $_POST['clientPhone']. "<br>The message is: ". $_POST['message']);
mail('7186785933@myboostmobile.com', 'Catocracy-Contact', $_POST['message']);
?>
