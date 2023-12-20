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
        <h1><b>Чем кормить семью в выходные/</b>Аппетитные идеи, чтобы провести время на кухне с удовольствием</h1>
        <p>
          Люди делятся на два типа. Первые ждут выходные, чтобы приготовить что-нибудь эдакое для семьи. У вторых выходные расписаны по минутам и лишнего времени на готовку тратить не хочется. Представим, что оба сценария вам подходят. Поэтому в субботу с удовольствием проведем день на кухне, а для воскресенья выберем простые, но вкусные рецепты. Что попадет в такое меню на выходные — в этом обзоре.
        </p>
        <img class="MMImage-Origin" src="https://voloktoday.ru/wp-content/uploads/2021/11/5-prichin-uzhinat-vsej-semej.jpg"style="width: 35%;"> 
        <p>
            <b>Субботний завтрак: лениво и красиво</b>
        </p>
        <p>
          После активной рабочей недели хочется выспаться. Поэтому завтракаем мы ближе к полудню. Пока все приходят в себя после долгого сна, есть время для экспериментов на кухне.
        </p>
        <p>
          Из чего приготовить завтрак, на который не жаль времени? Если предпочитаете яйца, попробуйте заменить привычный омлет изысканным вариантом с вялеными томатами и луком пореем. Яйцо кокот готовят в небольших формах для запекания — по одной порции в каждой. Это, кстати, удобно, если в доме есть дети, которые яйцу предпочтут сладкий завтрак. Приготовьте на взрослых, только они оценят такой необычный прием пищи.
        </p>
        <p>
          Нарезать овощи в кокотницу и разбить сверху яйцо занимает 10 минут. Еще 20 блюдо будет запекаться. Не будем терять время и приготовим завтрак для детей — он же десерт для себя.
        </p>
        <p>
          Это будет смузи боул — модная и очень полезная еда. Густой молочный коктейль с ягодами и фруктами, который подают в глубокой пиале как суп.
        </p>
        <p>
          Помимо необычного внешнего вида, еще одно ценное преимущество смузи боула — его можно приготовить из чего угодно. Фрукты, как правило, найдутся на каждой кухне, а в морозилке на такой случай припасен пакетик с замороженными ягодами. На завтрак одной семьи вполне хватит горсти клубники и пары бананов. Для большей пользы молоко заменим йогуртом, добавим семена чиа.
        </p>
        <p>
          Субботний завтрак должен быть красивым. Сервируем стол, украшаем тарелки с едой, а чтобы окончательно взбодриться, варим капучино с пышной пенкой. Большая кружка напитка располагает к неспешному общению с родными и планированию выходного дня.
        </p>
        <p>
          <b>Обед с размахом</b>
        </p>
        <p>
          Обед в будний день — контейнер с едой, разогретой в офисной микроволновке. Или максимум ланч в ближайшем к работе кафе. На неделе готовить первое, второе и компот нет никакой возможности, поэтому запланируем полноценный стол на субботу.
        </p>
        <p>
          На первое, конечно, суп. Куриная лапша и крем-суп готовятся легко и быстро — оставим их для вторника со средой. А вот если заскучали без борща, рассольника или шурпы, самое время приготовить их дома.
        </p>
        <p>
          Не забудьте про компот! А на десерт можно сделать кейк-попсы — оригинальные конфеты-пирожные на палочке. Привлеките к приготовлению детей: суббота — самое время научиться новому.
        </p>
        <p>
          <b>Ужин в субботу: одна рыба — два блюда</b>
        </p>
        <p>
        После плотного обеда с большим количеством белка вечером хочется чего-то полегче. Например, запеченную в духовке рыбу. Если брать в гастрономе непотрошеную, с ней, конечно, придется повозиться. Поэтому в будни руки до таких блюд доходят не у всех.
      </p>
        <p>
          Самый простой маринад для рыбы: растительное масло, перец, соль и лимонный сок. Если субботний вечер располагает к кулинарным экспериментам, приготовьте соус интереснее: горчичный или азиатский. На гарнир — классический рис или салат из свежих овощей.
        </p>
        <p>
          Кстати, если рыбы оказалось слишком много, из остатков приготовьте киш — сытный открытый пирог родом из Франции. Делают блюдо в два этапа:
        </p>
        <ul style="font-size: 1.2em;">
          <li>замешивают и выпекают самое простое пресное тесто из муки, воды, сливочного масла и яйца;</li>
          <li>добавляют начинку и доводят до готовности.</li>
          </ul>
        <p>
          Хозяйки любят киш за разнообразие начинок. Вот простые рецепты с фото из продуктов, которые почти всегда есть дома:
        </p>
        <ul style="font-size: 1.2em;">
          <li>семга + брокколи;</li>
          <li>сардины + маслины;</li>
          <li>лосось + рокфор.</li>
          </ul>
        <p>
          Если рыбы не осталась, приготовьте киш с другими начинками. Перец, грибы, курица — этот пирог хорош тем, что его можно испечь с любыми продуктами, завалявшимися в холодильнике. Даже если их совсем немного. И не придется бежать в гастроном!
        </p>
        <p>
          <b>Воскресный завтрак: каша, которую еще не пробовали</b>
        </p>
        <p>
          В воскресенье долго в постели не ленимся. Второй выходной день договорились провести активно. При этом вкусно, поэтому, не теряя драгоценных минут, отправляемся на кухню.
        </p>
        <p>
          Какой не слишком сложный и затратный по времени завтрак приготовить? Бутерброды с маслом и овсяные хлопья-пятиминутки, которыми обычно начинаем день в будни, приелись.
        <p>
          Простой, но не будничный вариант — каша из булгура. Да, эту пшеничную крупу тоже можно есть по утрам! Сварим ее не на воде, как обычно, а на молоке, добавим мед и орешки.
        <p>
          <b>Азиатский обед как из ресторана</b>
        </p>
        <p>
          В воскресенье многие не прочь побаловаться доставками готовой еды из ресторана. Азиатский суп или лапша в коробке — уже традиция. Но если приготовить такое блюдо дома, получится вкуснее. Вопреки ожиданиям, это окажется легко и быстро.
        </p>
        <p>
          Например, за 20 минут можно сварить легкий рамен — японский суп с говядиной, зеленью, водорослями и лапшой. Японцы добавляют в него яичную или удон. Блюдо получится полезнее, если не покупать готовую, а накрутить самостоятельно. Сделать это лучше заранее — на неделе, да побольше, чтобы хватило на несколько приготовлений. Правильная высохшая домашняя лапша в герметичной стеклянной таре может храниться несколько месяцев.
        </p>
        <p>
          Тесто из пшеничной муки, яиц и соли необходимо замешать и раскатать скалкой до одного-двух миллиметров толщиной. Для удобства можно воспользоваться специальной машинкой для лапши. Затем дать листам теста подсохнуть и нарезать соломкой.
        </p>
        <p>
          Продолжив азиатскую тему, на гарнир сварите рис для суши и скатайте симпатичные шарики или треугольники. Такое блюдо особенно оценят фанаты корейского сериала про кальмара. Остальные же увидят в нем онигири — легкое японское блюдо, идеальное для обеденного перерыва в выходной день.
        </p>
        <p>
          <b>Воскресенье: ужин с продолжением</b>
        </p>
        <p>
          У вечера воскресенья есть особая задача. Мало накормить семью вкусным ужином, несколько порций хорошо бы оставить на завтра. По понедельникам с его заботами думать об обеде совсем не хочется. Поэтому вечером второго выходного дня готовим много.
        </p>
        <p>
          Сытный вариант — запеченное в духовке мясо. Баранья нога, лопатка или вырезка телятины готовятся небыстро, зато не требуют вашей помощи. Замаринуйте заранее, закиньте в специальный пакет и занимайтесь своими делами. Через несколько часов ароматный ужин готов. В рукав к мясу можно добавить и овощи — молодой картофель, перцы, брюссельскую капусту. Получится полноценное блюдо с гарниром.
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
