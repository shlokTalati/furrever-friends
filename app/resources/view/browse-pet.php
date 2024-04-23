
    <style>
        .pet-container {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            height: 300px; /* Set a fixed height for the container */
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

    <div style="display: flex;">

        <!-- Left Navigation Bar -->
        <div style="width: 200px; height: 100vh; background-color: #ddd; padding: 20px;">
            <h1>Filter</h1>
            <!-- Species Dropdown -->
            <div style="margin-bottom: 15px;">
                <label for="species_select" style="font-weight: bold;">Species:</label>
                <select id="species_select" style="padding: 5px; border-radius: 5px;" onchange="update_breeds(); update_pets('species_id', species_select.value);">
                    <!-- Add Species options here -->
                    <option value="all">All</option>
                    <option value="1">Dog</option>
                    <option value="2">Cat</option>
                    <option value="3">Bird</option>
                    <!-- Add more species options as needed -->
                </select>
            </div>

            <!-- Breed Dropdown -->
            <div style="margin-bottom: 15px;">
                <label for="breed_select" style="font-weight: bold;">Breed:</label>
                <select id="breed_select" style="padding: 5px; border-radius: 5px;" onchange="update_pets('breed_id', breed_select.value)">
                    <!-- Add Breed options here -->
                    <option value="all">All</option>
                    <!-- Populate breed options dynamically using JavaScript -->
                </select>
            </div>
            <!-- Add more filter options as needed -->
        </div>

        <!-- Main Content Container on the Right -->
        <div style="flex-grow: 1; padding: 20px;">
            <h1>Browse Pets</h1>
            <br>
            <div style="display: flex; flex-wrap: wrap; gap: 20px;" id="petDisplayContainer">
                <!-- Display basic pet details including image -->
                <!-- Replace with PHP loop to iterate through each pet -->
                <?php foreach ($petData as $pet) : ?>
                    <div class="pet-container">
                        <!-- Display pet image -->
                        <img src="<?php echo $pet['photo_path']; ?>" alt="<?php echo $pet['name']; ?>" class="pet-image">
                        <h2 class="pet-name"><?php echo $pet['name']; ?></h2>
                        <p class="pet-details"><strong>Gender:</strong> <?php echo ucfirst($pet['gender']); ?></p>
                        <p class="pet-details"><a href="petdetails?id=<?php echo $pet['id']; ?>">View Full Details</a></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <br><br>
        </div>
    </div>

    <!-- JavaScript code for dynamic updates -->
    <script>
        var petData = <?php echo json_encode($petData); ?>;
        var species_data = <?php echo json_encode($species_data); ?>;
        var breed_data = <?php echo json_encode($breed_data); ?>;
        var species_select = document.getElementById('species_select');
        var breed_select = document.getElementById('breed_select');
        var petDisplayContainer = document.getElementById('petDisplayContainer');

        // Update the Pets Display
        function update_pets(property, value) {
            petDisplayContainer.innerHTML = '';

            petData.forEach(element => {
                if (element[property] == value || value === 'all') {
                    petDisplayContainer.innerHTML += `<div class="pet-container">
                        <img src="${element.photo_path}" alt="${element.name}" class="pet-image">
                        <h2 class="pet-name">${element.name}</h2>
                        <p class="pet-details"><strong>Gender:</strong> ${element.gender}</p>
                        <p class="pet-details"><a href="petdetails?id=${element.id}">View Full Details</a></p>
                    </div>`;
                }
            });
        }

        // Add Species options to the Species Dropdown dynamically
        function update_species() {
            species_select.innerHTML = '<option value="all">All</option>';

            species_data.forEach(element => {
                species_select.innerHTML += `<option value="${element.id}">${element.name}</option>`;
            });

            update_breeds();
        }

        // Add Breed options to the Breed Dropdown dynamically
        function update_breeds() {
            breed_select.innerHTML = '<option value="all">All</option>';

            breed_data.forEach(element => {
                if (element.species_id == species_select.value || species_select.value === 'all') {
                    breed_select.innerHTML += `<option value="${element.id}">${element.name}</option>`;
                }
            });
        }

        // On Page Load: Call Functions
        update_species();
        update_pets('species_id', 'all');
    </script>

