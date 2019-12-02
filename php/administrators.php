<?php
$arrScholaProgeniumUsers = [
  [ 
    'name' => 'Владимир Куров', 
    'group' => 'Cтудент',
    'email' => 'Vladimir@gmail.com',
    'age' => 24,
    'phone' =>'723-213-13'
  ],
  [ 
    'name' => 'Фёдор Ласко', 
    'group' => 'Cтудент',
    'email' => 'Lasko@gmail.com',
    'age' => 19,
    'phone' =>'823-213-14'
  ],
  [ 
    'name' => 'Лукас Бастон', 
    'group' => 'Cтудент',
    'email' => 'Lukas@gmail.com',
    'age' => 21,
    'phone' =>'923-213-15'
  ],
  [ 
    'name' => 'Карус Бром', 
    'group' => 'Cтудент',
    'email' => 'Brom@gmail.com',
    'age' => 25,
    'phone' =>'023-213-16'
  ],
  [ 
    'name' => 'Северина Райн', 
    'group' => 'Cтудент',
    'email' => 'Severina@gmail.com',
    'age' => 18,
    'phone' =>'123-213-17'
  ],
  [ 
    'name' => 'Ибрам Гаунт' , 
    'group' => 'Преподаватель',
    'email' => 'Ibram@gmail.com',
    'age' => 42,
    'phone' =>'223-213-18',
    'information' => 'Полковник-комиссар Танитского Первого и Единственного полка Имперской Гвардии.  Он воспитывался в Схоле Прогениум на мире Игнатиус Кардинал, где иногда его навещал его «дядя» — генерал Янтинских Патрициев Альдо Дерций.'
  ],
  [ 
    'name' => 'Себастьян Яррик', 
    'group' => 'Преподаватель',
    'email' => 'SebY@gmail.com',
    'age' => 56,
    'phone' =>'353-213-19',
    'information' => 'Лорд-комиссар 4-го полка Стального Легиона, специалист в области изучения зеленокожих ксеносов, герой Армагеддона.'
  ],
  [ 
    'name' => 'Кайафас Каин', 
    'group' => 'Преподаватель',
    'email' => 'Imperium@gmail.com',
    'age' => 69,
    'phone' =>'583-213-20',
    'information' => 'Имперский комиссар. Годы его службы пришлись на последнее столетие М41. Пропаганда Империума придала Каину образ великого героя, хотя на деле на протяжении всей своей долгой карьеры он был сфокусирован на собственном выживании.'
  ],
  [ 
    'name' => 'Лев Эль-Джонсон', 
    'group' => 'Администратор',
    'email' => 'Lion@gmail.com',
    'age' => 75,
    'phone' =>'493-213-21'
  ],
  [ 
    'name' => 'Робаут Жиллиман', 
    'group' => 'Администратор',
    'email' => 'Rob@gmail.com',
    'age' => 72,
    'phone' =>'653-213-22'
  ]
];
?> 

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="
         sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/background.css">
  <link rel="shortcut icon" href="../images/Favicon.ico" type="image/x-icon">
  <title>Cхола прогениум</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <img src="../images/3.png" width="40" height="40" alt="icon">
    <button class="navbar-toggler"
    type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse"
    id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active"> <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"> <a class="nav-link" href="users.php">Состав схолы</a> </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Фильтр
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Администраторы</a> <a class="dropdown-item"
            href="teachers.php">Преподаватели</a> <a class="dropdown-item" href="students.php">Студенты старше 21</a>           
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="background">
    <div class="container-fluid">
      <div class="container">
        <div class="w-10 p-15">
          <div class="card-group">
            <?php foreach ($arrScholaProgeniumUsers as $userAdministrator)
            if ($userAdministrator['group'] === 'Администратор'): ?>
              <div class="card text-white bg-dark mb-3" style="margin:15px; margin-top: 15%; ">
              <img src="../images/4.png" class="card-img-top" alt="Шапка">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">Администратор:</h5>
                  <p class="card-text" style="font-size: 15px; font-family: Arial Black; text-align: center;">
                    <?=  $userAdministrator['name'] ?>
                  </p>
                  <p class="card-text" style="text-align: center;">Контактный номер:
                    <?= $userAdministrator['phone'] ?><small class="text-muted"></small></p>
                </div>
              </div>
              <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
</body>

</html>