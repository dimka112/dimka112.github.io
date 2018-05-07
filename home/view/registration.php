<h1><?= $data['title'] ?></h1>

    <form class="registerform" method="POST">
        <p><label for="username">Введите имя<br>
        <input class="input" id="username" name="username"size="32"  type="text" value=""></label></p>
       <p><label for="user_pass">E-mail<br>
       <input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
       <p><label for="user_pass">Пароль<br>
       <input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
       <p><label for="user_pass">Возраст<br>
       <input class="input" id="age" name="age"size="20" type="text" value=""></label></p>
       <p class="submit"><input class="button" id="send-button" name= "button" type="submit" value="Зарегистрироваться"></p>
    </form>
    