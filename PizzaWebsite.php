<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="pizzaicon.png" type="image/x-icon">
    <title>Pizza Order Form</title>
</head>
<body>
    <header>
        <h1>Pizza Order Form</h1>
        <img src="pizzaslice.jpg" alt="Pizza slice">
    </header>
    <main>
        <form action="submit_order.php" method="post">
            <section>
                <h2>Contact Information</h2>
                <p>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
                </p>
                <p>
                <label for="phone">Phone: </label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890" required>
                </p>
            </section>
            <section>
                <h2>Pizza Details</h2>
                <label for="numPizzas">Number of Pizzas:</label>
                <input type="number" id="numPizzas" name="numPizzas" min="1" required>
                <label for="size">Size:</label>
                <select id="size" name="size" required>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </section>
            <section>
                <h2>Pizza shape</h2>
                    <label for="round">Round</label>
                    <input type="radio" id="round" name="shape" value="round" checked>
                    <label for="square">Square</label>
                    <input type="radio" id="square" name="shape" value="square">
            </section>
            <section>
                <h2>Crust Type</h2>
                <label for="deepDish">Deep Dish</label>
                <input type="radio" id="deepDish" name="crust" value="deepDish" checked>
                <label for="thinCrust">Thin Crust</label>
                <input type="radio" id="thinCrust" name="crust" value="thinCrust">
            </section>
            <section>
                <h2>Toppings</h2>
                <p>
                    All pizzas come with tomato sauce and mozzarela
                </p>
                <label for="toppings">Select Toppings (Hold Ctrl/Cmd to select multiple):</label>
                <select id="toppings" name="toppings[]" multiple>
                    <option value="pepperoni">Pepperoni</option>
                    <option value="sausage">Sausage</option>
                    <option value="mushrooms">Mushrooms</option>
                </select>
            </section>
            <button type="submit">Place Order</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Pizza Delivery Service</p>
    </footer>
</body>
</html>
