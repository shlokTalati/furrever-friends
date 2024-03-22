<br>
<h1>Browse Pet</h1>
<br>
<div style="display: flex; flex-wrap: wrap; gap: 20px;">
    <?php foreach ($petData as $pet) : ?>
        <div style="background-color: #f0f0f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px;">
            <h2 style="margin-top: 0; color: #333;"><?php echo $pet["name"]; ?></h2>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>User Email:</strong> <?php echo $pet["user_email"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Species ID:</strong> <?php echo $pet["species_id"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Breed ID:</strong> <?php echo $pet["breed_id"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Gender:</strong> <?php echo $pet["gender"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Age:</strong> <?php echo $pet["age"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Nature:</strong> <?php echo $pet["nature"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Food Preference:</strong> <?php echo $pet["food_preference"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Vaccination Status:</strong> <?php echo $pet["vaccination_status"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Extra Info:</strong> <?php echo $pet["extra_info"]; ?></p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Availability:</strong> <?php echo $pet["availability"]; ?></p>
            <!-- Add a link for adopting -->
            <br>
            <a href="#" style="display: inline-block; text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s;">Adopt Me</a>
        </div>
    <?php endforeach; ?>
</div>
<br><br>
