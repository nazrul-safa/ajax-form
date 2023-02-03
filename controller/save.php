<?php
include '../connection.php';
// Add Record in Database with Ajax jQuery
if ($_POST['type'] == 1) {
    if (isset($_POST['title']) && isset($_POST['content'])) {
        $title = $connection->real_escape_string($_POST['title']);
        $content = $connection->real_escape_string($_POST['content']);
        $sql = "INSERT INTO `posts` (`title`, `content`) VALUES ('$title', '$content')";
        $result = $connection->query($sql);
        echo $result;
    }
    $connection->close();
    die();
}
