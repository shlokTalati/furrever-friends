<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Preference Questionnaire</title>
</head>
<body>
    <h1>Pet Preference Questionnaire</h1>
    <form action="/petmarket/typeresult" method="post">
        <p>1. What size of pet are you interested in?</p>
        <input type="radio" name="size" value="small"> Small<br>
        <input type="radio" name="size" value="medium"> Medium<br>
        <input type="radio" name="size" value="large"> Large<br>

        <p>2. Do you prefer pets that require a lot of attention and interaction?</p>
        <input type="radio" name="attention" value="yes"> Yes<br>
        <input type="radio" name="attention" value="no"> No<br>

        <p>3. How much space do you have for a pet?</p>
        <select name="space">
            <option value="small">Small (Apartment/Condo)</option>
            <option value="medium">Medium (House with yard)</option>
            <option value="large">Large (Farm/Large Property)</option>
        </select>

        <p>4. What is your activity level?</p>
        <input type="radio" name="activity" value="low"> Low<br>
        <input type="radio" name="activity" value="medium"> Medium<br>
        <input type="radio" name="activity" value="high"> High<br>

        <p>5. Do you have any specific preferences or restrictions?</p>
        <textarea name="preferences" rows="4" cols="50"></textarea><br>

        <p>6. Are you allergic to any specific animals?</p>
        <input type="radio" name="allergy" value="yes"> Yes<br>
        <input type="radio" name="allergy" value="no"> No<br>

        <p>7. How much time can you dedicate to pet care daily?</p>
        <input type="radio" name="time" value="low"> 1-2 hours<br>
        <input type="radio" name="time" value="medium"> 2-4 hours<br>
        <input type="radio" name="time" value="high"> More than 4 hours<br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
