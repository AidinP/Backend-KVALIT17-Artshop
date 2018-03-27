<?php

require_once('connect.php');

$pro_name = $_POST['pro_name'];
$img = $_POST['pro_img'];
$price = $_POST['price'];
$article = $_POST['article'];
echo "<h2>You have chosen " . $pro_name ." that costs: " . $price .  " SEK </h2>"; 
echo "<img src='images/$img' alt=''>";

if(empty($img)){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"  href="css.css">
</head>
<body class="container">

    <h2>Fill your details</h2>

    <form method="post" action="mail.php">
        
        <p class="name">
            <label for="name">Namn</label><br>
            <input type="text" name="customer_name" id="customer_name" placeholder="Type your name" required />            
        </p>

        <p class="adress">
            <label for="web">Adress </label><br>
            <input type="text" name="adress" id="adress" placeholder="Type your adress" required/>            
        </p>

        <p class="phone">
            <label for="web">phonenumber </label><br>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Type your phone number" required/>            
        </p>   
                   
        <p class="email">
            <label for="email">Email </label><br>
            <input type="text" name="email" id="email" placeholder="Type your email" required/>            
        </p>

        <p class="text">
        <label for="text">Other </label><br>
            <textarea name="texten" id="texten" placeholder="Anything else?"  rows="9" cols="30"required /></textarea>
        </p>

        <input type="hidden" name="article" id="article" value="<?php echo $article ?>">
		<input type="hidden" name="pro_name" id="pro_name" value="<?php echo $pro_name ?>">
		<input type="hidden" name="price" id="price" value="<?php echo $price ?>">   

		 <p class="submit">
            <input type="submit" value="Send"  />
            
        </p>
    </form>
    
    
</body>
</html>
<?php include 'footer.php' ?>