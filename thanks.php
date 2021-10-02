<?php
    echo "Merci ".$_POST['last_name']." ".$_POST['first_name']. 
    " de nous avoir contacté à propos de ". $_POST['sujet']. ".<br>";
    echo "Un de nos conseiller vous contactera soit à l’adresse ".$_POST['user_mail'].
    " ou par téléphone au ". $_POST['user_phone_number'].
    " dans les plus brefs délais pour traiter votre demande : <br>";
    echo $_POST['user_message'];
?>