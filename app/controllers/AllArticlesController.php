<?php
if(isset($_GET['id'])){
    $subject = $_GET['id'];

    $query = "SELECT `article`.`title`, `article`.`content`, `article`.`creation_date`, `article`.`modification_date`, `user`.`pseudo`, `user`.`id` AS user_id
    FROM `article` 
    INNER JOIN `user` ON `article`.`id_user` = `user`.`id`
    WHERE `article`.`id_subject` = :id_subject";

    $queryStatement = $mysqlClient->prepare($query);
    $queryStatement->bindValue(':id_subject', $subject);
    $queryStatement->execute();
    $article = $queryStatement->fetch();
}


require_once ( __DIR__ . '/../Views/article/article.view.php');