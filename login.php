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
   <div class=" wrapper">
      <section class="form login">
         <header>Приложение для чата в реальном времени</header>
         <form action="#" autocomplete="off">
            <div class="error-txt"></div>

            <div class="field input">
               <label>Электронная почта</label>
               <input type="text" name="email" placeholder="Введите адрес электронной почты">
            </div>
            <div class="field input">
               <label>Пароль</label>
               <input type="password" name="password" placeholder="Введите ваш пароль">
               <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
               <input type="submit" value="Подключиться">
            </div>

         </form>

         <div class="link">Еще не зарегистрировались? <a href="index.php">Регистрация</a>
         </div>
      </section>
   </div>

   <script src="javascript/pass-show-hide.js"></script>
   <script src="javascript/login.js"></script>

</body>

</html>