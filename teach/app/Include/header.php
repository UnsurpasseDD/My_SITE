<header class="container-fluid">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <h1><a href="/"> My site</a></h1>
          </div>
          <nav class="col-8">
            <ul>
              <li><a href="index.php"><i class='bx bxs-home' ></i>Главная</a></li>
              <li><a href="info.php"><i class='bx bxs-phone' ></i>О нас</a></li>
              <li><a href="#"><i class='bx bxs-bowl-hot' ></i>Услуги</a></li>
              <li>
                  <?php if(isset($_SESSION['id'])): ?>
                  <a href="#"><i class='bx bxs-user'></i>
                    <?php echo $_SESSION['login'] ?>
                  </a>
                  <ul>
                    <?php if($_SESSION['admin']): ?>
                    <li><a href="#">Админ панель</a></li>
                    <?php endif; ?>
                    <li><a href="logout.php">Выход</a></li>
                  </ul>
                <?php else: ?>
                  <a href="log.php"><i class='bx bxs-user'></i>
                    Войти
                  </a>
                  <ul>
                    <li><a href="reg.php">Регистрация</a></li>
                  </ul>
                <?php endif; ?>
                
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</header>
