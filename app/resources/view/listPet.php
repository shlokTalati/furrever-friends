<!-- <?php echo var_dump($_SESSION['user']); ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Listing Form</title>
</head>

<body>
    <h2>Pet Listing Form</h2>
    <form action="/petmarket/listpet" method="post">
        <label for="user_email">User Email:</label>
        <input type="email" id="user_email" name="user_email" value=<?php echo $_SESSION['user']['email']; ?> readonly><br>

        <label for="species_id">Species ID:</label>
        <input type="text" id="species_id" name="species_id" required><br>

        <label for="breed_id">Breed ID:</label>
        <input type="text" id="breed_id" name="breed_id" required><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="nature">Nature:</label>
        <input type="text" id="nature" name="nature" required><br>

        <label for="food_preference">Food Preference:</label>
        <input type="text" id="food_preference" name="food_preference" required><br>

        <p>Vaccination Status:</p>
        <label><input type="radio" class="vaccination_status" name="vaccination_status" value="Done" required> Done</label><br>
        <label><input type="radio" class="vaccination_status" name="vaccination_status" value="Not Done" required> Not Done</label><br>
        <label><input type="radio" class="vaccination_status" name="vaccination_status" value="Partially Done" required> Partially Done</label><br>



        <label for="extra_info">Extra Info:</label>
        <textarea id="extra_info" name="extra_info" required></textarea><br>

        <label for="availability">Availability:</label>
        <select id="availability" name="availability" required>
            <option value=1>Available</option>
            <option value=0>Unavailable</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>