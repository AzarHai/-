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
        <h1><b>Полезные свойства облепихового варенья/</b>И как его правильно готовить</h1>
        <p>
            Облепиху, которую за кисло-сладкий вкус называют «сибирским ананасом», едят свежей и заготавливают на зиму в виде варенья. Но сохраняется ли польза плодов после варки? Ответ — в материале GordonRamseyLoves.
        </p>
        <img class="MMImage-Origin" src="https://parfum-asmodeus.ru/wp-content/uploads/d/6/5/d65bcd12eceee2dbe8405d3125d03d5c.jpeg"style="width: 35%;"> 
        <p>
            <b>Польза и вред продукта</b>
        </p>
        <p>
            Польза облепихи заключается в ее антиоксидантных, противовоспалительных, противораковых и противовирусных свойствах. Плоды ягод богаты витаминами, минералами, флавоноидами и жирными кислотам.
        </p>
        <p>
            В 100 г свежей облепихи содержится 200 мг витамина C — это в пять раз больше, чем в лимоне, в том же количестве которого всего 40 мг этого вещества. В состав ягод также входит витамин E: достаточно съесть 100 г, чтобы получить треть от суточной нормы взрослого человека. Микроэлемент поддерживает здоровье сердца, активность мозга и предотвращает онкологические заболевания.
        </p>
        <p>
            В соке и косточках растения содержатся масла, состоящие из жирных кислот — пальмитиновой, пальмитолеиновой и олеиновой.
        </p>
        <p>
            Есть в ней каротиноиды — именно они отвечают за яркий оранжевый цвет. Их польза для организма выражается в мощном антиоксидантном эффекте.
        </p>
        <p>
            <b>Полезные свойства облепихового варенья</b>
        </p>
        <p>
            Содержание витамина C в различных продуктах после варки сокращается примерно в два раза — высокая температура негативно отражается на этом веществе. Однако чем меньше длительность тепловой обработки, тем больше изначальной пользы сохраняется в готовом блюде.
        </p>
        <p>
            Зато с жирорастворимым витамином E ситуация обратная: после варки, когда объем продукта уменьшается, его концентрация, наоборот, повышается. Причем результат не зависит от способа обработки — вы можете сварить облепиховое варенье как на огне, так и в микроволновке. Каротиноиды похожи по своим свойствам: они тоже жирорастворимые, поэтому сохраняются в процессе варки.
        </p>
        <p>
            Если сравнивать полезные свойства свежей облепихи и угощения из нее, ситуация неоднозначная: в свежих ягодах больше аскорбиновой кислоты, а в термически обработанных — жирных кислот и каротиноидов.
        </p>
        <p>
            <b>Как варить облепиховое варенье</b>
        </p>
        <p>
            Несмотря на то, что готовый продукт отличается по своим свойствам от свежих полезных ягод, приготовить его все равно стоит: облепиховое варенье — один из немногих способов сохранить урожай на зиму.
        </p>
        <p><b>Десерт может выглядеть по-разному:</b></p>
        <div class="ingredients-wrapper">
        <ul>
        <li>целые ягоды в сиропе</li>
        <li>пюре;</li>
        <li>джем или желе.</li>
        </ul>
        <p>
            Время варки зависит от конкретного рецепта, обычно процесс занимает от 10-15 минут до нескольких часов. В классическом варианте ягоды кипятят несколько раз, полностью остужая массу между нагреваниями — это позволяет избежать долгого кипения и сохранить облепиху целой и красивой. Если внешний вид не принципиален, дождитесь закипания и оставьте вариться на медленном огне на 30-60 минут.
        </p>
        <p>
            Готовый продукт еще горячим разлейте по стерилизованным банкам, остудите до комнатной температуры и перенесите в погреб или уберите на хранение в холодильник.
      </p>
        <p>
            <b>Как сделать заготовку полезнее</b>
        </p>
        <p>
            Один из способов получить больше пользы — добавить в состав другие продукты. Например, лимоны, апельсины, мандарины, клюкву, бруснику, рябину или специи. Но его недостаток в том, что полезные свойства остальных ингредиентов тоже частично теряются во время тепловой обработки.
        </p>
        <p>
            Чтобы сократить потерю ценных веществ, варите «пятиминутки». Главное отличие этой разновидности кроется в названии: массу кипятят всего пять минут, после чего сразу закатывают в банки. Такое угощение жидкое, зато более питательное: чем меньше кипит облепиховое варенье, тем больше витаминов в нем сохраняется.
        </p>
        <p>
            Еще один вариант поможет ослабить вредное воздействие. И связан он с сахаром, который в заготовки кладут довольно много. Так как облепиха кислая, некоторые на килограмм ягод берут до двух килограммов сахарного песка — сократите это количество хотя бы до пропорции 1:1.
        </p>
        <p>
          <b>Как есть и с чем подавать облепиховое варенье</b>
        </p>
        <p>
            Чтобы получить пользу из готового десерта, ешьте его ложкой и запивайте теплым чаем. Также можно подать розетку со сладкой ароматной массой к блинам, оладьям, сырникам, тостам и круассанам. Не менее вкусно поливать сиропом кашу или творог, можно использовать для приготовления чиа-пуддинга.
        </p>
        <p>
            Нестандартный вариант подачи — к мясу и птице. Если нравятся такие блюда с брусничным или клюквенным соусом, попробуйте взять вместо них аналог из облепихи. Готовить соус отдельно не обязательно: можно использовать обычное варенье. Подавайте с уткой, индейкой, курицей, говядиной и рыбой.
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
