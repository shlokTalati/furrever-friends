
<style>

  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
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

<div class="container">
  <h1>Your Pet Adoption Wishlist</h1>

<?php


  if($wishlistData == 0){
  echo "<p class='empty-wishlist' style='display: none;'>Your wishlist is currently empty. Start adding pets!</p>";
  }
  else{
    foreach ($wishlistData as $data):
      if($data['availability'] != 0){
?>

  <a href="petdetails?id=<?php echo $data['id']; ?>">
  
  <div class="wishlist-item">
    <img src="<?php echo $data['photo_path'] ?>" alt="Pet Image">
    <div class="name"><?php echo $data['name'] ?></div>
    <div class="description">Age: <?php echo $data['age'] ?></div>
    <div class="description"><?php echo $data['gender'] ?></div>
  </div>
  </a>

<?php } endforeach; }?>




</div>
