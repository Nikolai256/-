<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Админка или регистрация</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" mt-4>
            <?php
             if($_COOKIE['user'] == ''):
            ?>
            <div class="row">
                <div class="col">
                    <h1>Форма регистрации</h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control"
                name="login" id="login" placeholder="Введите логин">
                <br>
                <input type="text" class="form-control"
                name="name" id="name" placeholder="Введите имя">
                <br>
                <input type="password" class="form-control"
                name="pass" id="pass" placeholder="Введите Пароль">
                <br>
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
            </form>
                </div>
                <div class="col">
                    <h1>Авторизация</h1>
            <form action="log.php" method="post">
                <input type="text" class="form-control"
                name="login" id="login" placeholder="Введите логин">
                <br>
                <input type="password" class="form-control"
                name="pass" id="pass" placeholder="Введите Пароль">
                <br>
                <button class="btn btn-success" type="submit">Авторизоваться</button>
            </form>
                </div>
                <?php else:?>
                  <p>Вы вошли в систему как <?=$_COOKIE['user']?>.
                <a href="/exit.php">Выход</a>.
                </p>
                <?php endif;?>
            </div>
        </div>
    </body>
</html>