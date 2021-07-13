<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width">
  <title>View Cart</title>
  <link rel="stylesheet" href="css/viewcart.css">
 
  <script src="js/viewcart.js"></script>
  

</head>
<body>
<div class="container">
  <div class="heading">
    <h1>
      <span class="shopper"></span> Shopping Cart
    </h1>

    <a href="home.php" class="visibility-cart transition is-open">X</a>    
  </div>
  
  <div class="cart transition is-open">
    
    <div class="table">
      
      <div class="layout-inline row th">
        <div class="col col-pro">Product</div>
        <div class="col col-price align-center "> 
          Price
        </div>
        <div class="col col-qty align-center">QTY</div>
        <div class="col">Total</div>
      </div>
      
      <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
          <img src="img/Products Categories/p1.JPG" alt="kitten" />
          <p>Cacti</p>
        </div>
        
        <div class="col col-price col-numeric align-center ">
          <p>$4</p>
        </div>

        <div class="col col-qty layout-inline">
          <a href="#" class="qty qty-minus">-</a>
            <input type="numeric" value="2" />
          <a href="#" class="qty qty-plus">+</a>
        </div>

         <div class="col col-total col-numeric">  
           <p>$8</p>
         </div>         
      </div>
     
      
      
      <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
          <img src="img/Products Categories/p2.JPG" alt="kitten" />
          <p>Climbers</p>
        </div>
        
        <div class="col col-price col-numeric align-center ">
          <p>$2</p>
        </div>

        <div class="col col-qty layout-inline">
          <a href="#" class="qty qty-minus">-</a>
            <input type="numeric" value="3" />
          <a href="#" class="qty qty-plus">+</a>
        </div>

         <div class="col col-total col-numeric">  
           <p>$6</p>
         </div>         
      </div>
        
      
       <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
          <img src="img/Products Categories/p3.JPG" alt="kitten" />
          <p>Ferns</p>
        </div>
        
        <div class="col col-price col-numeric align-center ">
          <p>$5</p>
        </div>

        <div class="col col-qty layout-inline">
          <a href="#" class="qty qty-minus">-</a>
            <input type="numeric" value="1" />
          <a href="#" class="qty qty-plus">+</a>
        </div>

         <div class="col col-total col-numeric">  
           <p>$15</p>
         </div>         
      </div>
  
       <div class="tf">
         <div class="row layout-inline">
           <div class="col"></div>
         </div>
         <div class="row layout-inline">
           <div class="col">
             <p>Shipping: <span>3</span></p>
             <p>Total: <span>29</span></p>
           </div>

         </div>
       </div>         
              </div>
                <li class="nav-item ">
                            <a class="btn btn-update" href="buynow.php">Buy Now</a>
                        </li>
</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>