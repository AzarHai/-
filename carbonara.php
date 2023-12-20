<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GordonRamsayLoves</title>
    <style>
        body {
            text-align: center; /* Выравнивание текста по центру страницы */
            margin: 20px; /* Отступы от краев страницы */
            font-family: Arial, sans-serif; /* Шрифт по умолчанию */
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }
        h1 {
            text-align: center; /* Выравнивание заголовков по центру */
        }
        p {
            margin: 10px 40px; /* Внешние отступы слева и справа */
        }
        ul {
            text-align: left; /* Выравнивание текста слева */
            margin: 10px 40px; /* Внешние отступы сверху и снизу и слева и справа */
            padding-left: 20px; /* Внутренние отступы слева */
        }
       /* Уменьшение ширины текстового поля ввода комментария */
    #comment {
        width: 70%; /* Настройте значение в соответствии с вашими предпочтениями */
        max-width: 500px; /* Максимальная ширина поля ввода комментария */
    }
    /* Уменьшение ширины текстового поля ввода комментария */
    #name {
        width: 70%; /* Настройте значение в соответствии с вашими предпочтениями */
        max-width: 500px; /* Максимальная ширина поля ввода комментария */
    }
    .ingredients-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    gap: 20px; /* Расстояние между списком и изображением */
}

.ingredients-wrapper ul {
    flex: 1; /* Растягиваем список по ширине контейнера */
}

.ingredients-wrapper img {
    max-width: 40%; /* Ширина изображения */
}
h1, h2, p {
    font-size: 1.2em; /* Размер шрифта для заголовков и обычного текста */
}
#comments {
      margin-top: 20px;
      margin-left: 10px;
      padding: 15px;
      background-color: #ffffff;
      border: 1px solid #cccccc;
      /* Другие свойства стиля, которые вы хотите применить */
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
    <div class="container" style="font-size: 1.3em;">
        <h1>Паста Карбонара</h1>
        <p>
            Паста Карбонара (или спагетти Карбонара) — очень популярное блюдо итальянской кухни. Это спагетти с кусочками бекона, смешанные с соусом из яиц, сыра пармезан, соли и перца. Соус Карбонара доходит до полной готовности от тепла только что сваренной горячей пасты.
        </p>

        <h2>Ингредиенты</h2>
        <div class="ingredients-wrapper">
        <ul>
        <li>Спагетти - 200 г</li>
        <li>Бекон - 150 г</li>
        <li>Сливки 20% - 150 мл</li>
        <li>Сыр пармезан - 50 г</li>
        <li>Яичный желток - 3 шт</li>
        <li>Чеснок - 2-3 зубчика</li>
        <li>Масло растительное для жарки</li>
        <li>Соль</li>
        <li>Перец чёрный</li>
        </ul>
        <img src="https://s1.eda.ru/StaticContent/Photos/150525210126/150601174518/p_O.jpg" jsaction="VQAsE" class="sFlh5c pT0Scc iPVvYb" style="max-width: 1024px; height: 309px; margin: 0px; width: 463px;" alt="Паста карбонара «Pasta alla carbonara» рецепт – Итальянская кухня: Паста и  пицца. «Еда»" jsname="kn3ccd" aria-hidden="false">
</div>
        <h2>Приготовление</h2>
        <p>1. Подготавливаем все ингредиенты.</p>
        <p>2. Бекон нарезаем соломкой.</p>
        <p>3. Чеснок продавливаем через чеснокодавку или мелко нарезаем.</p>
        <p>4. На сковороде разогреваем немного растительного масла и на нём слегка обжариваем чеснок.</p>
        <p>5. Добавляем бекон и хорошо обжариваем.</p>
        <p>6. Сыр натираем на мелкой тёрке.</p>
        <p>7. В глубокую тарелку или миску выкладываем яичные желтки.</p>
        <p>8. Желтки солим, перчим и хорошо взбиваем.</p>
        <p>9. Добавляем сливки и тёртый сыр и снова тщательно перемешиваем.</p>
        <p>10. Спагетти отвариваем до готовности в соответствии с рекомендациями производителя на упаковке, очень важно не переварить их (чтобы правильно сварить спагетти существует одно правило: на 100 грамм спагетти необходимо 1 литр воды и 10 грамм соли). Сливаем воду.</p>
        <p>11. Выкладываем горячие спагетти в глубокую сковороду, добавляем яично-сливочный соус и хорошо перемешиваем.</p>
        <p>12. Сверху выкладываем жаренный бекон и ещё раз всё тщательно перемешиваем.</p>
        <p>13. Паста Карбонара готова, подавать её следует горячей, можно ешё посыпать сверху мелко тёртым пармезаном. Приятного аппетита!</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jVNX5aIo-IA?si=4LltLR5AhHJvum0K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div></div>
        <a href="https://www.youtube.com/watch?v=jVNX5aIo-IA" target="_blank">Ссылка на видео YouTube</a>
   
    </div>
    
    <section class="container-xxl">
    <?php
    // Проверка наличия Cookie
    if(isset($_COOKIE['user'])) {
        // Если Cookie с именем пользователя установлен, получаем имя пользователя из Cookie
        $username = $_COOKIE['user'];
    }

    // Показываем форму для отправки комментария
    if(isset($_COOKIE['user'])) {
        echo '<form id="comment-form">';
        echo '<div class="form-group">';
        echo '<label for="comment">Ваш комментарий:</label>';
        echo '<textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>';
        echo '</div>';
        echo '<button type="button" class="btn btn-primary" onclick="submitComment()">Отправить комментарий</button>';
        echo '</form>';
        echo '<div id="comments" style="background-color: transparent; border: none;"></div>'; // Добавление стилей напрямую
    }
    else {
        echo '<p>Для того чтобы оставить комментарий, пожалуйста, авторизуйтесь.</p>';
    }
    ?>
</section>


      
      
   
    <footer>
      <p>&copy 2023 by Arturchik</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script>
        // Функция для отображения комментариев из базы данных
        function showComments() {
            fetch('get_comment.php') // Предполагается, что у вас есть скрипт get_comments.php для получения комментариев
            .then(response => response.text())
            .then(data => {
                document.getElementById('comments').innerHTML = data;
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
        }
        
        // Отображаем комментарии при загрузке страницы
        window.onload = showComments;

        // Функция для отправки нового комментария
        function submitComment() {
            let formData = new FormData(document.getElementById('comment-form'));
            fetch('save_comment.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(() => {
                showComments(); // Показываем комментарии после отправки нового комментария
                document.getElementById('comment-form').reset();
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
        }
    </script>
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