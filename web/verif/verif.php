<?php
if(!empty($_POST)){
    
    $to      ='jordan.oudot@jordanoweb.fr' ;
    $subject = 'demande pour un site '.$_POST['prenom'].' '.$_POST['nom'];
    $message = $_POST['message'];
    $headers = 'From:'.$_POST['email'] . "\r\n" .
    'Reply-To: '.$_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    $mail=true;
}

     if($mail){
         $messageValid="Votre message a été envoyé avec succès!";
         header('location:../../index.php?valid='.$messageValid.'#contact');
     }else{
         echo("une erreur est survenue, veuillez réessayer.");
     }
 ?>