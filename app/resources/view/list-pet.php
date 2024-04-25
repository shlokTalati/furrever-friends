<style>
    body {
        position: relative;
        /* Required for footer positioning */
        margin: 0;
        padding: 0;
        background-image: url('/petmarket/app/resources/img/bg67.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    header {
        background-color: #ff6e01;
        color: #ffffff;
        padding: 20px 0;
        text-align: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.8);
        /* Adjust the last value (0.8) for transparency */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
        color: #ff6e01;
        margin-bottom: 10px;
        display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        color: #555;
        /* Added */
    }

    select {
        background-image: url('data:image/svg+xml;utf8,<svg fill="#ff6e01" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px top 50%;
        background-size: 24px;
        padding-right: 40px;
    }

    textarea {
        resize: vertical;
    }

    input[type="submit"] {
        background-color: #ff6e01;
        color: white;
        padding: 14px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #e66000;
    }

    .radio-label {
        margin-right: 20px;
    }

    /* Media Query for responsiveness */
    @media (max-width: 768px) {
        form {
            padding: 20px 10px;
        }
    }

    /* Hide number input arrows */
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
        appearance: textfield;
    }

    header,
    h1 {
        color: #000;
    }
</style>


<form action="/petmarket/listpet" enctype="multipart/form-data" method="post">
    <h1 style="text-align:center;">Pet Listing Form</h1>
    <br><br>

    <label for="user_email">User Email:</label>
    <input type="email" id="user_email" name="user_email" value="<?php echo $_SESSION['user']['email']; ?>" readonly>

    <label for="species_select">Species:</label>
    <select id="species_select" name="list_species_id" required onchange="update_breeds()">
        <!-- Options will be added dynamically through JavaScript -->
    </select>

    <label for="breed_select">Breed:</label>
    <select id="breed_select" name="list_breed_id" required>
        <!-- Options will be added dynamically through JavaScript -->
    </select>

    <label for="list_name">Name:</label>
    <input type="text" id="list_name" name="list_name" required>

    <label for="list_gender">Gender:</label>
    <select id="list_gender" name="list_gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <label for="list_age">Age:</label>
    <input type="number" id="list_age" name="list_age" required style="-moz-appearance: textfield; -webkit-appearance: none; appearance: none;">


    <label for="list_nature">Nature:</label>
    <select id="list_nature" name="list_nature" required>
        <option value="Aggressive">Aggressive</option>
        <option value="Calm">Calm</option>
        <option value="Playful">Playful</option>
    </select>

    <label for="list_food_preference">Food Preference:</label>
    <select id="list_food_preference" name="list_food_preference" required>
        <option value="Vegetarian">Vegetarian</option>
        <option value="Non-Vegetarian">Non-Vegetarian</option>
    </select>

    <p>Vaccination Status:</p>
    <label class="radio-label"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Done" required> Done</label>
    <label class="radio-label"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Not Done" required checked> Not Done</label>
    <label class="radio-label"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Partially Done" required> Partially Done</label>

    <label for="list_extra_info">Extra Info:</label>
    <textarea id="list_extra_info" name="list_extra_info" required></textarea>

    <label for="pet_photoFile">Upload Photo</label>
    <input type="file" name="pet_photo">

    <br>
    <br>
    <br>

    <input type="submit" value="Submit" name="listpet">
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