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
  </div>
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
