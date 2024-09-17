<?php
session_start();  // Start the session to store the cart

// Sample products (associative array with product name as key and price as value)
$products = [
    "Laptop" => 1000,
    "Phone" => 500,
    "Tablet" => 300,
    "Headphones" => 50
];

// Initialize cart in session if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$cart = &$_SESSION['cart'];  // Reference the session cart

// Function to add an item to the cart
function addToCart(&$cart, $product, $quantity) {
    global $products;
    if (array_key_exists($product, $products)) {
        if (array_key_exists($product, $cart)) {
            $cart[$product] += $quantity;  // Increase quantity if item exists
        } else {
            $cart[$product] = $quantity;   // Add new item
        }
        echo "$product has been added to the cart.<br>";
    } else {
        echo "Product $product does not exist.<br>";
    }
}

// Function to remove an item from the cart
function removeFromCart(&$cart, $product) {
    if (array_key_exists($product, $cart)) {
        unset($cart[$product]);  // Remove the item from the cart
        echo "$product has been removed from the cart.<br>";
    } else {
        echo "$product not found in cart.<br>";
    }
}

// Function to calculate the total cost of items in the cart
function calculateTotalCost($cart) {
    global $products;
    $total = 0;
    foreach ($cart as $product => $quantity) {
        $total += $products[$product] * $quantity;
    }
    return $total;
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if we're adding items to the cart
    if (isset($_POST['product']) && isset($_POST['quantity'])) {
        $product = $_POST['product'];
        $quantity = (int)$_POST['quantity'];
        addToCart($cart, $product, $quantity);
    }

    // Handle removing a product from the cart
    if (isset($_POST['remove_product'])) {
        $productToRemove = $_POST['remove_product'];
        removeFromCart($cart, $productToRemove);
    }

    // Handle the "Clear Cart" button click
    if (isset($_POST['clear_cart'])) {
        session_destroy();  // Destroy the session and clear the cart
        header("Location: " . $_SERVER['PHP_SELF']);  // Refresh the page
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h2>Shopping Cart</h2>

<!-- Form to add items to the cart -->
<form method="post" action="">
    <label for="product">Select product:</label>
    <select name="product" id="product">
        <?php
        // Generate options for each product dynamically
        foreach ($products as $product => $price) {
            echo "<option value=\"$product\">$product - $$price</option>";
        }
        ?>
    </select>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" value="1" min="1">
    
    <input type="submit" value="Add to Cart">
</form>

<!-- Display the cart -->
<h3>Cart Contents:</h3>
<?php if (!empty($cart)): ?>
    <ul>
        <?php foreach ($cart as $product => $quantity): ?>
            <li>
                <?php echo $product . " (x" . $quantity . ")"; ?>
                <!-- Button to remove item from cart -->
                <form method="post" action="" style="display:block;">
                    <input type="hidden" name="remove_product" value="<?php echo $product; ?>">
                    <input type="submit" style="margin-left: 100px" value="Remove">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <p>Total Cost: $<?php echo calculateTotalCost($cart); ?></p>

    <!-- Button to clear the entire cart -->
    <form method="post" action="">
        <input type="submit" name="clear_cart" value="Clear Cart">
    </form>

<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

</body>
</html>
