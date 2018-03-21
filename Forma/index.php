<!DOCTYPE html>
  <html>
<head>
  <meta charset="utf-8">
 <title>Сайт</title>
 <link rel="stylesheet" href="style.css">
</head>
        <body>
      <header>
           <div class="container">
          <ul>
              <li>
                  <a href="/?route=registration" ><h1>Регистрация</h1></a>
                   <a href="/?route=autoregistration" ><h1>Вход</h1></a>
              </li>
          </ul>
           </div>
      </header>
            <?php
            if(isset($_GET['route']) && $_GET['route'] === 'registration')
{
    include 'forma.php';
}
             if(isset($_GET['route']) && $_GET['route'] === 'autoregistration')
{
    include 'vhod.php';
}       
if(isset($_GET['route']) && $_GET['route'] === 'registration-save')
{
    // задаем путь к директории куда будем сохранять файл
    $upload_pach = __DIR__ . "/files/";
    // Обьединяем путь к папке с именем файла
    $upload_file = $upload_pach . basename($_FILES['file']['name']);
    // Получаем временный путь к файлу куда его сохранил сервер        
    $tmp_pach = $_FILES['file']['tmp_name'];
    // Перемещаем файл из временной директории в директорию files
            move_uploaded_file($tmp_pach, $upload_file);
    include 'forma.php';
}

?>
        </body>
  </html>