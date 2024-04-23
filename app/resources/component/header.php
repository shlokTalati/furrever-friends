<!-- <?php echo var_dump($_SESSION['user']); ?> -->

<header class="header">
  <a href="/petmarket/home" class="logo"><i class="fas fa-paw"></i> FurrEver friEnd </a>

  <nav class="navbar">
    <a href="/petmarket/home"> Home </a>
    <a href="/petmarket/aboutus"> About Us</a>
    <a href="/petmarket/faq"> FAQs </a>
    <a href="/petmarket/listpet"> List a Pet </a>
    <a href="/petmarket/exploreyourtype"> Explore Your Type </a>
    <a href="/petmarket/browsepet"> Browse Pet</a>
  </nav>

  <div class="icons">
    <a class="text-decoration-none" href="/petmarket/authentication?logout=true">
      <button class="btn" id="logoutBtnNav">Logout</button>
    </a>
    <a href="/petmarket/userprofile">
      <i class="fas fa-user header-icon"></i>
    </a>

    <!-- Notification tab -->

    <a href="/petmarket/requests">
  <div class="notification-tab">
        <!-- Use a built-in icon for the notification icon -->
        <i class="fas fa-envelope header-icon"></i> <!-- Change the icon class as needed -->
        <!-- This will be updated dynamically with JavaScript -->
        <div class="notification-count"><?php echo $Base->getNotificationCount() ?></div> 
      </div>
    </a>
    <div class="wishlist-icon">
      <a href="/petmarket/wishlist">
        <i class="fas fa-heart header-icon"></i>
      </a>
    </div>
    

    <!-- Wishlist icon -->
    
  </div>
  
  
</header>




<style>
  /* Style for the active navigation link */
  .navbar a.active {
    color: var(--main); /* Change color as desired */
    font-weight: bold; /* Example style */
  }

  .notification-tab {
    position: relative;
    display: inline-block;
  }

  .header-icon{
    font-size: 24px;
    color:#000;
    margin-left: 20px;
  }

  .header-icon:hover{
    color: var(--main);
  }

  .notification-count {
  position: absolute;
  top: -12px; 
  right: -12px; 
  min-width: 24px; 
  height: 24px; 
  padding: 6px 10px;
  border-radius: 50%;
  color: red !important; 
  font-size: 18px; 
  font-weight: bold;
  text-align: center;
  background-color: transparent !important;
  border: none !important; 
  outline: none !important; 
  box-shadow: none !important; 
}

/* Adjustments to align wishlist icon with other buttons */
.icons {
  display: flex;
  align-items: center; 
}

/* Style for the logout button */
#logoutBtnNav {
  margin-left: auto; 
}

.wishlist-icon a {
  display: inline-block;
}
</style>

<script>
  // Get the current URL path
  var path = window.location.pathname;

  // Get all navigation links
  var navLinks = document.querySelectorAll('.navbar a');

  // Loop through each navigation link
  navLinks.forEach(function(navLink) {
    // If the link's href matches the current URL path, add the 'active' class
    if (navLink.getAttribute('href') === path) {
      navLink.classList.add('active');
    }
  });

</script>