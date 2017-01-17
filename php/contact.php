<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <meta name="theme-color" content="#2E2E2E">
        <title>site Quet Romain</title>
        <!--myCss-->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" media="(max-width: 992px)" href="../css/mobile.css" type="text/css" />

        <style>
            body {
                margin-top: 25%;
                text-align: center;
                font-size: 2em;
                overflow-y: hidden;
            }
            a {
                text-decoration: none;
                color: #8c0002;
            }
        </style>
    </head>
    <body>
        <video id="video_background" preload="auto" autoplay loop>
            <source src="../Ressource/video/sky.mp4" type="video/mp4"></video>
        <section id="background"></section>
        <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $message = "$name $email $msg";

        $to = 'contact@quetromain.hol.es';
        $objet = "contacte"; //Met l'objet que tu veux

        /* En-têtes de l'e-mail */
        $headers = "From: $name \r\n\r\n";

        /* Envoi de l'e-mail */
        if (mail($to, $headers, $objet, $message, $headers)) {

            echo "L'email a bien été envoyé."."<br />";
            echo "<a href='../'>retour</a>";
        }
        else
        {
            echo "Une erreur c'est produite lors de l'envois de l'email."."<br />";
            echo "envoyer votre message a ce mail:";
            echo "<a href='maito:quet.romain@gmail.com' style='color: white;font-size: 25px;margin-top: 1em'>quet.romain@gmail.com</a>"."<br />";
            echo "<a href='../'>retour</a>";
        }
        ?>
    </body>
</html>
