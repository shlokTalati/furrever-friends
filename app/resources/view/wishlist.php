<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Pet Adoption Wishlist</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    text-align: center;
    color: #333;
    size: 50sp;
  }
  .wishlist-item {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f5f5f5;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .wishlist-item img {
    max-width: 100%;
    height: 150px; /* Set a fixed height for all images */
    display: block;
    margin: 0 auto;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  .wishlist-item .name {
    font-weight: bold;
    margin-top: 10px;
    color: #333;
    text-align: center;
  }
  .wishlist-item .description {
    color: #666;
    text-align: center;
  }
  .empty-wishlist {
    text-align: center;
    margin-top: 20px;
    color: #666;
  }
</style>
</head>
<body>

<div class="container">
  <h1>Your Pet Adoption Wishlist</h1>

  <div class="wishlist-item">
    <img src="app/images/661e3a095468e.jpg" alt="Pet Image">
    <div class="name">Fluffy</div>
    <div class="description">Fluffy is a loving cat who enjoys cuddles and chasing laser pointers.</div>
  </div>

  <div class="wishlist-item">
    <img src="app/images/661e3510aa83c.jpg" alt="Pet Image">
    <div class="name">Buddy</div>
    <div class="description">Buddy is a playful dog who loves long walks in the park and belly rubs.</div>
  </div>

  <div class="wishlist-item">
    <img src="app/images/661e398e33684.jpg" alt="Pet Image">
    <div class="name">Sasha</div>
    <div class="description">Sasha is a friendly rabbit who enjoys hopping around and munching on fresh veggies.</div>
  </div>

  <p class="empty-wishlist" style="display: none;">Your wishlist is currently empty. Start adding pets!</p>
</div>

</body>
</html>
