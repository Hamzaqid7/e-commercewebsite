<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid product");
}
$productId = (int)($_GET['id'] ?? 0);
if ($productId <= 0) {
    die("Invalid product");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>${product_name} | Tech Care</title>
    <link rel="icon" type="image/x-icon" href="Images/favicon.ico">
    <link rel="canonical" href="https://techcare.com/productpage">
    <meta name="description" content="Buy refurbished imported laptops at best prices in Karachi and we also sells mobile phones, computers, laptops accessories at 'Tech Care'. An E-commerce website solely and proudly created by 'Hamza Aijaz Qidwai'.">
    <link rel="stylesheet" href="style.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="script.js" defer></script>
    <style>
        /* CSS Styling for the Product Page */
        :root {
            --primary-color: #000; /* Black for buttons, text, and main elements */
            --secondary-color: #f4f4f4; /* Light background for sections */
            --sale-color: #e30000; /* Red for discounts */
            --text-color: #333;
            --light-text-color: #666;
            --border-color: #ddd;
            --accent-color: #17181c; /* Dark color found in the original design */
        }
.logo-loader {
  position: fixed;
  display: flex;
  margin: 0;
  padding: 0;
  z-index: 111111;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: #0f143d;
}
.logo-loader h1 {
  font-family: sans-serif;
  color: #ffffff;
  margin-top: 1rem;
  text-align: center;
  word-wrap: break-word;
}
.text {
  font-size: 7rem;
  font-weight: 900;
  letter-spacing: 0.15em;
  color: transparent;

  /* FILLABLE WAVE */
 background:
  radial-gradient(0.9em at 50% 1.2em, #6ec1ff 98%, transparent 102%)
    0 0 / 2.2em 200% repeat-x,
  radial-gradient(0.9em at 50% -0.6em, #ff9c3d 98%, transparent 102%)
    0 1.6em / 2.2em 200% repeat-x;
animation: waveFill 2s infinite linear;
  background-size: 200% 100%;
  -webkit-background-clip: text;
  background-clip: text;
}
.text span {
  margin-left: 0.2em;
}
@keyframes waveFill {
  from {
    background-position:
      100% 100%,   /* bottom-left */
      100% 100%;
  }
  50% {
    background-position:
      50% 0%,    /* top-center */
      50% 0%;
  }
  to {
    background-position:
      0% 100%, /* bottom-right */
      0% 100%;
  }
}
@media (max-width: 1280px) {
    .containercap {
        padding: 3% 20px 3% 20px;
    }
}
@media (min-width: 1281px) {
    .containercap {
        padding: 1.5% 20px 1.5% 20px;
    }
}
        .containercap {
            max-width: 100%;
            margin: 0 auto;
            background: white;
        }
        .product-page {
            position: relative;
            min-height: 100vh;
            width: 100%;
            padding: 0;
        }
        .icons a {
            color: var(--primary-color);
            margin-left: 20px;
            font-size: 18px;
            text-decoration: none;
        }
        /* Main Content Layout */
        .product-main {
            display: flex;
            gap: 20px;
            padding: 20px 0;
        }
        .productstag {
            width: 100%;
            margin: 0;
        }
        .productstag ul {
            width: 60%;
            display: flex;
            justify-content: left;
            padding-left: 2%;
            flex-direction: row;
            gap: 16px;
            list-style: none;
        }
        .productstag ul li {
            font-family: system-ui;
            font-weight: 600;
            letter-spacing: 0px;
        }
        @media (max-width: 1280px) {
          .product-main {
            flex-direction: column;
          }
        }
        .product-gallery, .product-details {
            flex: 1;
        }
        /* Gallery Styling */
        .main-image-container {
            border: 1px solid var(--border-color);
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        #main-product-image {
            width: auto;
            height: auto;
            display: block;
        }
        .thumbnails {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 10px;
            justify-content: center;
            align-items: center;
        }
        .thumbnail-item {
            cursor: pointer;
            border: 1px solid var(--border-color);
            transition: border-color 0.2s;
            overflow: hidden;
        }
        .thumbnail-item:hover, .thumbnail-item.active {
            border-color: var(--primary-color);
        }
        .thumbnail-item img {
            width: 100%;
            height: 100%;
            object-fit: fill;
            display: block;
        }
        /* Details Styling */
        .breadcrumbs {
            font-size: 14px;
            color: var(--light-text-color);
            margin-bottom: 10px;
        }
        .breadcrumbs a {
            color: var(--light-text-color);
            text-decoration: none;
        }
        .product-name {
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 700;
            color: var(--accent-color);
        }
        .price-box {
            margin: 5% 0;
            display: flex;
            align-items: baseline;
            gap: 10px;
        }
        .sale-price {
            font-size: 28px;
            font-weight: bold;
            color: var(--sale-color);
        }
        .regular-price {
            font-size: 18px;
            color: var(--light-text-color);
            text-decoration: line-through;
        }
        .discount-badge {
            background-color: var(--sale-color);
            color: #fff;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
        }
        /* Countdown Timer */
        .sale-timer {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 0;
            margin-bottom: 20px;
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }
        .timer-icon {
            color: var(--sale-color);
            font-size: 18px;
        }
        .timer-numbers {
            display: flex;
            gap: 10px;
            font-weight: bold;
        }
        .timer-segment {
            background-color: var(--accent-color);
            color: white;
            padding: 5px 8px;
            border-radius: 4px;
            min-width: 40px;
            text-align: center;
        }
        .timer-segment span {
            display: block;
            font-size: 10px;
            font-weight: normal;
        } 
        /* Color Selector */
        .selector-label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .color-options {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .color-option {
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid transparent;
            outline: 1px solid var(--border-color);
            transition: border-color 0.2s;
        }
        .color-option.active {
            border-color: var(--primary-color);
        }
        #color-black { background-color: #000; }
        #color-dark-green { background-color: #006400; }
        #color-light-gray { background-color: #cccccc; }

        /* Quantity and CTA */
        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid var(--border-color);
            width: 120px;
            height: 50px;
            margin-bottom: 20px;
        }
        .quantity-button {
            background: none;
            border: none;
            width: 40px;
            height: 100%;
            font-size: 20px;
            cursor: pointer;
            color: var(--primary-color);
            transition: background-color 0.1s;
        }
        .quantity-button:hover {
            background-color: var(--secondary-color);
        }
        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            font-size: 16px;
            font-weight: bold;
            height: 100%;
            -moz-appearance: textfield; /* Hide arrows in Firefox */
        }
        .quantity-input::-webkit-inner-spin-button, 
        .quantity-input::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
        .add-to-cart {
            width: 100%;
            padding: 15px;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: opacity 0.2s;
        }
        .add-to-cart:hover {
            opacity: 0.9;
        }
        /* Description and Specs Section */
        .product-sections {
            padding: 40px 0;
            border-top: 1px solid var(--border-color);
        }
        .section-header {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--accent-color);
            border-bottom: 2px solid var(--primary-color);
            display: inline-block;
            padding-bottom: 5px;
        }
        .specs-list {
            list-style: none;
            padding-left: 0;
        }
        .specs-list li {
            padding: 8px 0;
            border-bottom: 1px dashed var(--border-color);
        }
        .specs-list li:last-child {
            border-bottom: none;
        }
        .description p {
            margin-bottom: 15px;
            color: var(--light-text-color);
        }
        .reviews-summary {
            margin-top: 20px;
            color: #fbbc05; /* Gold for stars */
        }
.content {
    position: relative;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    z-index: 1111;
    visibility: hidden;
}
    </style>
</head>
<body>
  <!-- Loader Element -->
<div class="logo-loader">
  <span class="text">T<span>C</span></span>
  <h1>Tech Care By Hamza N Muzammil</h1>
</div>
<!-- End of Loader Element -->
<!-- For Mouse Cursor Trailing Effect -->
  <div class="cursor-trail"></div>
<div class="content">
<header style="position: relative; margin-bottom: 0;" class="navbar">
    <!-- Theme Mode Toggle Btn -->
        <label style="position: absolute;" class="theme-switch" title="Change body theme">
        <input type="checkbox" id="toggleTheme">
        <span class="slider">
          <span class="icon" id="modeIcon">🌞</span>
        </span>
        </label>
    <img src="Images/tech_care-logodesign.webp" class="logo" loading="lazy" alt="site's logo favicon">
    <h1 class="Hero-heading"><a style="color: #fff;" href="index.html">Tech Care</a></h1>
    <!-- Hamburger Icon -->
    <div class="menu-toggle" id="menuToggle">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>

    <nav class="nav-menu" id="navMenu">
      <!-- User Account Icon -->
      <div class="parallelicons">
        <div style="position: absolute;" class="user-account" id="user-panel">
          <img style="position: absolute; right: 0px; top: 12px;" id="img4user2" src="Images/User-icon.png" title="For accessing user-panel" alt="user-account icon" loading="lazy">
          <img id="img4user" src="Images/User-icon2.png" title="For accessing user-panel" alt="user-account icon" loading="lazy">
        </div>
        <!--Add to cart button-->
        <div style="position: absolute;" id="heroImage" class="cartbtn">
          <img style="position: absolute; top: -16px; right: 7px;" src="Images/bagB.png" id="add2CartBtn2" width="28" height="28" alt="cart icon" class="hideontab" title="Cart containing your added products">
          <p style="position: absolute; top: 8px; right: 0px;" id="p4qty">0</p>
        </div>
      </div>
      <ul id="navLinks" class="nav-links">
      <li><a class="nav-link" href="index.html">Home</a></li>
      <li><a class="nav-link" href="Products.html">Products</a></li>
      <li><a class="nav-link" href="About-Us.html">About</a></li>
      <li><a class="nav-link" href="Contacts.html">Contact</a></li>
      </ul>
    </nav>
</header>
<div class="search-container2">
    <button style="position: absolute;" class="search-icon" id="searchToggle">
      <img src="Images/search.png" width="28px" height="28px" loading="lazy" alt="search icon">
    </button>

    <div style="position: absolute;" class="search-box" id="searchBox">
      <input type="text" id="searchInput" placeholder="Search...">
      <span class="clear-btn" id="clearBtn">×</span>
    </div>
</div>

<div class="sidebar">
    <!-- Hamburger Icon 2 -->
    <div class="cross-icon" id="menuToggle2"></div>
  <div class="profile">
    <div class="avatar">
      <img src="Images/man.png" alt="avatar" loading="lazy" width="auto" height="auto">
    </div>
    <h2>${user_name}</h2>
  </div>

  <div class="section">
    <h3>Profile</h3>
    <ul>
      <li><span class="icon">👤</span>Account</li>
      <li><span class="icon">❤️</span>Pending Orders</li>
      <li><span class="icon">📍</span>Delivered Orders</li>
      <li><span class="icon">📍</span>Wishlist</li>
      <li><span class="icon">🔔</span>Inbox</li>
    </ul>
  </div>

  <div class="section">
    <h3>Support</h3>
    <ul>
      <li><span class="icon">❗</span> Help Center</li>
      <li><span class="icon">🛡️</span> Privacy Policy</li>
      <li><span class="icon">💬</span> Humse raabta karein</li>
    </ul>
  </div>
</div>
    <main class="product-page">
        <div class="containercap">
            <div class="productstag"><ul><li>Home</li><li>|</li><li> Products</li><li>|</li><li>${}</li></ul></div>
            <div class="product-main">
                
                <div class="product-gallery">
                    <div class="main-image-container">
                        <img id="main-product-image" class="product-image" alt="Product image">
                    </div>
                    
                    <div class="thumbnails">
                        <div class="thumbnail-item active" data-color="Black" data-image="https://zerolifestyle.co/cdn/shop/files/JX98-01.webp?v=1723422176&width=913">
                            <img src="https://zerolifestyle.co/cdn/shop/files/JX98-01.webp?v=1723422176&width=913" alt="Black Thumbnail">
                        </div>
                        <div class="thumbnail-item" data-color="Dark Green" data-image="https://zerolifestyle.co/cdn/shop/files/JX98-14.webp?v=1720000352&width=868">
                            <img src="https://zerolifestyle.co/cdn/shop/files/JX98-14.webp?v=1720000352&width=868" alt="Dark Green Thumbnail">
                        </div>
                        <div class="thumbnail-item" data-color="Light Gray" data-image="https://zerolifestyle.co/cdn/shop/files/JX98-15.webp?v=1720000352&width=868">
                            <img src="https://zerolifestyle.co/cdn/shop/files/JX98-15.webp?v=1720000352&width=868" alt="Light Gray Thumbnail">
                        </div>
                    </div>
                </div>

                <div class="product-details">
                    <div class="breadcrumbs">
                        <a href="#">Home</a> / Carbon Earbuds
                    </div>
                    
                    <h1 class="product-name"></h1>
                    
                    <div class="reviews-summary">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        (100+ Reviews)
                    </div>

                    <div class="price-box">
                        <p class="product-price"></p>
                    </div>

                    <div class="sale-timer">
                        <i class="fa-regular fa-clock timer-icon"></i>
                        <span>Offer Ends In:</span>
                        <div class="timer-numbers" id="countdown-timer">
                            <div class="timer-segment"><span id="hours">00</span><span>h</span></div>
                            <div class="timer-segment"><span id="minutes">00</span><span>m</span></div>
                            <div class="timer-segment"><span id="seconds">00</span><span>s</span></div>
                        </div>
                    </div>
                    
                    <label class="selector-label"><span id="selected-color-name" class="product-color"></span></label>
                    <div style="display: flex; justify-content: left; align-items: center; width: 100%; margin: 5% 0;" class="product-stocks"></div>
                    <label class="selector-label">Quantity</label>
                    <div class="quantity-selector">
                        <button class="quantity-button" id="decrement-qty">-</button>
                        <input type="number" class="quantity-input" id="quantity" value="1" min="1" readonly>
                        <button class="quantity-button" id="increment-qty">+</button>
                    </div>

                    <button class="add-to-cart">
                        Add to Cart
                    </button>
                    
                    <p style="margin-top: 15px; color: green; font-weight: bold; text-transform: capitalize; letter-spacing: 0px; text-align: center;">
                        <i class="fa-solid fa-check-circle"></i> Hurry Up only few items left in stock.
                    </p>
                </div>
            </div>

            <div class="product-sections">
                <h2 class="section-header">Product Description</h2>
                <div class="description">
                    <p>Discover unparalleled sound quality with **Carbon Earbuds**. These earbuds are designed for those who seek both high-performance audio and comfort. Ideal for any activity, Carbon Earbuds deliver an outstanding listening experience whether you're on the go or at home.</p>
                    
                    <h3 style="margin-top: 20px;">Features of Carbon Earbuds</h3>
                    <p>Carbon Earbuds provide rich, immersive sound with enhanced bass and clear treble. With built-in **Environmental Noise Cancellation (ENC)**, you can enjoy your music without interruption. The lightweight and ergonomic design ensures a secure and comfortable fit, while touch controls allow for easy music and call management. The long-lasting battery life ensures you stay connected longer, and the sleek charging case provides additional power for extended use.</p>
                </div>

                <h2 class="section-header" style="margin-top: 40px;">Specifications</h2>
                <ul class="specs-list">
                    <li><strong>Bluetooth Version:</strong> 5.0</li>
                    <li><strong>Battery Life:</strong> Up to 7 hours (Up to 28 hours with charging case)</li>
                    <li><strong>Charging Time:</strong> 1.5 hours</li>
                    <li><strong>Noise Cancellation:</strong> Yes (ENC)</li>
                    <li><strong>Waterproof Rating:</strong> IPX5</li>
                    <li><strong>Compatible with:</strong> iOS and Android</li>
                </ul>
            </div>
            
        </div>
    </main>
    
    <!--Right Sidebar4CheckoutOptions Page-->
<div id="cartSidebar" class="cart-sidebar">
  <div class="cart-header">
    <span><img src="Images/bagB.png" width="24" height="24" alt="shopping bag icon"> CART</span>
    <button id="closeCart">&times;</button>
  </div>
  <div class="cart-items" id="cartItems">
    <p id="emptyCartMessage" class="empty-cart-msg">🛒 Your cart is empty!</p>
    <!-- Items will be added dynamically -->
  </div>
  <div class="cart-total">
    <p>Total <span id="cartTotal">0</span></p>
    <div class="cart-buttons">
      <button id="checker" class="checkout-btn disabler" disabled>Checkout</button>
    </div>
  </div>
</div>
<!--Right Sidebar Ends Here-->
<!--Alert box starts here-->
<div class="alert-box"></div>
<!--Alert box ends here-->
<!-- Whatsapp Integration -->
<a href="https://wa.me/923323715253" class="whatsapp-float" target="_blank" title="click here to chat with us on whatsapp" onclick="gtag('event', 'whatsapp_click', { 'event_category': 'engagement', 'event_label': 'WhatsApp Contact' });">
  <img src="Images/Whatsapp-icon.webp" loading="lazy" alt="WhatsApp Chat">
</a>
<!--Scroll to Top Button-->
<button class="btn4scroll" id="scroll2top" onclick="scrollToTop()" title="click here to go to the top of the page."><i class="fa-solid fa-angle-up"></i> Top</button>

    <!-- Footer HTML -->
<footer style="margin-bottom: 40px;" class="footer">
  <div class="footer-container">
    <!-- Brand Info -->
    <div class="footer-section brand">
      <h2>H & M Computers - Reliable like a dost</h2>
      <p>Quality laptops, trusted service.</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-section links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Shipping Policy</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div class="footer-section contact">
      <h3>Contact Us</h3>
      <div class="Images4F"><img src="Images/gmailF.webp" width="auto" height="auto" loading="lazy"><p>support@h&mcom<br>puters.com</p>
      
      <img src="Images/telephoneF.webp" width="auto" height="auto" loading="lazy"><p>+92 332 3715253</p>
      
      <img src="Images/LocationF.webp" width="auto" height="auto" loading="lazy"><p>Karachi, Pakistan</p>
      </div>
    </div>

          <!--Social Profile Icons-->
          <div class="footer-section social">
          <h3>Follow Us On:</h3>
          
          <div class="social-icons">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" alt="Facebook"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram"></a>
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/145/145812.png" alt="Twitter"></a>
          </div>
        </div>
      </div>

  <!-- Copyright -->
  <div class="footer-bottom">
    <p>&copy; 2025 H & M Computers. All rights reserved.</p>
  </div>
</footer>
</div>
<script>
const productId = <?= $productId ?>;
fetch(`get_product.php?id=${productId}`)
  .then(res => res.json())
  .then(product => {

    if (product.error) {
      document.body.innerHTML = "<h2>Product not found</h2>";
      return;
    }

    /* Image */
    const img = document.querySelector(".product-image");
    if (img) {
      img.src = product.image; // e.g. images/laptop.jpg
      img.alt = product.product_name;
    }

    /* Name */
    const name = document.querySelector(".product-name");
    if (name) name.textContent = product.product_name;

    /* Price */
    const price = document.querySelector(".product-price");
    if (price) price.textContent = `Rs ${Number(product.price).toLocaleString()}`;

    /* Color */
    const color = document.querySelector(".product-color");
    if (color) color.textContent = `Color: ${product.color}`;

    const stockContainer = document.querySelector(".product-stocks");
    if (!stockContainer) return;

    if (product.error) {
      stockContainer.textContent = "Stock unavailable";
      return;
    }

    const statusClass = {
      in: "stock-in",
      low: "stock-low",
      out: "stock-out"
    }[product.stock_status];

    stockContainer.innerHTML = `
      <span class="stock-status ${statusClass}">
        ${product.stock_text}
      </span>
    `;
    // ✅ Correct stock check
    if (product.stock_status === "out") {
      const btn = document.querySelector(".add-to-cart");
      if (btn) {
        btn.disabled = true;
        btn.style.opacity = "0.5";
        btn.textContent = "Out of Stock";
      }
    }
  })
  .catch(err => {
    console.error(err);
  });
// For Changing Body theme
const toggle = document.getElementById('toggleTheme');
const icon = document.getElementById('modeIcon');
const body = document.body; // ✅ Use body directly

// Toggle theme on change
toggle.addEventListener('change', () => {
  body.classList.toggle('dark-mode');

  if (body.classList.contains('dark-mode')) {
    localStorage.setItem('theme', 'dark');
    icon.textContent = '🌙';
  } else {
    localStorage.setItem('theme', 'light');
    icon.textContent = '🌞';
  }
});
// Load saved theme on page load
window.addEventListener('DOMContentLoaded', () => {
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    body.classList.add('dark-mode');
    toggle.checked = true;
    icon.textContent = '🌙';
  } else {
    body.classList.remove('dark-mode'); // make sure light mode resets
    toggle.checked = false;
    icon.textContent = '🌞';
  }
});
document.querySelectorAll('.add-to-wishlist').forEach(button => {
    button.addEventListener('click', () => {
        const productId = button.dataset.productId;
        
        fetch('wishlist_add.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({product_id: productId})
        })
        .then(res => res.json())
        .then(data => {
            if(data.success){
                button.innerHTML = '<i class="fa-solid fa-heart"></i> Added to Wishlist';
            }
        });
    });
});
    (() => {
  const currentUrl = new URL(window.location.href);

  if (currentUrl.pathname.includes('.html')) {
    currentUrl.pathname = currentUrl.pathname.split('.html')[0] + '.html';
    currentUrl.search = '';
    currentUrl.hash = '';

    if (currentUrl.href !== window.location.href) {
      window.location.replace(currentUrl.href);
    }
  }
})();
document.addEventListener("DOMContentLoaded", function() {
  document.body.classList.add('loading');
  // Hide loader after content is loaded
  setTimeout(() => {
    document.body.classList.remove('loading');
    const loader = document.querySelector(".logo-loader");
    loader.style.display = "none";
    const content = document.querySelector(".content");
    content.style.visibility = "visible";
  }, 2000); // Adjust the timeout duration as needed
});
// ---------------------------------
// RESET CART IF COMING FROM CHECKOUT
// ---------------------------------
if (sessionStorage.getItem("justCheckedOut") === "yes") {
    localStorage.removeItem("cart");

    // clear server-side cart
    fetch("clear_cart.php").catch(()=>{});

    sessionStorage.removeItem("justCheckedOut");
}
// Add active class to nav link based on current page URL
const currentPage = window.location.pathname.split("/").pop();
const links = document.querySelectorAll('.nav-link');
links.forEach(link => {
  const linkPage = link.getAttribute("href");
  if (linkPage === currentPage) {
    link.classList.add("active");
  } else {
    link.classList.remove("active");
  }
});
const cartSidebar = document.getElementById("cartSidebar");
const sidebar = document.querySelector(".sidebar");
const shopping = document.querySelector('.hideontab');
const accountimg = document.getElementById('img4user');
// User Account Sidebar
document.addEventListener("DOMContentLoaded", () => {
  const accountimg = document.getElementById('img4user');
  const accountimg2 = document.getElementById('img4user2');
  const userPanel = document.getElementById("user-panel");
  const crossicon = document.querySelector('.cross-icon');

  // Toggle sidebar visibility on icon click
  let isSidebarOpen = false;

  userPanel.addEventListener("click", () => {
    if (!isSidebarOpen) {
      sidebar.classList.add("active");
      accountimg.classList.add("active");
      accountimg2.classList.add("active");
      isSidebarOpen = true;
    }
  });
  // Close sidebar when cross icon is clicked
  crossicon.addEventListener("click", () => {
    if (isSidebarOpen) {
      sidebar.classList.remove("active");
      accountimg.classList.remove("active");
      accountimg2.classList.remove("active");
      isSidebarOpen = false;
    }
  });
  // Optional: Close sidebar if clicked outside
  document.addEventListener("click", (e) => {
    if (
      isSidebarOpen &&
      !sidebar.contains(e.target) &&
      !userPanel.contains(e.target)
    ) {
      sidebar.classList.remove("active");
      accountimg.classList.remove("active");
      accountimg2.classList.remove("active");
      isSidebarOpen = false;
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const cartIcon = document.getElementById("add2CartBtn");
  const addToCartBtn1 = document.getElementById("add2CartBtn1");
  const addToCartBtn2 = document.getElementById("add2CartBtn2");
  const closeCart = document.getElementById("closeCart");
  const cartItems = document.getElementById("cartItems");
  const cartTotal = document.getElementById("cartTotal");
  const checkitout = document.getElementById('checker');
  const emptyCartM = document.querySelector(".empty-cart-msg");
  const cartCount = document.getElementById('p4qty');
  const alertBox = document.querySelector(".alert-box");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // 🔄 Always sync counter on page load
  updateCartCount();
  renderCart();

  // ADD TO CART
  function addToCart(product) {
    const existing = cart.find(
      it => it.title === product.title && it.color === product.color
    );

    if (existing) {
      existing.quantity += product.quantity;
    } else {
      cart.push(product);
    }

    saveCart();
    updateCartCount();
    renderCart();
  }

  function updateCartCount() {
  const cartStored = JSON.parse(localStorage.getItem('cart')) || [];
  const totalQty = cartStored.reduce((sum, item) => sum + item.quantity, 0);
  cartCount.innerText = totalQty;
}

  function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
    return fetch("save_cart.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(cart)
    })
    .catch(err => console.error("Save cart error:", err));
  }
function loadCart() {
  fetch("load_cart.php")
    .then(res => res.json())
    .then(data => {
      if (Array.isArray(data)) {
        cart = data;
        renderCart();
      }
    })
    .catch(err => console.error("Load cart error:", err));
}
checkitout.addEventListener("click", (e) => {
  e.preventDefault();

  const cartvalue = Number(
    cartTotal.textContent.replace(/[^0-9]/g, '')
  );

  saveCart().then(() => {

    if (cartvalue >= 25000 && cartvalue <= 200000) {
      if (alertBox) {
        alertBox.style.visibility = "visible";
        alertBox.innerHTML =
          "✅ Your cart has been saved successfully and you are now redirecting to the checkout page...";

        setTimeout(() => {
          alertBox.style.visibility = "hidden";
          window.location.href = "checkout.php";
        }, 2000);
      } else {
        window.location.href = "checkout.php";
      }
    } else {
      if (alertBox) {
        alertBox.style.visibility = "visible";
        alertBox.innerHTML =
          "⚠️ Minimum cart value should be Rs. 25,000 and Maximum Rs. 200,000 to proceed to checkout.";

        setTimeout(() => {
          alertBox.style.visibility = "hidden";
        }, 3000);
      }
    }
  });
});  
  function renderCart() {
    cartItems.innerHTML = "";
    let total = 0;

    if (cart.length === 0) {
      cartItems.innerHTML = `<p class="empty-cart-msg">🛒 Your cart is empty!</p>`;
      cartTotal.textContent = "Rs. 0";

      checkitout.classList.add("disabler");
      checkitout.disabled = true;

      updateCartCount();
      return;
    }

    cart.forEach((item, i) => {
      total += item.price * item.quantity;

      const div = document.createElement("div");
      div.classList.add("cart-item");
      div.innerHTML = `
        <img src="${item.image}" alt="${item.title}">
        <div class="cart-item-details">
          <p class="item-title"><strong>${item.title}</strong></p>
          <p><em>${item.color}</em></p>
          <div class="qty-controls">
            <button class="qty-minus ${item.quantity === 1 ? 'is-min' : ''}" onclick="changeQty(${i}, -1)" aria-disabled="${item.quantity === 1}">−</button>
            <span class="item-qty">${item.quantity}</span>
            <button class="qty-plus ${item.quantity === 10 ? 'is-max' : ''}" onclick="changeQty(${i}, 1)" aria-disabled="${item.quantity === 10}">+</button>
          </div>
          <div class="row4pr">
          <p class="item-price">Rs ${(item.price * item.quantity).toLocaleString('en-IN')} only</p>
          <span class="remove-item" onclick="removeItem(${i})">✕ Remove</span>
          </div>
      `;
      cartItems.appendChild(div);
    });

    const indianFormat = total.toLocaleString('en-IN');

    cartTotal.textContent = "Rs. " + indianFormat + " only";

    checkitout.disabled = false;
    checkitout.classList.remove("disabler");

    updateCartCount();
  }
// ✅ Change quantity with validation
    window.changeQty = function (index, delta) {
  const item = cart[index];
  let newQty = item.quantity + delta;

  if (newQty > 4) {
    alertBox.style.visibility = 'visible';
    alertBox.innerHTML = "Max 4 quantities allowed.";
    setTimeout(() => alertBox.style.visibility = 'hidden', 3000);
    return;
  }
  if (newQty < 1) {
    alertBox.style.visibility = 'visible';
    alertBox.innerHTML = "Add at least one quantity.";
    setTimeout(() => alertBox.style.visibility = 'hidden', 3000);
    return;
  }

  item.quantity = newQty;
  saveCart();
  renderCart();
  updateCartCount();
};

  window.removeItem = function (index) {
    cart.splice(index, 1);

    saveCart();
    updateCartCount();
    renderCart();
};
  // ✅ Handle product buttons dynamically
  document.querySelectorAll(".product-card button:nth-of-type(2)").forEach(btn => {
    btn.addEventListener("click", () => {
      const card = btn.closest(".product-card");
      const product = {
        title: card.dataset.name || "Unnamed",
        price: parseFloat(card.dataset.price) || 0,
        image: card.dataset.image || "https://via.placeholder.com/80",
        color: card.dataset.color || "Default",
        quantity: 1
      };
      if (!product.title || isNaN(product.price)) {
        console.error("Product data missing");
        return;
      }
      addToCart(product);
      cartSidebar.classList.add("open");
    });
  });
  // ✅ Open sidebar from static buttons
  if (addToCartBtn1) {
    addToCartBtn1.addEventListener("click", () => {
      cartSidebar.classList.toggle("open");
    });
  }
  const shoppingq = document.getElementById("p4qty");
  if (addToCartBtn2) {
    addToCartBtn2.addEventListener("click", () => {
    const hamburger = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const sidebar = document.querySelector(".sidebar");

      navMenu.classList.remove("active");
      hamburger.classList.remove("change");
      cartSidebar.classList.toggle("open");
      shopping.classList.remove('active');
      shoppingq.classList.remove('active');
      accountimg.style.display = 'none';
    });
  }
  if (accountimg) {
    accountimg.addEventListener("click", () => {
    const hamburger = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const sidebar = document.querySelector(".sidebar");

      navMenu.classList.remove("active");
      hamburger.classList.remove("change");
      cartSidebar.classList.toggle("open");
      shopping.classList.remove('active');
      shoppingq.classList.remove('active');
      accountimg.style.display = 'none';
    });
  }
  // ✅ Close sidebar
  if (closeCart) {
    closeCart.addEventListener("click", () => {
      cartSidebar.classList.remove("open");
    });
  }
  loadCart();
});
// ✅ Close cart if user clicks outside the sidebar 
document.addEventListener("click", (event) => {

  if (cartSidebar.classList.contains("open")) {
    if (
      !cartSidebar.contains(event.target) &&
      !event.target.closest("#add2CartBtn2") &&
      !event.target.closest(".product-card button") &&
      !event.target.closest(".remove-item") &&
      !event.target.closest(".qty-controls") // ✅ fixed line
    ) {
      cartSidebar.classList.remove("open");
    }
  }
});
        // 1. Image Gallery and Color Selector
        document.addEventListener('DOMContentLoaded', () => {
            const mainImage = document.getElementById('main-product-image');
            const thumbnails = document.querySelectorAll('.thumbnail-item');
            const colorOptions = document.querySelectorAll('.color-option');
            const selectedColorName = document.getElementById('selected-color-name');

            // Function to handle image and color change
            const updateProductDisplay = (targetElement) => {
                const newImage = targetElement.getAttribute('data-image');
                const newColor = targetElement.getAttribute('data-color');
                
                // Update main image
                mainImage.src = newImage;
                
                // Update selected color text
                selectedColorName.textContent = newColor;

                // Update thumbnail active state
                thumbnails.forEach(t => t.classList.remove('active'));
                targetElement.classList.add('active');

                // Update color option active state
                colorOptions.forEach(c => c.classList.remove('active'));
                const matchingColorOption = document.getElementById('color-' + newColor.toLowerCase().replace(' ', '-'));
                if (matchingColorOption) {
                    matchingColorOption.classList.add('active');
                }
            };
            
            // Thumbnail click event
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', () => {
                    updateProductDisplay(thumbnail);
                });
            });

            // Color option click event
            colorOptions.forEach(option => {
                option.addEventListener('click', () => {
                    const colorName = option.getAttribute('data-name');
                    const matchingThumbnail = document.querySelector(`.thumbnail-item[data-color="${colorName}"]`);
                    
                    // If a matching thumbnail is found, use the update function
                    if (matchingThumbnail) {
                        updateProductDisplay(matchingThumbnail);
                    } else {
                        // If no image change, just update color text and active state
                        selectedColorName.textContent = colorName;
                        colorOptions.forEach(c => c.classList.remove('active'));
                        option.classList.add('active');
                    }
                });
            });


            // 2. Quantity Selector
            const quantityInput = document.getElementById('quantity');
            const incrementBtn = document.getElementById('increment-qty');
            const decrementBtn = document.getElementById('decrement-qty');

            incrementBtn.addEventListener('click', () => {
                let currentVal = parseInt(quantityInput.value);
                quantityInput.value = currentVal + 1;
            });

            decrementBtn.addEventListener('click', () => {
                let currentVal = parseInt(quantityInput.value);
                if (currentVal > 1) {
                    quantityInput.value = currentVal - 1;
                }
            });

            // 3. Countdown Timer (Sets a simple 24-hour timer)
            const hourElement = document.getElementById('hours');
            const minuteElement = document.getElementById('minutes');
            const secondElement = document.getElementById('seconds');
            
            // Set target time: 24 hours from now
            let endTime = new Date();
            endTime.setHours(endTime.getHours() + 24); 

            function updateCountdown() {
                const now = new Date().getTime();
                const distance = endTime.getTime() - now;

                // Time calculations
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the elements
                hourElement.textContent = hours < 10 ? '0' + hours : hours;
                minuteElement.textContent = minutes < 10 ? '0' + minutes : minutes;
                secondElement.textContent = seconds < 10 ? '0' + seconds : seconds;

                // If the count down is finished, write some text 
                if (distance < 0) {
                    clearInterval(timerInterval);
                    document.getElementById("countdown-timer").innerHTML = "EXPIRED";
                }
            }

            // Update the count down every 1 second
            const timerInterval = setInterval(updateCountdown, 1000);
            updateCountdown(); // Initial call to display immediately
        });
</script>
</body>
</html>