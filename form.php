<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "<h1>Результат</h1>";
    echo "<p>Ім'я: $name</p>";
    echo "<a href='index.html'>Назад</a>";
}
?>