<!-- filepath: c:\xampp\htdocs\Buzzy_Cafe\Cart\cart.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart | Buzzy Cafe</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="../header.css">
    <link rel="stylesheet" href="../Footer/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once('../Header/header.php'); ?>

    <div class="cart-mainW">
        <div class="cart-itemsW">
            <h2>Your Cart</h2>
            <table class="cart-tableW">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="cart-bodyW">
                    <!-- Example row, replace with PHP loop for real cart data -->
                    <tr>
                        <td><img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=80&q=80" alt="Lungo Coffee" class="cart-imgW"></td>
                        <td>Lungo Coffee</td>
                        <td>Rs. 199</td>
                        <td>
                            <input type="number" min="1" value="1" class="cart-qtyW">
                        </td>
                        <td class="cart-item-totalW">Rs. 199</td>
                        <td><button class="cart-removeW">Remove</button></td>
                    </tr>
                    <!-- Add more rows dynamically -->
                </tbody>
            </table>
            <a href="../Menu_Page/Menu.php" class="cart-continueW">Continue Shopping</a>
        </div>
        <div class="cart-summaryW">
            <h3>Order Summary</h3>
            <div class="cart-summary-totalW">
                <span>Total:</span>
                <span id="cart-totalW">Rs. 199</span>
            </div>
            <button class="cart-payW">Make Payment</button>
        </div>
    </div>

    <?php include_once('../Footer/footer.php'); ?>

    <script>
    // Simple JS for demo: update total on quantity change and remove
    document.querySelectorAll('.cart-qtyW').forEach(function(input) {
        input.addEventListener('input', function() {
            var price = parseInt(input.closest('tr').children[2].textContent.replace('Rs. ', ''));
            var qty = parseInt(input.value);
            var total = price * qty;
            input.closest('tr').querySelector('.cart-item-totalW').textContent = 'Rs. ' + total;
            updateCartTotal();
        });
    });
    document.querySelectorAll('.cart-removeW').forEach(function(btn) {
        btn.addEventListener('click', function() {
            btn.closest('tr').remove();
            updateCartTotal();
        });
    });
    function updateCartTotal() {
        let sum = 0;
        document.querySelectorAll('.cart-item-totalW').forEach(function(td) {
            sum += parseInt(td.textContent.replace('Rs. ', ''));
        });
        document.getElementById('cart-totalW').textContent = 'Rs. ' + sum;
    }
    </script>
</body>
</html>