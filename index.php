<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GordonRamsayLoves</title>
    <style>
      .title span {
  display: block;
  margin-left: 0; /* Убрать фиксированный отступ */
  margin-top: 20px; /* Примерное значение для вертикального отступа */
  text-align: center; /* Центрирование текста */
}
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./style.css" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=98b95686-dd86-4029-b8f1-40b354e9c474&lang=ru_RU" type="text/javascript"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-xxl">
          <a class="navbar-brand" href="/index.php">GordonRamsayLoves</a>
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
    <section class="container-xxl">
      <div class="row align-items-center">
        <div class="col-sm-5 col-md-7">
          <h1 class="title">"Всё должно быть сбалансировано: идеи, ингредиенты, меню.."<br><span style="margin-left: 280px;">Гордон Рамзи</span></h1>
        </div>
        <div class="col-sm-7 col-md-5">
          <img
            src="	https://burninghut.ru/wp-content/uploads/2021/05/11111.jpeg"
            alt="Ramsey"
            width="100%"
          />
        </div>
      </div>
    </section>
    <section>
      <div class="container-xxl">
        <h2 class="text-center">Самое интересное</h2>
        <div class="row pt-md-5 pb-md-5 pt-2 pb-2">
          <div class="col-md-4 col-xs-1">
            <div class="card">
              <img
                src="https://borodinanastyus.files.wordpress.com/2014/12/68175b02d86adf014a041a3dea821d3f.jpg"
                class="card-img-top"
                alt="Shef"
              />
              <div class="card-body">
                <h5 class="card-title">Как стать шеф-поваром/И можно ли устроиться без опыта</h5>
                </p>
                <a href="/food.php" class="btn btn-primary">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-1">
            <div class="card">
              <img
                src="	https://www.fashiontime.ru/upload/iblock/98a/98a3adc26983880cd303cbf64ca32271w500h500cr.jpg"
                class="card-img-top"
                alt="Food"
              />
              <div class="card-body">
                <h5 class="card-title">Чем кормить семью в выходные/Аппетитные идеи чтобы провести время на кухне с удовольствием</h5>
                </p>
                <a href="/shef.php" class="btn btn-primary">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-1">
            <div class="card">
              <img
                src="	https://medaboutme.ru/upload/resized/640x427/iblock/bf9/shutterstock_217495261.jpg"
                class="card-img-top"
                alt="Hz"
              />
              <div class="card-body">
                <h5 class="card-title">Что такое аюрведа/Основные принципы и доступные рецепты</h5>
                </p>
                <a href="/mission.php" class="btn btn-primary">Learn more</a>
              </div>
            </div>
          </div>
          <div class="container-xxl">
            <h2 class="text-center">Самое новое</h2>
            <div class="row pt-md-5 pb-md-5 justify-content-center">
              <div class="col-md-5 col-xs-1">
                <div class="card mx-auto" style="width: 100%">
                  <img src="https://lifehacker.ru/wp-content/uploads/2018/08/obl_1535365052-630x315.jpg" class="card-img-top img-fluid" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Полезные свойства облепихового варенья/И как его готовить</h5>
                    <a href="/oblepiha.php" class="btn btn-primary">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-xs-2">
                <div class="card mx-auto" style="width: 100%">
                  <img src="https://shop.miratorg.ru/upload/iblock/ac6/chasseur_90g_pepite.jpg" class="card-img-top img-fluid" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Венские вафли /История и рецепты приготовления</h5>
                    <a href="/vafli.php" class="btn btn-primary">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
    
    <footer>
      <p>&copy 2023 by Arturchik</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
       document.addEventListener('DOMContentLoaded', function() {
    // Найти все элементы с классом .register-link
    const registerLinks = document.querySelectorAll('.forget');

    // Для каждой найденной ссылки установить обработчик события клика
    registerLinks.forEach(function(registerLink) {
      registerLink.addEventListener('click', function(event) {
        event.preventDefault(); // Предотвратить переход по ссылке по умолчанию
        // Открыть модальное окно для регистрации
        const registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
        registerModal.show();
      });
    });
  });
      // Функция для перенаправления на страницу регистрации
    function redirectToRegistration() {
      window.location.href = 'registracia.php';
    }
    const registerLink = document.getElementById('registerLink');
  const registerModal = document.getElementById('registerModal');
  const closeButton = document.querySelector('.close');

  registerLink.addEventListener('click', (event) => {
    event.preventDefault();
    registerModal.style.display = 'block';
  });

  closeButton.addEventListener('click', () => {
    registerModal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === registerModal) {
      registerModal.style.display = 'none';
    }
  });
  
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