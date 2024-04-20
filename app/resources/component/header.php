<header class="header">
  <a href="/petmarket/home" class="logo"><i class="fas fa-paw"></i> FurrEver friEnd </a>

  <nav class="navbar">
    <a href="/petmarket/home"> home </a>
    <a href="/petmarket/aboutus"> About Us</a>
    <a href="/petmarket/faq"> FAQs </a>
    <a href="/petmarket/listpet"> list a pet </a>
    <a href="/petmarket/exploreyourtype"> explore your type </a>
    <a href="/petmarket/browsepet"> Browse Pet</a>
  </nav>

  <div class="icons">
    <a class="text-decoration-none" href="/petmarket/authentication?logout=true">
      <button class="btn" id="logoutBtnNav">Logout</button>
    </a>
    <a href="/petmarket/userprofile">
      <div id="login-btn" class="fas fa-user"></div>
    </a>

    <!-- Notification tab -->

    <a href="/petmarket/requests">
  <div class="notification-tab">
      <div class="notification-icon">
        <!-- Use a built-in icon for the notification icon -->
        <i class="fas fa-envelope"></i> <!-- Change the icon class as needed -->
        <div class="notification-count">0</div> <!-- This will be updated dynamically with JavaScript -->
      </div>
    </div>
    </a>
    <div class="wishlist-icon">
      <a href="/petmarket/wishlist">
        <i class="fas fa-heart"></i>
      </a>
    </div>
    

    <!-- Wishlist icon -->
    
  </div>
  
  
</header>

</header>

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

<style>
  /* Style for the active navigation link */
  .navbar a.active {
    color: var(--main); /* Change color as desired */
    font-weight: bold; /* Example style */
  }
</style>


<script>
  // JavaScript code for handling notifications
  // This code will update the notification count dynamically
  // You need to implement the logic to fetch the actual notification count from the server

  // Function to fetch notification count from the server
  function fetchNotificationCount() {
    // Implement your logic to fetch notification count via AJAX
    // For demonstration purpose, let's set a random count
    var notificationCount = Math.floor(Math.random() * 10); // Random count between 0 and 9
    return notificationCount;
  }

  // Function to update the notification count in the UI
  function updateNotificationCount(count) {
    var notificationCountElement = document.querySelector('.notification-count');
    notificationCountElement.textContent = count;
  }

  // Update notification count initially on page load
  updateNotificationCount(fetchNotificationCount());

  // Function to periodically update notification count
  setInterval(function() {
    updateNotificationCount(fetchNotificationCount());
  }, 60000); // Update every minute (adjust as needed)
</script>

<style>
  .notification-tab {
    position: relative;
    display: inline-block;
    /* Ensure notification icon doesn't break to new line */
  }

  .notification-icon {
    position: relative;
    display: inline-block;
    cursor: pointer;
    margin-left: 10px;
    /* Adjust margin as needed to separate from user icon */
  }

  .notification-icon:hover i{
    color: #ff6e01;
  }
  .notification-icon i {
    font-size: 24px;
    /* Adjust size as needed */
    color: #000;
    /* Adjust color as needed */
  }

  .notification-count {
  position: absolute;
  top: -12px; /* Adjust position to center vertically */
  right: -12px; /* Adjust position to center horizontally */
  min-width: 24px; /* Adjust width to accommodate larger numbers */
  height: 24px; /* Adjust height for better visibility */
  padding: 6px 10px; /* Increase padding for better spacing */
  border-radius: 50%;
  color: red !important; /* Ensure font color is red */
  font-size: 18px; /* Further increase font size */
  font-weight: bold;
  text-align: center;
  background-color: transparent !important; /* Set background color to transparent */
  border: none !important; /* Remove any border */
  outline: none !important; /* Remove outline */
  box-shadow: none !important; /* Remove box shadow */
}

/* Adjustments to align wishlist icon with other buttons */
.icons {
  display: flex;
  align-items: center; /* Align items vertically */
}

/* Style for the logout button */
#logoutBtnNav {
  margin-left: auto; /* Push the logout button to the right */
}

/* Style for the envelope icon */
.notification-icon {
  margin-right: 10px; /* Adjust margin as needed to separate from wishlist icon */
}

.wishlist-icon:hover i {
  color: #ff6e01; /* Change the color to red (or any other color you prefer) on hover */
}
/* Style for the wishlist icon */
.wishlist-icon {
  margin-right: 10px; /* Adjust margin as needed to separate from other icons */
  color: blueviolet;
}

.wishlist-icon a {
  display: inline-block;
}

.wishlist-icon i {
  font-size: 24px; /* Adjust size as needed */
  color: blue; /* Change the color to blue (or any other color you prefer) */
}


</style>

