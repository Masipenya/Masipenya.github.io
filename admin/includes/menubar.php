<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Онлайн</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Статистика</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Статистика</span></a></li>
      <li class="header">Управление</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-refresh"></i>
          <span>Операции</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="borrow.php"><i class="fa fa-circle-o"></i> Взяли</a></li>
          <li><a href="return.php"><i class="fa fa-circle-o"></i> Вернули</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Книги</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="book.php"><i class="fa fa-circle-o"></i> Список книг</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Категории</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-graduation-cap"></i>
          <span>Студенты</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="student.php"><i class="fa fa-circle-o"></i> Список</a></li>
          <li><a href="course.php"><i class="fa fa-circle-o"></i> Курсы</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>