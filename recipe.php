<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GordonRamsayLoves</title>
    <style>
      footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #f5f5f5;
  text-align: center;
  padding: 10px 0;
}
.post {
  margin-bottom: 20px; /* Регулируйте значение в пикселях или других единицах измерения для необходимого вам интервала */
}
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
  <header>
    <!-- Модальное окно для авторизации -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <a href="#" class="forget me-3" data-bs-toggle="modal" data-bs-target="#registerModal">Регистрация?</a>
        <h5 class="modal-title" id="loginModalLabel">Авторизация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="auth.php" method="post">
          <input type="text" class="form-control mb-3" name="login" id="login" placeholder="Введите логин">
          <input type="password" class="form-control mb-3" name="pass" id="pass" placeholder="Введите пароль">
          <button class="btn btn-success">Войти</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Модальное окно для регистрации -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Регистрация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="check.php" method="post">
          <input type="text" class="form-control" name="login"
          id="login" placeholder="Введите логин"><br>
          <input type="text" class="form-control" name="name"
          id="name" placeholder="Введите имя"><br>
          <input type="password" class="form-control" name="pass"
          id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success">Зарегистрировать</button>
      </form>
      </div>
    </div>
  </div>
</div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-xxl">
          <a class="navbar-brand" href="index.php">GordonRamsayLoves</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item show">
                <a class="nav-link" href="recipe.php">Рецепты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="yourrecipe.php">Ваши посты о еде</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lol.php">Наш ресторан</a>
              </li>
            </ul>
            <?php
// Проверка наличия Cookie
if(!isset($_COOKIE['user'])) {
    // Если Cookie отсутствует, показываем кнопку Войти
    echo '<form class="d-flex">';
    echo '<button class="btn btn-primary me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</button>';
    echo '</form>';
} else {
    // Если Cookie присутствует, показываем кнопку Выйти и выводим изображение в виде уменьшенного круга с контуром и выпадающим списком
    echo '<div class="dropdown" style="position: relative;">';
    echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; top: 100%;">';
    echo '<li><a class="dropdown-item" href="/exit.php">Выйти</a></li>';
    echo '</ul>';
    echo '</div>';
    // Добавляем тег img для отображения изображения в виде уменьшенного круга с контуром и возможностью выпадения списка
    echo '<div class="dropdown" onmouseover="showDropdown()" onmouseout="hideDropdown()" style="margin-top: 10px;">';
    echo '<img src="https://cdn-icons-png.flaticon.com/512/6391/6391572.png" alt="Изображение" style="border-radius: 5%; width: 60px; height: 60px; border: 2px solid black; object-fit: cover; object-position: center;">';
    echo '</div>';
}
?>
          </div>
        </div>
      </nav> 
    </header>
    <div class="container">
      <div class="content row">
        <div class="main-content col-md-9 col-12">
          <h2>Любимые рецепты Гордона Рамзи</h2>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <a href="carbonara.html">
                <img src="https://www.patee.ru/r/x6/11/70/8e/960m.jpg" alt="" class="img-thumbnail" style="width: 100%;">
              </a>
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="carbonara.php">Рецепт Карбонары</a>
              </h3>
              <i class="far fa-calendar">Mar 11,2019</i>
              <p class="preview-text">
                Наивкуснейший белый соус (creamy carbonara) со вкусом ветчины,
                чесночка с сыром и с большим количеством сливок. 
                Это блюдо готовили итальянские жены для своих мужей-угольщиков.
                Вот, что я забыла, так это посыпать сверху свежемолотым черным перцем,
                который и должен напоминать угольную пыль.
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <a href="borsch.html">
                <img class="MMImage-Origin" src="https://i.pinimg.com/originals/38/f2/31/38f231dead04770a8feb11e54708546e.jpg" style="width: 100%;">
              </a>
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="borsch.php">Рецепт Борщ красный холодный</a>
              </h3>
              <i class="far fa-calendar">Mar 11,2019</i>
              <p class="preview-text">
                Наверно, каждая хозяйка знает, как сварить красный холодный борщ.
                Этот летний свекольный супчик готовится быстро,
                а съедается просто моментально).
                Полезно, просто, вкусно, экономично и аппетитно – все это можно сказать о холодном свекольнике.
                   
              </p>
            </div>
          </div>
          <div class="post row">
            <div class="img col-12 col-md-4">
              <a href="lovelove.html">
                <img class="MMImage-Origin" src="http://ideireceptov.ru/wp-content/uploads/2019/03/s1200-3.jpg"style="width: 100%;">
              </a>
            </div>
            <div class="post_text col-12 col-md-8">
              <h3>
                <a href="lovelove.php">Рецепт Клецки с белыми грибами</a>
              </h3>
              <i class="far fa-calendar">Mar 11,2019</i>
              <p class="preview-text">
                Когда вытаскивали из печки такой суп с грибами и клецками,
                запах стоял необыкновенный,казалось,
                что вкуснее ничего нет на свете. Ностальгия по кухне 60х.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <p>&copy 2023 by Arturchik</p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script>
    function showDropdown() {
        document.querySelector('.dropdown-menu').style.display = 'block';
    }

    function hideDropdown() {
        document.querySelector('.dropdown-menu').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function() {
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Удаляем класс 'active' у всех пунктов
                dropdownItems.forEach(function(el) {
                    el.classList.remove('active');
                });

                // Добавляем класс 'active' только к выбранному пункту
                this.classList.add('active');
            });
        });
    });
</script>
  </body>
</html>
