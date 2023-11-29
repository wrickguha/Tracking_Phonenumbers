<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="navbar-logo">
                <div class="logo"></div>
            </div>
            <div class="contents">
                <select class="contents_select border">
                    <option>PRODUCTS</option>
                </select>
                <select class="contents_select border">
                    <option>SERVICES</option>
                </select>
                <select class="contents_select border">
                    <option>FOR PROS</option>
                </select>
                <select class="contents_select border">
                    <option>RESOURCES</option>
                </select>
            </div>
            <div class="side">
            <div class="nav-language">
            <i class="fa-solid fa-language"></i>
            </div>
            <div class="nav-cart">
            <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="nav-user">
            <i class="fa-solid fa-user"></i>
            </div>
            </div>
        </div>
    </header>
    <div class="hero_section">
        <div class="hero_msg">
            	<h3>Enter the phone number:</h3>

		<form id="myForm" action="temp.php" method="post">
			<input class="input" type="number" placeholder="Number" id="input_value">
        		<i class="fa-solid fa-magnifying-glass" onclick="submitForm()"></i>
    		</form>
        </div>
</div>

<script>
        function submitForm() {
            var form = document.getElementById("myForm");
            var inputValue = document.getElementById("input_value").value;

            var hiddenInput = document.createElement("input");
            hiddenInput.setAttribute("type", "hidden");
            hiddenInput.setAttribute("name", "input_value");
            hiddenInput.setAttribute("value", inputValue);
            form.appendChild(hiddenInput);

            form.submit();
      }
      </script>
    <footer>
        <div class="foot_panel1">
            Back To Top
        </div>

        <div class="foot_panel2">
            <ul>
                <p>CONTACTS</p>
                <a>Contact Us</a>
                <a>Submit a Request</a>
                <a>Support</a>
            </ul>

            <ul>
                <p>Follow</p>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
            </ul>
                
            <ul>
                <p>Company</p>
                <a>About Us</a>
                <a>Why Choose Us?</a>
                <a>FAQs</a>
            </ul>
        </div>

        <div class="foot_panel3">
           Copyright © 2022 All Rights Reserved.
        </div>

    </footer>

</body>
</html>