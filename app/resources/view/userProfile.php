<!-- <?php echo var_dump($_SESSION['user']); ?> -->


<div class="deco">
    <div>
      <div>
        <form class="form-deco" id="userform">
          <div>
            <label for="name"><h3> Name </h3></label>
            <input type="text" id="name" placeholder="Enter your name" value="<?php echo $_SESSION['user']['name'] ?>" required>
          </div>
          <div>
            <label for="email"><h3> Email </h3></label>
            <input type="email" id="email" placeholder="Enter your email" value="<?php echo $_SESSION['user']['email'] ?>" readonly>
          </div>
          <div>
            <label for="password"><h3> Password </h3></label>
            <input type="password" id="password" placeholder="Enter your password" required>
          </div>
          <div>
            <label for="phone"><h3> Phone </h3></label>
            <input type="number" id="phone" placeholder="Enter your phone number" min="10" max="10" value="<?php echo $_SESSION['user']['phone'] ?>" required>
          </div>
          <div>
            <label for="dob"><h3> Date of Birth </h3></label>
            <input type="date" id="dob" value="<?php echo $_SESSION['user']['dob'] ?>" required>
          </div>
          <div>
            <label for="city"><h3> City </h3></label>
            <input type="text" id="city" placeholder="Enter your city" value="<?php echo $_SESSION['user']['city'] ?>" required>
          </div>
          <br>
          <button type="submit"> Submit </button>
        </form>
      </div>
    </div>
  </div>