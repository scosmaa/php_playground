<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 05/03/2016
 * Time: 19:23
 */

$link = new PDO('mysql:host=localhost;dbname=playground','root','');
$result = $link->query('select * from post');

?>
<html>
    <head>
        <title>Prova connessione DB - Lista dei Post</title>
    </head>
    <body>
        <h1>Elenco dei post</h1>
        <ul>
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <li>
                    <a href="/show.php?id=<?php echo $row['id'] ?>">
                        <?php echo $row['title'] ?>
                    </a>
                </li>
            <?php endwhile ?>
        </ul>


    </body>

</html>
