<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout</title>
	<?php include "parts/meta.php"; ?>
</head>
<body>

<?php include "parts/navbar.php"; ?>

	

                
<div class="container">
	<div class="card soft">
                   <h1 class="font">Delivery Information</h1>

		 <div class="form-fill">
        <input type="text" placeholder="First name" />
        <input type="text" placeholder="Last name" />
  
    <input type="text" placeholder="Address Line 1" />
    <input type="text" placeholder="Address Line 2 (Optional)" />
    
        <input type="text" placeholder="City" />
        <select>
            <option>State</option>
            <option>Alamaba</option>
            <option>Alaska</option>
            <option>Arizona</option>
            <option>Arkansas</option>
            <option>California</option>
            <option>Colorado</option>
            <option>Connecticut</option>
            <option>Delware</option>
            <option>Florida</option>
            <option>Georgia</option>
            <option>Hawaii</option>
            <option>Idaho</option>
            <option>Illinois</option> 
            <option>Indiana</option>
            <option>Iowa</option>
            <option>Kansas</option>
            <option>Kentucky</option>
        </select>
        <input type="text" placeholder="ZIP code" /><br />
        <input type="email" placeholder="Email" /><br />
         

         <label class="checkbox"><input type="checkbox" checked="checked">I want to receive news and updates
 
 </label>

    </div>
    </div>
 </div>

    </form>

    <div class="container">
	<div class="card soft">
                   <h1 class="font">Payment Information</h1>

		 <div class="form-fill">
        <input type="text" placeholder="First name" />
        <input type="text" placeholder="Last name" />
  
    <input type="text" placeholder="Card Number" />
    <input type="text" placeholder="Expiration (MM-YY)" />
    <input type="text" placeholder="CVV" />
    <input type="text" placeholder="ZIP code" /><br />
    
       
         

    <button type="button" class="save-btn"><a href="product_confirmation.php">Complete Checkout</a></button>
    </div>
    </div>
 </div>

    </form>

	</div>
</div>
	
</body>
</html>