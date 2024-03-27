<div style="display: flex;">

    <!-- Left Navigation Bar -->
    <div style="width: 200px; height: 100vh; background-color: #ddd; padding: 20px;">
        <h1>Filter</h1>
        <br>
        <!-- Species Dropdown -->
        <div style="margin-bottom: 15px;">
            <label for="species_select" style="font-weight: bold;">Species:</label>
            <select id="species_select" style="padding: 5px; border-radius: 5px;" onchange="update_breeds(); update_pets('species_id', species_select);">
                <!-- Add Species options here -->
            </select>
        </div>

        <!-- Breed Dropdown -->
        <div style="margin-bottom: 15px;">
            <label for="breed_select" style="font-weight: bold;">Breed:</label>
            <select id="breed_select" style="padding: 5px; border-radius: 5px;" onchange="update_pets('breed_id', breed_select)">
                <!-- Add Breed options here -->
            </select>
        </div>

        <!-- Gender Radio Buttons -->
        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold;">Gender:</label>
            <br>
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
        <div style="display: flex; flex-wrap: wrap; gap: 20px;" id="petDisplayContainer">

        </div>
        <br><br>
    </div>

</div>

<script>
    var petData = <?php echo json_encode($petData); ?>;
    var species_data = <?php echo json_encode($species_data); ?>;
    var breed_data = <?php echo json_encode($breed_data); ?>;
    var species_select = document.getElementById('species_select');
    var breed_select = document.getElementById('breed_select');
    var petDisplayContainer = document.getElementById('petDisplayContainer');
    
    //Creates an Associative Array of Species that include id and name
    var species_assoc = {};  
    species_data.forEach((obj)=> {
    species_assoc[obj.id] = obj.name;
});

    //Creates an Associative Array of Breed that include id and name
    var breed_assoc = {};  
    breed_data.forEach((obj)=> {
    breed_assoc[obj.id] = obj.name;
});

    // Update the Pets Display
    function update_pets(property = null, filterId = null) {

        console.log("Update Pets Called");
        petDisplayContainer.innerHTML = '';


        petData.forEach(element => {
            console.log(element[null]);
            if (element[property] == (filterId ? filterId.value : null)) {
            
                petDisplayContainer.innerHTML += `<div style="display: flex; flex-wrap: wrap; gap: 20px;" id= "petDisplayContainer">
                <div style="background-color: #f0f0f0; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 300px;">
                
                <h2 style="margin-top: 0; color: #333;">${element.name}</h2>
                <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>User Email:</strong>${element.user_email}</p>
                <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Species:</strong> ${species_assoc[element.species_id]}</p>
                <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Breed:</strong> ${breed_assoc[element.breed_id]}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Gender:</strong> ${element.gender}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Age:</strong> ${element.age}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Nature:</strong> ${element.nature}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Food Preference:</strong> ${element.food_preference}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Vaccination Status:</strong> ${element.vaccination_status}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Extra Info:</strong> ${element.extra_info}</p>
            <p style="margin: 5px 0; font-size: 14px; color: #666;"><strong>Availability:</strong> ${element.availability}</p>
            <!-- Add a link for adopting -->
            <br>
            <a href="#" style="display: inline-block; text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 
            20px; border-radius: 5px; transition: background-color 0.3s;">Adopt Me</a>
            
            </div>
            </div>`
            }
        });

    }

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


    //On Page Load:-
    //Call Functions:-
    update_species();
    update_breeds();
    update_pets();
</script>