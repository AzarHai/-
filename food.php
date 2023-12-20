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
        <h1><b>Как стать шеф-поваром/</b>И можно ли устроиться без опыта</h1>
        <p>
            Шеф-повара — новые рок-звезды. Они мелькают в телевизионных передачах, издают книги и снимаются в рекламе. А заработки топовых шефов стремятся к бесконечности. Неудивительно, что к профессии повара все чаще присматриваются не только школьники, но и взрослые люди, которые не прочь сменить направление деятельности. К Международному дню повара мы узнали, как построить карьеру на кухне и какое нужно образование.
        </p>
        <img src="https://img.freepik.com/free-photo/close-up-hands-holding-fries_23-2149061583.jpg" class="card-img-top" alt="..." style="width: 40%;">
        <p>
            Всего столетие назад повара не получали никакого образования, а профессиональные навыки приобретали на кухне ресторана. Кажется, что это дело всем по плечу, однако нужно понимать, что приготовление еды на небольшую семью и готовка на профессиональной кухне в режиме нон-стоп — это две большие разницы.
        </p>
        <p>
            <b>Традиционное образование: колледж или университет</b>
        </p>
        <p>
            Старшее поколение поваров, как правило, обучалось профессии в техникумах и ПТУ. И сейчас в колледжах можно получить специальности «повар-кондитер», «пекарь» или «технолог общественного питания». В среднем процесс обучения длится от двух до пяти лет, в зависимости от учебной программы и от того, получаете ли вы образование на базе 9 или 11 классов средней школы.
        </p>
        <p>
            Помимо практических навыков, в колледже вы получите теоретическую базу: изучите основы кулинарии, микробиологию, терминологию профессиональной кухни, устройство кухонной техники, научитесь составлять технологические карты. Кроме того, обычно обучение в колледже чередуется с практикой на реальном производстве: в столовой, ресторане, кафе.
        </p>
        <p>
            Большой минус обучения в колледже — в несовременности. Студентов учат по старым учебникам и сборнику рецептур, разработанному еще во времена СССР. Будьте готовы к тому, что на реальной кухне придется переучиваться.
        </p>
        <p>
            Некоторые вузы в РФ, например РЭУ им. Плеханова или Московский государственный университет пищевых производств, готовят специалистов по программе «Технология продукции и организация общественного питания». Однако, скорее всего вы столкнетесь с теми же проблемами, что и в колледже — старая система обучения.
        </p>
        <p>
            <b>Коммерческие курсы и платное обучение</b>
        </p>
        <p>
            Красивые стильные кухни, оборудованные по самому последнему слову техники, преподаватели — шефы лучших ресторанов страны, удобный график учебы — все эти возможности предоставляют платные коммерческие курсы. Сразу стоит сказать, что за высокое качество придется дорого заплатить: стоимость годового обучения может составлять несколько сотен тысяч рублей. Но зато вы обучитесь самым современным техникам и рецептурам и сможете завести полезные связи.
        </p>
        <p>
            На базе Сибирского федерального университета в Красноярске работает Высшая школа гастрономии от Institut Paul Bocuse. Обучение платное, длится четыре года. В школе преподают французские и русские педагоги, а практика проходит на учебных кухнях института и в ресторанах. Выпускники-бакалавры получают два диплома: российский и международный. По окончании обучения можно пройти стажировку в крупных ресторанах.
        </p>
        <p>
            Московская Novikov School предлагает пройти поварской курс для профессионалов: есть базовый и продвинутый уровни. Программа для новичков предусматривает обучение практическим кулинарным навыкам, теории гастрономии и бизнес-процессам.
        </p>
        <p>
            В Москве работает Moscow Food Academy от Universal University — современный образовательный гастрономический проект. Желающие освоить профессию с нуля могут пройти курс «Современный повар», который дает теоретические основы и практику на профессиональной кухне. На курсе преподают состоявшиеся специалисты области, например шеф-повар ресторана Alice и бара Insider Bar. Артем Чудненко.
        </p>
        <p>
            Линейный повар в Москве сейчас зарабатывает около 3-3,5 тыс. рублей за смену в 12 часов. Зарплаты су-шефов и шефов повыше, но маловероятно, что вам доверят управление кухней без значительного опыта работы. То есть окупить дорогостоящее образование за рубежом вы сможете нескоро.
        </p>
        <p>
            При этом, многим шефам не важно, где вы учились, их волнуют ваши навыки, целеустремленность и готовность работать.
        </p>
        <img src="https://i.ytimg.com/vi/EG9NHYwrN3E/hq720.jpg?sqp=-…ADIQj0AgKJD&rs=AOn4CLA2u_Q8svvlQ8xuOuhylk-YyS_gqA" class="card-img-top" alt="..." style="width: 40%;">
        <p>
            <b>Разведка боем</b>
        </p>
        <p>
            Российский гастрономический мир сильно страдает от недостатка кадров. Причем рестораны и кафе нуждаются не только в высококвалифицированных поварах, но и в тех, кто будет выполнять самую простую работу. Это значит, что в ресторан можно устроиться без всякого опыта и профильного образования.
        </p>
        <p>
            <b>Что можно сделать</b>
        </p>
        <p>
            Не откладывать первый шаг, если мечтаете стать поваром. Попробуйте устроиться на бесплатную стажировку, например, по выходным или во время отпуска. Выберите интересные рестораны поблизости, напишите шефу в социальные сети или на электронный адрес ресторана. Полученный «в поле» опыт даст возможность сделать осознанный выбор.
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
  </body>
</html>
