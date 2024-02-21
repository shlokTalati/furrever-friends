<?php echo var_dump($_SESSION['user']); ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" value="<?php echo $_SESSION['user']['name'] ?>" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" value="<?php echo $_SESSION['user']['email'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="number" class="form-control" id="phone" placeholder="Enter your phone number" min="10" max="10" value="<?php echo $_SESSION['user']['phone'] ?>" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" id="dob" value="<?php echo $_SESSION['user']['dob'] ?>" required>
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" placeholder="Enter your city" value="<?php echo $_SESSION['user']['city'] ?>" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>