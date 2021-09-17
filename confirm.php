<link rel="stylesheet" type="text/css" href="css/order.css">

<body>
    <div class="order-food">
        <div class="title-menu">
            <h2>Fill this form to confirm your order</h2>
        </div>
        <div class="menu-chos">
            <form style="margin-block: 3em;" action="">
                <fieldset class="form-c">
                    <legend>Selected Food</legend>
                    <div class="">
                        <img src="pics/menu-pizza.jpg" alt="">
                    </div>
                    <div class="left-c">
                        <h3 style="margin-bottom :6px;">Food Title</h3>
                        <strong>$2.3</strong>
                        <br>
                        <strong>Quantity</strong>
                        <br><br>
                        <input class="quantity" type="number" value="1">
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="information">
            <form style="width:478px; height:auto" action="">
                <fieldset class="form-in">
                    <legend>Delivery Details</legend>
                    <label for="fname">Full Name</label><br>
                    <input type="text" id="fname" name="fname" value="" placeholder="abc"><br>
                    <label for="phone">Phone Number</label><br>
                    <input type="tel" id="phone" name="lname" value="" placeholder="09878xxx"><br>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="fname" value="" placeholder="xxx@gmail.com"><br>
                    <label for="adress">Adress</label><br>
                    <input type="text" id="adress" name="fname" value="" placeholder="Ha noi"><br><br>
                    <button class="submit" type="button">Confirm Order</button>
                </fieldset>
            </form>
        </div>

    </div>
</body>