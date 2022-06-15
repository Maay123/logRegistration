

<header class="clearfix">
    
    <div class="fa fa-reorder menu-toggle"></div>
    <nav> 
      <ul>
      
        <?php if(isset($_SESSION['id'])): ?>
          <li>
            <a href="#" class="userinfo">
              <i class="fa fa-user"></i>
              <?=$_SESSION['username'];?>
              <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="dropdown">
            
              <li><a href="logout.php" class="logout">logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li><a href="register.php">Sign up</a></li>
          <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
</header>