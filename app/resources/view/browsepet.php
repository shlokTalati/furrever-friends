<div style="display: flex;">

    <!-- Left Navigation Bar -->
    <div style="width: 200px; height: 100vh; background-color: #ddd; padding: 20px;">
        <h1>Filter</h1>
<br>
    <!-- Species Dropdown -->
    <div style="margin-bottom: 15px;">
        <label for="species_select" style="font-weight: bold;">Species:</label>
        <select id="species_select" style="padding: 5px; border-radius: 5px;" onchange="update_breed_select()">
            <!-- Add Species options here -->
        </select>
    </div>
    
    <!-- Breed Dropdown -->
    <div style="margin-bottom: 15px;">
        <label for="breed_select" style="font-weight: bold;">Breed:</label>
        <select id="breed_select" style="padding: 5px; border-radius: 5px;">
            <!-- Add Breed options here -->
        </select>
    </div>
    
    <!-- Gender Radio Buttons -->
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold;">Gender:</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="both" name="gender" value="both" checked>
        <label for="both">Both</label>
    </div>
    
    <!-- Age Slider -->
<div style="margin-bottom: 15px;">
    <label for="age" style="font-weight: bold;">Age:</label>
    <input type="range" id="age" name="age" min="0" max="20" style="width: 100%;">
    <label id="ageValue">0</label>
</div>
    
    <!-- Nature Options -->
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold;">Nature:</label>
        <input type="radio" id="aggressive" name="nature" value="aggressive">
        <label for="aggressive">Aggressive</label>
        <input type="radio" id="calm" name="nature" value="calm">
        <label for="calm">Calm</label>
    </div>
    
    <!-- Food Preference -->
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold;">Food Preference:</label>
        <input type="radio" id="vegetarian" name="foodPreference" value="vegetarian">
        <label for="vegetarian">Vegetarian</label>
        <input type="radio" id="nonVegetarian" name="foodPreference" value="nonVegetarian">
        <label for="nonVegetarian">Non-Vegetarian</label>
    </div>
    
    <!-- Vaccination Status -->
    <div style="margin-bottom: 15px;">
        <label style="font-weight: bold;">Vaccination Status:</label>
        <input type="radio" id="done" name="vaccinationStatus" value="done">
        <label for="done">Done</label>
        <input type="radio" id="notDone" name="vaccinationStatus" value="notDone">
        <label for="notDone">Not Done</label>
        <input type="radio" id="partiallyDone" name="vaccinationStatus" value="partiallyDone">
        <label for="partiallyDone">Partially Done</label>
    </div>
</div>

    <!-- Main Content Container on the Right -->
    <div style="flex-grow: 1; padding: 20px;">
        <h1>Browse Pet</h1>
        <br>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php foreach ($petData as $pet): ?>
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
        </div>
    <?php endforeach; ?>
        </div>
        <br><br>
    </div>

</div>

<script> 
    var petData = <?php echo json_encode($petData); ?>;
    var speciesData = <?php echo json_encode($speciesData); ?>;
    var breedData = <?php echo json_encode($breedData); ?>;
    console.log(petData);
    var speciesSelect = document.getElementById('species_select');
    var breedSelect = document.getElementById('breed_select');

    // Add Species options to the Species Dropdown dynamically
    speciesData.forEach(element => {
        speciesSelect.appendChild(new Option(element.name , element.id));        
    });
    
    function update_breed_select(){
        breedSelect.innerHTML = '';
        breedData.forEach(element => {
            if(element.species_id == speciesSelect.value){
                breedSelect.appendChild(new Option(element.name , element.id));      
            }
        });
    }

    // Add Breed options to the Species Dropdown dynamically
    
    //On Page Load:-
    update_breed_select();

</script>