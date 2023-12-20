<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GordonRamsayLoves</title>
    <style>
     body {
  margin: 0;
  padding: 0;
}

article {
  padding: 50px;
  padding-left: 190px;
  padding-right: 190px;
}

header, footer {
  padding: 0;
  margin: 0;
}


article img {
  max-width: 100%; /* Чтобы изображение не выходило за пределы контейнера */
 
}
/* Увеличение размера обычного текста */
article p {
  font-size: 20px; /* Размер обычного текста */
}

/* Увеличение размера заголовков */
article h1 {
  font-size: 24px; /* Размер заголовка */
}
.ingredients-wrapper ul li {
        font-size: 1.2em; /* Размер текста для элементов списка */
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
    <article> 
        <h1><b>Что такое аюрведа/</b>Основные принципы и доступные рецепты</h1>
        <p>
          Аюрведа — древнеиндийское учение о жизни без лекарств, залогом здоровья является единство тела и духа, гармония с окружающим миром. Аюрведа — наука о том, как избежать заболеваний, о бережном лечении. Главное в этой системе — питание, а баланс веществ и стихий в организме — путь к долгой и счастливой жизни.
        </p>
        <img class="MMImage-Origin" src="https://yogavedi.ru/wp-content/uploads/2018/11/49389_rckasb.jpg"style="width: 35%;">
        <p>
            <b>Как питаться по аюрведе</b>
        </p>
        <p>
          <b>1.Определите свой физиологический тип</b>
      </p>
        <p>
          Весь мир и человек в нем состоят из пяти элементов: огонь, вода, земля, эфир, воздух. Но в каждом эти стихии проявляются по-разному. Аюрведа разделяет три типа функциональной энергии — доши, в которых сочетаются два из этих элементов. В зависимости от того, какие доши преобладают в человеке, определяют его физиологический тип и подбирают диету. Цель — поддержание баланса всех трех дош и управление доминирующей.
        </p>
        <p>
          По этому принципу с помощью правильно выбранной еды можно не только регулировать самочувствие, но и корректировать настроение и даже темперамент. Напротив, если не задумываться о питании, доминирующая доша выходит из-под контроля и приводит к болезням.
        </p>
        <p>
          <b><li>Вата</li></b>
      </p>
      <p>
        Это доша эфира и воздуха, координирует деятельность всего организма от интенсивности мыслительных процессов до метаболизма кишечника.
      </p>
        <p>
          Тип людей с преобладающей вата-дошей: худощавое телосложение, сухая кожа и тонкие губы, склонные к обветриванию, тонкие, ломкие волосы, рассеянность и быстрая утомляемость, легковозбудимая психика и затрудненная концентрация внимания.
        </p>
        <p>
          <b>Рекомендации по питанию:</b> пища должна быть теплой и достаточно увлажненной; меньше горького, вяжущего, острого, больше соленого, сладкого и кислого.
        </p>
        <p><b>Рекомендуемые продукты:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>супы-пюре;</li>
        <li>тушеные и жидкие блюда из овощей и круп;</li>
        <li>сыры;</li>
        <li>яйца;</li>
        <li>молоко;</li>
        <li>орехи;</li>
        <li>кабачки;</li>
        <li>дыни.</li>
        </ul>
        <p><b>Продукты, которых стоит избегать:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>сырые овощи;</li>
        <li>кефир;</li>
        <li>сухофрукты.</li>
        </ul>
        <p>
          <b><li>Питта</li></b>
      </p>
        <p>
          Это доша воды и огня. Отвечает за усвоение пищи, иммунитет и в целом за обмен веществ в организме.
        </p>
        <p>
          Тип людей с преобладающей питта-дошей: среднее телосложение спортивного типа, нормальные или тонкие волос, возможно раннее появление седины, комбинированная кожа, часто с крупными порами на носу, чувствительная к солнцу, склонна к акне и аллергии, губы средней толщины с яркой пигментацией, волевые и целеустремленные, со здоровым сном и хорошей памятью.
        </p>
        <p>
          <b>Рекомендации по питанию:</b> теплая или холодная пища; больше горького, сладкого, вяжущего, меньше острого, кислого, соленого, жирного.
        </p>
        <p><b>Рекомендуемые продукты:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>зеленые овощи и зелень;</li>
        <li>сладкие фрукты;</li>
        <li>злаки (рис, просо, овес, пшеница);</li>
        <li>белое мясо (курица, индейка).</li>
        </ul>
        <p><b>Продукты, которых лучше избегать:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>соленое;</li>
        <li>крепкие кофе и чай;</li>
        <li>алкоголь;</li>
        <li>жареное;</li>
        <li>жирное.</li>
        </ul>
        <p>
          <b><li>Капха</li></b>
      </p>
        <p>
          Это доша огня и земли. Отвечает за восстановление и рост новых клеток, особенно ярко проявляется в детстве.
        </p>
        <p>
          Тип людей с преобладающей капха-дошей: жирная, бледная пористая кожа, со склонностью к образованию прыщей и отеков, нормальные или жирные, часто волнистые волосы, пухлые губы с неяркой пигментацией, спокойные и флегматичные, спят подолгу и глубоко, выносливые, медлительные.
        </p>
        <p>
          <b>Рекомендации по питанию:</b> сухая, легкая, горячая, острая пища; избегать жирной, холодной еды, есть больше вяжущего, пряного, горького, меньше сладкого, кислого, соленого.
        </p>
        <p><b>Рекомендуемые продукты:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>белое мясо (курица, индейка);</li>
        <li>морепродукты;</li>
        <li>яйца;</li>
        <li>гречка;</li>
        <li>овощи (кроме картофеля);</li>
        <li>кислые или вяжущие фрукты;</li>
        <li>семечки;</li>
        <li>травяные чаи.</li>
        </ul>
        <p><b>Продукты, которых лучше избегать:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>красное мясо;</li>
        <li>белый рис;</li>
        <li>орехи;</li>
        <li>соль.</li>
        </ul>
        <p>
          <b>2. Слушайте организм</b> 
        </p>
        <p>
          В аюрведе главный повод для еды — чувство голода. Если не хочется есть, не нужно себя заставлять. Пить воду тоже по желанию и не стремиться выпивать определенный объем жидкости в сутки, если организм этого не требует.
        <p>
          <b>3. Правильно сочетайте продукты</b> 
        </p>
        <p>
          Питание должно быть разнообразным. Старайтесь, чтобы в один прием пищи на столе были продукты со всеми шестью вкусами: сладкий, горький, кислый, соленый, острый, вяжущий. При этом некоторые сочетания в аюрведе считаются нежелательными:
        </p>
        <div class="ingredients-wrapper">
        <ul>
        <li>яйца с мясом, рыбой, кисломолочными продуктами, бананами;</li>
        <li>молоко с мясом, рыбой, дрожжевым хлебом и кислыми фруктами;</li>
        <li>разные виды злаков между собой;</li>
        <li>кукуруза с другими продуктами;</li>
        <li>пасленовые (томаты, баклажаны) с огурцами, йогуртом.</li>
        </ul>
        <p>
          Не нужно сочетать продукты, которые трудно усваиваются. Поэтому некоторые блюда, которые нам кажутся полезными, с позиций аюрведических принципов не подходят человеку: молочный коктейль с бананом, каша на молоке с фруктами, фасоль с сыром, салат из помидоров и огурцов, заправленный йогуртом. Хлеб, молоко, фрукты лучше есть отдельно от других продуктов.
        </p>
        <p>
          <b>4. Относитесь к еде с уважением</b>
        <p>
          Не перекусывайте на ходу, готовьте с настроением, принимайте пищу с благодарностью. Перед едой желательно вымыть не только руки, но и лицо.
        </p>
        <p>
          <b>5. Соблюдайте режим</b> 
        </p>
        <p>
          Питание по аюрведе предполагает 3-4-разовый прием пищи: завтрак, обед, ужин или полдник и ужин. Важный прием пищи — обед: именно на эту трапезу приходится основной объем белка и наиболее плотные блюда.
        </p>
        <p>
          Если принимать пищу в одно и то же время, то со временем чувство голода будет наступать в нужный момент.
        </p>
        <p>
          <b></b>6. Пейте перед едой, а не после нее</b>
        </p>
        <p>
          Много жидкости после еды замедляет пищеварение: аюрведа утверждает, что тот, кто пьет перед едой, уменьшает вес. Тот, кто пьет во время еды — сохраняет. Тот, кто пьет после еды — увеличивает вес.
        </p>
        <p>
          <b>7. Следите за количеством и качеством еды</b>
        </p>
        <p>
          Еды должно быть не много и не мало: недоедание ослабляет организм, а еда до отвала приводит к дисбалансу всех дошей. Идеальная порция — два объема ладоней, сложенных лодочкой.
        </p>
        <p>
          После еды желудок должен быть заполнен наполовину твердой пищей, на четверть — жидкостью и еще четверть должна оставаться пустой для циркуляции воздуха и хорошего пищеварения.
        </p>
    </article>
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
