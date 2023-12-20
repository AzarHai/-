<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GordonRamsayLoves</title>
    <style>
        body {
            font-size: 14px;
            text-align: center; /* Центрирование текста */
		
        }
	
        h1 {
            font-size: 24px;
            margin-top: 20px; /* Добавляем немного отступа для заголовка */
            text-align: center;
	    font-family:  Gabrilla;
	    color:black;
    	    text-shadow: 3px 3px 5px rgba(0, 0, 0, 2);
        }

        h2 {
             font-family:brush script mt,  sans-serif;
       	    color:black;
    	    text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
	    font-size: 20px;
            font-weight: normal;
            text-align: center;
        }
        h2.sub-heading {
    font-weight: normal; /* Убираем жирное выделение */
    font-size: 1.2em; 
  }
        #map {
            width: 600px;
            height: 400px;
            margin: 0 auto; /* Центрирование карты */
            margin-top: 20px; /* Добавляем отступ для карты */
            text-align: left; /* Убираем центрирование текста внутри карты */
        }
        main {
            flex: 1;
        }
        footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #f5f5f5;
  text-align: center;
  padding: 10px 0;
}
.carousel-item img {
  max-width: 100%;
  height: auto;
  object-fit: contain;
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
    <h1>Где нас найти</h1>
    <h2 class="sub-heading">Работаем с 12:00 до 00:00</h2>
    <div id="map" style="width: 600px; height: 400px;"></div>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=98b95686-dd86-4029-b8f1-40b354e9c474&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(init);
        function init() {
            var myMap = new ymaps.Map('map', {
                center: [59.989656, 30.209825], // координаты центра карты
                zoom: 15 // уровень масштабирования
            });

            // Добавление маркера на карту
            ymaps.geocode('Санкт-Петербург, Дачный пр., 18, 198215').then(function (res) {
                var firstGeoObject = res.geoObjects.get(0);
                myMap.geoObjects.add(new ymaps.Placemark(firstGeoObject.geometry.getCoordinates(), {
                    balloonContent: 'Дачный пр., 18, Санкт-Петербург, 198215'
                }, {
                    preset: 'islands#icon',
                    iconColor: '#0095b6'
                }));
                myMap.setCenter(firstGeoObject.geometry.getCoordinates());
            });
        }
    </script>
<section>
            <div class="container-xxl">
              <h2 class="text-center">Как выглядит наш ресторан</h2>
              <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
                data-bs-interval="3000"
              >
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                     src="https://www.tokyo-city.ru/images/restorany/veteranov114/11.jpg" 
                      class="d-block"
                      alt="Adopting"
                      style="margin: 0 auto"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                    src="https://static-pano.maps.yandex.ru/v1/?panoid=1253892491_627598898_23_1651581787&amp;size=500%2C240&amp;azimuth=-148.2&amp;tilt=10&amp;api_key=maps&amp;signature=D20mA43QPEzig0y2ya219SRuMfSljARFbdPd5ic61Z8=" 
                      class="d-block"
                      alt="adopting"
                      style="margin: 0 auto"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                    src="https://www.tokyo-city.ru/images/restorany/veteranov114/KEV08723.jpg" 
                      class="d-block"
                      alt="Adopting"
                      style="margin: 0 auto"
                    />
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleControls"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </section>

    <footer>
      <p>&copy 2023 by Arturchik</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
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