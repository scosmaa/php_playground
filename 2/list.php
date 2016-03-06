<html>
    <head>
        <title>Prova connessione DB - Lista dei Post</title>
    </head>
    <body>
        <h1>Elenco dei post</h1>
        <ul>
            <?php foreach($result as $row ): ?>
                <li>
                    <a href="/show.php?id=<?php echo $row['id'] ?>">
                        <?php echo $row['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>


    </body>

</html>