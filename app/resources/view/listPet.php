<br>
<h1>Pet Listing Form</h1>

    <form action="/petmarket/listpet" method="post" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f5f5f5; font-family: 'Helvetica Neue', Arial, sans-serif; color: #333;">

        <label for="user_email" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">User Email:</label>
        <input type="email" id="user_email" name="user_email" value="<?php echo $_SESSION['user']['email']; ?>" readonly style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">

        <label for="species_select" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Species:</label>
        <select id="species_select" name="list_species_id" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;" onchange="update_breeds()">
           
        </select>

        <label for="breed_select" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Breed:</label>
        <select id="breed_select" name="list_breed_id" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">


        </select>

        <label for="list_name" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Name:</label>
        <input type="text" id="list_name" name="list_name" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">

        <label for="list_gender" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Gender:</label>
        <select id="list_gender" name="list_gender" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="list_age" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Age:</label>
        <input type="number" id="list_age" name="list_age" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">

        <label for="list_nature" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Nature:</label>
        <select id="list_nature" name="list_nature" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">
            <option value="Aggressive">Aggressive</option>
            <option value="Calm">Calm</option>
            <option value="Playful">Playful</option>
        </select>


        <label for="list_food_preference" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Food Preference:</label>
        <select id="list_food_preference" name="list_food_preference" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;">
            <option value="Vegetarian">Vegetarian</option>
            <option value="Non-Vegetarian">Non-Vegetarian</option>
        </select>

        <p style="font-weight: bold; color: #ff6e01; margin-bottom: 10px;">Vaccination Status:</p>
        <label style="margin-right: 20px;"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Done" required> Done</label>
        <label style="margin-right: 20px;"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Not Done" required checked> Not Done</label>
        <label><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Partially Done" required> Partially Done</label><br> <br>

        <label for="list_extra_info" style="font-weight: bold; color: #ff6e01; margin-bottom: 10px; display: block;">Extra Info:</label>
        <textarea id="list_extra_info" name="list_extra_info" required style="width: 100%; padding: 12px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px;"></textarea>

        <input type="submit" value="Submit" style="background-color: #ff6e01; color: white; padding: 14px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
    </form>

    <br><br>

    <script>

    var species_data = <?php echo json_encode($species_data); ?>;
    var breed_data = <?php echo json_encode($breed_data); ?>;

    // Add Species options to the Species Dropdown dynamically
    function update_species() {
        
        species_data.forEach(element => {
            species_select.appendChild(new Option(element.name, element.id));
        });

    }

    // Add Breed options to the Breed Dropdown dynamically
    function update_breeds() {
        breed_select.innerHTML = '';

        breed_data.forEach(element => {
            if (element.species_id == species_select.value) {
                breed_select.appendChild(new Option(element.name, element.id));
            }
        });
    }

    update_species();
    update_breeds();
    </script>