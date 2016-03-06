<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 05/03/2016
 * Time: 19:23
 */

$link = new PDO('mysql:host=localhost;dbname=playground','root','');
$result = $link->query('select * from post')->fetchAll(PDO::FETCH_ASSOC);
$link = null;

require '2/list.php';
