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
        <h1><b>Венские вафли/</b>История и рецепты приготовления</h1>
        <p>
            Венские вафли могут быть разными: сладкими, солеными, диетическими и творожными. Их можно подавать с начинкой или включить добавку в тесто. Рассказываем, как появился воздушный десерт и как его приготовить дома.
        </p>
        <img class="MMImage-Origin" src="https://fb.ru/misc/i/gallery/59116/2736999.jpg"style="width: 35%;"> 
        <p>
            <b>История венских вафель</b>
        </p>
        <p>
            В Европе впервые о вафлях узнали в XVIII веке. Попробовать их могли только богатые люди, так как рецепт и процесс приготовления были сложными. Но в 1869 году появилась первая вафельница, что помогло сделать вафли более доступной сладостью.
        </p>
        <p>
            В 1898 году австралийский кондитер Йозеф Маннер придумал аналог классическим вафлям и назвал их неаполитанскими. Первой начинкой для них стала ореховая паста, так как орехи в большом количестве поставлялись из Неаполя. Со временем вафли стали готовить с фруктами, медом, несладкими начинками.
        </p>
        <p>
            <b>Чем венские вафли отличаются от бельгийских</b>
        </p>
        <p>
            Под этими сладостями часто понимают одно блюдо. Однако между ними есть разница. Бельгийские вафли в Бельгии называют брюссельскими и это не единственная разновидность десерта. Обычно они имеют квадратную форму и более пышное тесто, чем венские. Все потому, что их готовят на дрожжах и добавляют взбитые белки. Еще есть льежские вафли — они более сухие и имеют овальную форму.
        </p>
        <p>
            Венские вафли — аналог бельгийских, но с более плотной текстурой. Дрожжи в них не добавляют, тесто получается густым, а готовые вафли мягкие с хрустящей корочкой.
        <p>
            Оба вида вафель четко разделяют только в Бельгии и некоторых других странах. Но в большинстве случаев разницы между ними не делают ни в кафе, ни в домашних рецептах.
        </p>
        <p>
          <b>Как приготовить тесто</b>
        </p>
        <p>
            Топинг — важный, но не основной акцент в вафлях. Чтобы они получились по-настоящему вкусными и воздушными, обратите внимание на приготовление теста.
        </p>
        <p>
            Есть два момента. Первый — смешивайте сухие и жидкие ингредиенты отдельно, при этом не забывая просеять муку. Тщательно перемешайте обе массы и объедините их: жидкие влейте к сухим.
        </p>
        <p>
            Второй — не вымешивайте тесто. Достаточно хорошо перемешать все ингредиенты и оставить массу на 3–5 минуты, чтобы она получилась однородной. Затем сразу выливайте ее в электровафельницу.
        </p>
        <p><b>Вот еще несколько советов:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>Для пышных вафель взбейте белки до мягких пиков и аккуратно введите в тесто. Выпекайте их сразу, чтобы белки не успели осесть.</li>
        <li>Выливайте тесто мерной ложкой, чтобы оно равномерно распределилось на решетке.</li>
        <li>Чтобы вафли получились нежнее, добавьте пару ложек сметаны или греческого йогурта.</li>
        <li>Вафли могут быть в вегетарианском или ПП-варианте. Например, вместо пшеничной муки используйте рисовую, кукурузную или овсяную, а яйцо замените семенами льна. Кокосовое масло отлично заменит сливочное, а растительное молоко добавит новые сладковатые нотки.</li>
        </ul>
        <p>
          <b>Венские вафли: рецепты</b>
        </p>
        <p>
            Не ограничивайте фантазию. Венские вафли тем и хороши, что разные начинки раскрывают их вкус по-новому.
      </p>
        <p>
            <b>1. С белым шоколадом и клюквой</b>
        </p>
        <p>
            Предлагаем заменить классическое имбирное печенье на вафли — не менее ароматное и вкусное угощение. Готовый десерт украсьте сахарной пудрой и веточкой мяты. Подавайте с горячим напитком.
        </p>
            <p><b>2. С грушей</b></p>
        <p>
            Мягкая тягучая карамель, сладкая груша, нежные вафли. Как устоять перед таким десертом? Для приготовления карамельного соуса нагрейте сахар на сливочном масле. Когда он начнет карамелизироваться, добавьте ломтики груши и мешайте, пока фрукт не станет нежно-коричневого цвета и масса не загустеет.
        </p>
        <p><b>3. С бананом и ягодами</b></p>
        <p>
            Вафли в этом рецепте получаются особенно нежными за счет творога и сметаны, а сыр делает вкус сливочным. Летом в качестве топинга подойдут любые свежие ягоды: малина, черника, черная смородина. Но и в другой сезон можно побаловать себя этим лакомством. Разомните ягоды, смешайте их с сахаром или медом — начинка для вафель готова. Ягодное варенье или джем тоже подойдут.
        </p>
        <p>
          <b>4. С авокадо и красной рыбой</b>
        </p>
        <p>
            Диетический рецепт с миндальной мукой. С ней вафли получаются нежными с тонкими ореховым послевкусием. Творожный сыр дополнит мягкую текстуру и вафли будут таять во рту. На готовые вафли выложите ломтики авокадо, слабосоленую семгу и пару веточек руколы.
        </p>
        <p>
        <b>5. С сыром и кориандром</b>
        <p>
            В этом варианте вафли подаются без начинки: она скрывается внутри. Когда приготовите тесто, добавьте в него тертый сыр и перемешайте до однородности. Распределите массу на вафельницу и выпекайте 3-5 минут. Готовые вафли смажьте любимым соусом и заверните трубочкой.
       <p>
        Попробуйте блюдо со сметанным, сырным соусами или хумусом.
       </p>
        <p>
          <b>6. С тыквой и сыром</b>
        </p>
        <p>
            Яркие и аппетитные тыквенные вафли открывают новые вкусовые сочетания. Тыкву вместе с сыром натрите на крупной терке, добавьте остальные ингредиенты и перемешайте. Блюдо получается сытным с самодостаточным вкусом, поэтому топинг здесь необязателен.
        </p>
        <p>
            <b>7. С шоколадом</b>
        </p>
        <p>
            Домашний десерт с обволакивающим вкусом шоколада и ароматом какао. Его добавляем в тесто, а для топинга растапливаем шоколад на водяной бане. Сюда также отлично впишется банан или пара шариков сливочного мороженого.
        </p>
        <p>
            <b>8. С морковью и авокадо</b>
        <p>
            Вкус венских вафель будет зависеть от моркови. Чем она сочнее, тем насыщеннее будет вкус, а сами вафли мягче. В морковно-творожную смесь добавьте просеянную муку, перемешайте и выпекайте в вафельнице. Готовые вафли украсьте авокадо и орешками.
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
