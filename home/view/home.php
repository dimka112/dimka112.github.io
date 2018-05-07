<h1>Главная</h1>
<section class="main-menu">
    <div class="user-info">
        <?php if (!empty($data['user'])) { ?>

        <div class="table-header"><h4>ПОЛЬЗОВАТЕЛЬ УСПЕШНО ЗАРЕГЕСТРИРОВАН</h4></div>
        <ul>
            <li> Имя:      <span> <?= $data['user']['login'] ?> </span>    </li>
            <li> Email:    <span> <?= $data['user']['email'] ?> </span>    </li>
            <li> Пароль:   <span> <?= $data['user']['password'] ?> </span> </li>
            <li> Возраст:  <span> <?= $data['user']['age'] ?> </span>      </li>
        </ul>

        <?php } else { ?>

        <p>ДОБРО ПОЖАЛОВАТЬ!</p>

        <?php } ?>
    </div>
    <div class="all-users">
        <?php if (!empty($data['all'])) { ?>

        <div class="table-header"><h4>ВСЕ ПОЛЬЗОВАТЕЛИ</h4></div>

        <table class="table-users">
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Age</th>
            </tr>

            <?php for ($i = 1, $j = 0; $j < count($data['all']); $i++, $j++) { ?>

            <tr>
                <th> <?= $i ?> </th>
                <td> <?= $data['all'][$j]['login'] ?> </td>
                <td> <?= $data['all'][$j]['email'] ?> </td>
                <td> <?= $data['all'][$j]['age'] ?> </td>
            </tr>

            <?php } ?>
        </table>

        <?php } ?>
    </div>
</section>