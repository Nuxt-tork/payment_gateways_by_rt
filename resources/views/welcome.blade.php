<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <div class="payment-container">
        <h1>Pay Now Securely with Your Favorite Method!</h1>
        <div class="payment-buttons">
            <!-- SSLCommerz Button -->
            <button class="payment-btn sslcommerz" onclick="handlePayment('sslcommerz')">
                
                Pay with SSLCommerz
            </button>
            <!-- bKash Button -->
            <button class="payment-btn bkash" onclick="handlePayment('bkash')">
                
                Pay with bKash
            </button>
            <!-- Nagad Button -->
            <button class="payment-btn nagad" onclick="handlePayment('nagad')">
                
                Pay with Nagad
            </button>
        </div>
        <div class="info">
            <p>✅ 100% Secure Payments</p>
            <p>🕐 Fast Processing</p>
            <p>📱 Mobile & Online Friendly</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
