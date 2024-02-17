<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/notes.io/">
      <h4>FurEver Friends</h4>
    </a>

    <div class="d-flex">
      <button class="btn btn-outline-light mx-2 active d-none" onclick="toggleLogin()" id="loginBtnNav">Login</button>
      <button class="btn btn-outline-light mx-2 d-none" onclick="toggleSignup()" id="signupBtnNav">Sign Up</button>

      <a class="btn btn-outline-secondary mx-2 d-none" href="/notes.io/user/edit" id="userBtnNav">
          <i class="fa-regular fa-user" style="color: #ffffff;"></i>
      </a>
      <a class="btn btn-outline-danger mx-2 d-none" href="/notes.io/logout" id="logoutBtnNav">Logout</a>
      
      </div>
  </div>
</nav>