<?php
session_start();
if (isset($_SESSION['unique_id'])) {
   header("location: users.php");
}
?>

<?php
include_once "header.php"
?>

<body>
   <div class="wrapper">
      <section class="form signup">
         <header>Приложение для чата в реальном времени</header>
         <form action="#" enctype="multipart/form-data" autocomplete="off">
            <div class="error-txt"></div>
            <div class="name-details">
               <div class="field input">
                  <label>Имя</label>
                  <input type="text" name="fname" placeholder="Имя" required>
               </div>
               <div class="field input">
                  <label>Фамилия</label>
                  <input type="text" name="lname" placeholder="Фамилия" required>
               </div>
            </div>
            <div class="field input">
               <label>Электронная почта</label>
               <input type="text" name="email" placeholder="Введите адрес электронной почты" required>
            </div>
            <div class="field input">
               <label>Пароль</label>
               <input type="password" name="password" placeholder="Введите новый пароль" required>
               <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
               <label>Выберите изображение</label>
               <input type="file" name="image" placeholder="Выберите файл" required>
            </div>
            <div class="field button">
               <input type="submit" value="Регистрация">
            </div>

         </form>
         <div class="link">Уже зарегистрированы ? <a href="login.php">Войти</a>
         </div>
      </section>
   </div>

   <script src="javascript/pass-show-hide.js"></script>
   <script src="javascript/signup.js"></script>

</body>

</html>