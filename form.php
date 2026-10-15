<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - CraftyCorner 🎁</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="index.php">CraftyCorner 🎁</a>
        </div>
    </nav>

    <!-- Checkout Form Section -->
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <h3 class="fw-bold text-dark mb-3 text-center">Complete Your Order 🛒</h3>
                    <p class="text-muted text-center mb-4">You are ordering: <strong class="text-danger"><?php echo $product_name; ?></strong></p>

                    <form action="order_success.php" method="POST">
                        <input type="hidden" name="product_name" value="product_name";
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" class="form-control rounded-pill py-2 px-3" placeholder="Enter your full name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Phone (WhatsApp)</label>
                            <input type="tel" name="phone" class="form-control rounded-pill py-2 px-3" placeholder="Enter your 10-digit mobile number" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold"> Address</label>
                            <textarea name="address" class="form-control rounded-4 p-3" rows="3" placeholder="House no, Street, City, Pincode" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">product </label>
                            <textarea name="address" class="form-control rounded-4 p-3" rows="3" placeholder="product name, quantity,color, " required></textarea>
                        </div>
  <button type="submit" class="btn btn-success w-100 fw-semibold rounded-pill py-3 mt-3"> submit</button>

                        <button type="submit" class="btn btn-success w-100 fw-semibold rounded-pill py-3 mt-3">
                            Confirm & Send Order via WhatsApp 💬
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="text-white-50 mb-0">© 2026 CraftyCorner. Crafted with love.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>