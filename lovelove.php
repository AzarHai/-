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
        <h1>Клецке с грибами</h1>
        <p>
            Клецке - Европейское блюдо, состоящее, как правило, из муки и яйца. Обычно добавляются в суп или подаются к нему, но могут подаваться и как отдельное (второе) блюдо или как мучная составляющая к десерту.
        </p>
        <h2>Ингредиенты</h2>
        <div class="ingredients-wrapper">
        <ul>
        <li>10 г белых грибов сушеных</li>
        <li>0,25 литра ¼ молока</li>
        <li>2 столовые ложки сливочного масла</li>
        <li>100 г манной крупы</li>
        <li>соль</li>
        <li>мускатный орех</li>
        <li>1 яйцо (ы), возможно 2</li>
        <li>1 чайная ложка петрушки, очень мелко нарезанной</li>
        </ul>
        <img class="MMImage-Origin" src="https://resizer.mail.ru/p/698741d1-0321-5ebc-ace0-0d9f8f898244/AAAFuU_3MZhAAUzfKVRzzdOMVilkg6xRzQLw8TzkIQ6xaqnnKqyV4h_GHs0wOG0LR9uOv2E-YGJTjf0SHeKHpPOvheQ.jpg">
</div>
        <h2>Приготовление</h2>
        <p>1. Замочите подберезовики в теплой воде на полчаса. Затем процедите через сито и соберите жидкость для замачивания. Грибы очень мелко нарежьте.</p>
        <p>2. Доведите молоко с маслом, солью, мускатным орехом и грибами до кипения. Всыпьте манную крупу и перемешивайте, пока смесь не разрыхлится на дне кастрюли и не образует комок. Добавьте яйца и петрушку, еще раз приправьте по вкусу.</p>
        <p>3. Двумя чайными ложками выньте клецки из манной массы и дайте им настояться в подсоленной воде около пяти минут.</p>
        <p>4. Хорошо сочетаются с говяжьим, куриным и овощным бульонами, а также со смесью бульона и бульона из лесных грибов.</p>
        <p>5.  Совет:Готовьте не в бульоне, а отдельно, так как немного манной крупы может раствориться, а затем неаппетитно помутнить бульон.</p>
        <p>6. Слейте собранную воду для замачивания через фильтр и либо добавьте в бульон, если это уместно, либо используйте с другим блюдом.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dBOES2oErvo?si=MA8jqGrhxR6fubR2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div></div>
        <a href="https://youtu.be/dBOES2oErvo?si=MA8jqGrhxR6fubR2" target="_blank">Ссылка на видео YouTube</a>
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
        echo '<div id="comments" style="background-color: transparent; border: none;"></div>'; 
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