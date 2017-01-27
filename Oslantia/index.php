<!DOCTYPE html>
<html lang="fr-FR" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <meta name="theme-color" content="#2E2E2E">
        <link rel="icon" href="">
        <title>Oslantia</title>
        <style>
            body {
                background: url("http://minecraft.fr/wp-content/themes/sage/dist/images/bg.jpg");
                color: white;
            }
            header {
                font-size: 2em;
                text-align: center;
            }
            img {
                width: 50%;
            }
            section {
                display: flex;
                justify-content: space-around;
                font-size: 30px;
            }
            div {
                background-color: rgba(99, 99, 102, 0.7);
                padding: 1em;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Oslantia</h1>
            <img src='http://panel.omgserv.com/banner/109150' />
        </header>
        <section>
            <div>
                <h2>Statut du serveur</h2>
                <?php
                $data = json_decode(file_get_contents("http://panel.omgserv.com/json/109150/status"));
                $status = $data->status->online ? "En ligne" : "Hors ligne";
                $cpu = $status ? $data->status->cpu : "N/C";
                $ram = $status ? round($data->status->ram / 1024) : "N/C";

                ?>
                <ul>
                    <li>Statut : <?= $status ?></li>
                    <li>CPU : <?= $cpu ?>%</li>
                    <li>RAM : <?= $ram ?>Mo</li>
                </ul>
            </div>
            <div>
                <h2>Joueurs connectés</h2>
                <ul>
                    <?php
                    $data = json_decode(file_get_contents("http://panel.omgserv.com/json/109150/players"));
                    if (empty($data->players)) {
                        echo('<li>Aucun joueur connecté</li>');
                    } else {
                        foreach ($data->players as $player) {
                            echo('<li>'.$player.'</li>');
                        }
                    }
                    ?>
                </ul>
            </div>
        </section>
    </body>
</html>
