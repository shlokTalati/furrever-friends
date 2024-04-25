<style>
        .pet-container {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: max-content; /* Set a fixed height for the container */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pet-image {
            width: 100%; /* Take up the full width of the container */
            height: 200px; /* Set a fixed height for the image */
            object-fit: cover; /* Maintain aspect ratio and cover the entire container */
            border-radius: 8px 8px 0 0;
        }

        .pet-name,
        .pet-details {
            text-align: center; /* Center-align the names, gender, and link */
            color: #333;
            font-size: 18px; /* Increase font size */
        }

        .pet-details a {
            text-decoration: none;
            color: #007bff; /* Link color */
            font-weight: bold;
        }
    </style>

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


  <div style="flex-grow: 1; padding: 100px;">
            <h1 style="text-align: center;">Your Listed Pets </h1>
            <br>
            <div style="display: flex; flex-wrap: wrap; gap: 20px;" id="petDisplayContainer">
                <!-- Display basic pet details including image -->
                <!-- Replace with PHP loop to iterate through each pet -->

                
                <?php
                if ($petData != null) {
                  foreach ($petData as $pet): ?>
                    <div class="pet-container" style="background-color:  <?php if ($pet['availability'] == 1) {
                      echo "cyan";
                    } else {
                      echo "pink";
                    } ?>">
                        <!-- Display pet image -->
                        <img src="<?php echo $pet['photo_path']; ?>" class="pet-image">
                        <h2 class="pet-name"><?php echo $pet['name']; ?></h2>
                        <p class="pet-details"><strong>Gender:</strong> <?php echo ucfirst($pet['gender']); ?></p>
                        <p class="pet-details"><strong>Age:</strong> <?php echo ($pet['age']); ?></p>
                        <p class="pet-details"><strong>Nature:</strong> <?php echo ucfirst($pet['nature']); ?></p>
                        <p class="pet-details"><strong>Food Preferance:</strong> <?php echo ucfirst($pet['food_preference']); ?></p>
                        <p class="pet-details"><a href="/petmarket/processing?deletepetid=<?php echo $pet['id'] ?>">Delete</a></p>
                        
                    </div>
                <?php endforeach;
                } ?>
            </div>
            <br><br>
        </div>