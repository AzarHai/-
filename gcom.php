<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "register_bd"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение постов из базы данных с информацией об авторе и изображении
$sql = "SELECT posts.title, posts.content, posts.img, COALESCE(users.name, posts.name) AS user_name 
        FROM posts
        LEFT JOIN users ON posts.user_id = users.id
        ORDER BY posts.id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод данных каждого поста с указанием автора и изображения
    while($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h2>" . $row["title"] . "</h2>";
         
        // Отображение изображения, если путь к нему есть в базе данных
        if ($row["img"]) {
            echo "<img src='" . $row["img"] . "' alt='Изображение поста'>";
        }
        echo "<p>" . nl2br($row["content"]) . "</p>";
        echo "<p>Автор: " . $row["user_name"] . "</p>";
       

        echo "</div>";
        echo "<hr>";
    }
} else {
    echo "Нет постов для отображения";
}

$conn->close();
?>
