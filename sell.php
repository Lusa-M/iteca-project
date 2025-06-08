<!DOCTYPE html>
<html>
<head>
    <title>Sell Item</title>
</head>
<body>
      <nav id="header" class="navbar-vertical">
        <div class="container-vertical">
            <a href="#" class="navbar-brand-vertical">
                <img src="img/logo.png" class="logo-vertical" alt="Logo">
            </a>
            <ul class="navbar-nav-vertical">
                <li class="nav-item-vertical"><a class="nav-link-vertical" href="homepage.php">Home</a></li>
                <li class="nav-item-vertical"><a class="nav-link-vertical" href="shop.php">Shop</a></li>
                <li class="nav-item-vertical"><a class="nav-link-vertical active" href="sell.php">Sell</a></li>
                <li class="nav-item-vertical"><a class="nav-link-vertical" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item-vertical" id="lg-bag-vertical"><a class="nav-link-vertical" href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
            </ul>
        </div>
    </nav>
    <style>
    .navbar-vertical {
        width: 100%;
        background: #222;
        padding: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    .container-vertical {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .navbar-brand-vertical {
        margin: 20px 0 10px 0;
    }
    .logo-vertical {
        height: 80px;
    }
    .navbar-nav-vertical {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        border-top: 1px solid #333;
    }
    .nav-item-vertical {
        margin: 0 20px;
    }
    .nav-link-vertical {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 18px 0;
        font-size: 18px;
        transition: color 0.2s;
    }
    .nav-link-vertical.active,
    .nav-link-vertical:hover {
        color: #ffd700;
    }
    #lg-bag-vertical .fa-shopping-bag {
        font-size: 20px;
    }
    @media (max-width: 768px) {
        .navbar-nav-vertical {
            flex-direction: column;
            align-items: center;
        }
        .nav-item-vertical {
            margin: 10px 0;
        }
        .logo-vertical {
            height: 60px;
        }
    }
    </style>

    <h1>Sell an Item</h1>
    
    
    
        <h2>Choose your listing type</h2>
     
        <form id="categoryForm" style="display: flex; gap: 20px; flex-wrap: wrap;">
            <label style="padding: 20px; font-size: 16px; cursor:pointer;">
                <input type="radio" name="category" value="Electronics" style="margin-right:8px;">
                <span style="font-size: 24px;">⚡</span><br>Electronics
            </label>
            <label style="padding: 20px; font-size: 16px; cursor:pointer;">
                <input type="radio" name="category" value="Books/Stationery" style="margin-right:8px;">
                <span style="font-size: 24px;">📚</span><br>Books/Stationery
            </label>
            <label style="padding: 20px; font-size: 16px; cursor:pointer;">
                <input type="radio" name="category" value="Furniture" style="margin-right:8px;">
                <span style="font-size: 24px;">🛋️</span><br>Furniture
            </label>
            <label style="padding: 20px; font-size: 16px; cursor:pointer;">
                <input type="radio" name="category" value="Thrift" style="margin-right:8px;">
                <span style="font-size: 24px;">👗</span><br>Thrift
            </label>
        </form>
      
         
  
    <style>
    @media (min-width: 768px) {
        .container-flex {
            display: flex;
            gap: 40px;
            align-items: flex-start;
        }
        .form-block {
            flex: 1;
            max-width: 350px;
            background: #f9f9f9;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #0001;
        }
        .preview-block {
            flex: 2;
            background: #fff;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #0001;
            min-width: 300px;
            max-width: 500px;
        }
    }
    @media (max-width: 767px) {
        .container-flex, .form-block, .preview-block {
            display: block;
            width: 100%;
            box-shadow: none;
            padding: 0;
            background: none;
        }
        .preview-block { display: none; }
    }
    .add-photo-label {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: bold;
        cursor: pointer;
    }
    </style>
      <div class="container-flex" id="listItem">
         <div class="form-block">
            <form method="POST" action="itemslist.php">
                <label class="add-photo-label">
                    <span style="font-size: 22px;">🖼️</span> Add photos
                </label>
                <input type="file" name="image" id="image" accept="image/*" required style="margin-bottom: 16px;"><br>

                <label>Title:</label><br>
                <input type="text" name="name" id= "name" required style="width: 100%;"><br><br>

                 

                <label>Price (R):</label><br>
                <input type="number" step="0.01" name="price" id="price" required style="width: 100%;"><br><br>

                <label>Condition:</label><br>
                <select name="condition" id="condition" required style="width: 100%;">
                    <option value="New">New</option>
                    <option value="Used - Like New">Used - Like New</option>
                    <option value="Used - Good">Used - Good</option>
                    <option value="Used - Fair">Used - Fair</option>
                </select><br><br>

                <label>Description:</label><br>
                <textarea name="description" id="description" rows="4" cols="40" required style="width: 100%;"></textarea><br><br>

                <input type="submit" class="btn" value="List Item" name="listItem">
            </form>
</div>
        <div class="preview-block" id="previewBlock">
            <h2>Preview</h2>
            <div id="previewImage" style="width:100%;height:180px;background:#eee;display:flex;align-items:center;justify-content:center;">
                <span style="color:#bbb;">Image Preview</span>
            </div>
            <h3 id="previewTitle">Title</h3>
            <p><strong>Price:</strong> <span id="previewPrice">R 0.00</span></p>
            <p><strong>Category:</strong> <span id="previewCategory">Select Category</span></p>
            <p><strong>Condition:</strong> <span id="previewCondition">New</span></p>
            <p><strong>Seller:</strong> <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM users WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'] . ' ' . $row['lastName'];
        
       }
    }
       ?></p>
            <p id="previewDescription"></p>
        </div>
    </div>
    <script>
    const nameInput = document.querySelector('input[name="name"]');
    const priceInput = document.querySelector('input[name="price"]');
    const conditionInput = document.querySelector('select[name="condition"]');
    const descInput = document.querySelector('textarea[name="description"]');
    const imageInput = document.querySelector('input[name="image"]');
      
            // Update preview when category changes
            document.querySelectorAll('input[name="category"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    document.getElementById('previewCategory').textContent = this.value;
                });
            });
        

    // Listen for category button clicks
    document.querySelectorAll('button[name="category"]').forEach(btn => {
        btn.addEventListener('click', function(e) {
            selectedCategory = this.value;
            setTimeout(updatePreview, 10); // update after form submit
        });
    });

    function updatePreview() {
        document.getElementById('previewTitle').textContent = nameInput.value || 'Title';
        document.getElementById('previewPrice').textContent = priceInput.value ? 'R ' + priceInput.value : 'R 0.00';
        document.getElementById('previewCategory').textContent = categoryButtons || 'Select Category';
        document.getElementById('previewCondition').textContent = conditionInput.value;
        document.getElementById('previewDescription').textContent = descInput.value;
    }
    [nameInput, priceInput, conditionInput, descInput].forEach(input => {
        input.addEventListener('input', updatePreview);
    });
    imageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImage').innerHTML = '<img src="' + e.target.result + '" style="max-width:100%;max-height:180px;">';
            };
            reader.readAsDataURL(file);
        }
    });
    </script>
    <script src="script.js"></script>
   

</body>
</html>

