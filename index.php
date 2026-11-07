
<?php
require_once "config/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PharmaCare | Pharmacy Management System</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="logo">
            <span class="logo-icon">✚</span>
            Pharma<span>Care</span>
        </div>

        <nav class="nav-links">
            <div>
                <a href="#">Home</a>
                <a href="#about">About</a>
                <a href="#features">Features</a>
            </div>
        </nav>

        <div class="nav-right">
            <a href="login/login.html" class="login-btn">
                Login 
            </a>
        </div>

    </header>


    <!-- ================= HERO SECTION ================= -->

    <section class="hero">

        <div class="hero-content">

            <span class="hero-label">
                Smart Pharmacy Management
            </span>

            <h1>
                Manage Your Pharmacy
                <span style="color:#0891b2;">Smarter</span>
            </h1>

            <p>
                PharmaCare helps you manage medicines, suppliers,
                purchases and sales in one simple and organized system.
                Make your pharmacy management easier and more efficient.
            </p>

            <div class="hero-buttons">

                <a href="login/login.html" class="primary-btn">
                    Get Started 
                </a>

                <a href="#about" class="secondary-btn">
                    Learn More
                </a>

            </div>

        </div>

    </section>


    <!-- ================= TRUST SECTION ================= -->

    <section class="trust">

        <div class="trust-item">
            <div class="trust-icon">💊</div>
            <span>Medicine Management</span>
        </div>

        <div class="trust-item">
            <div class="trust-icon">📦</div>
            <span>Stock Management</span>
        </div>

        <div class="trust-item">
            <div class="trust-icon">📊</div>
            <span>Sales Tracking</span>
        </div>

        <div class="trust-item">
            <div class="trust-icon">🔒</div>
            <span>Secure Access</span>
        </div>

    </section>


    <!-- ================= ABOUT SECTION ================= -->

    <section class="about" id="about">

        <span class="section-label">
            About PharmaCare
        </span>

        <h2 class="section-title">
            Simplifying Pharmacy Management
        </h2>

        <p class="section-description">
            PharmaCare is a pharmacy management system designed to
            simplify daily pharmacy operations. It provides a
            centralized platform to manage medicines, suppliers,
            purchases, sales and inventory.

            Our goal is to make pharmacy management more organized,
            efficient and user-friendly.
        </p>

    </section>


    <!-- ================= FEATURES SECTION ================= -->

    <section class="features" id="features">

        <div class="features-header">

            <span class="section-label">
                Our Features
            </span>

            <h2 class="section-title">
                Everything You Need
            </h2>

            <p class="section-description">
                Manage your pharmacy operations with useful tools
                in one centralized system.
            </p>

        </div>


        <div class="feature-container">

            <!-- Feature 1 -->

            <div class="feature-card">

                <div class="feature-icon blue">
                    💊
                </div>

                <h3>Medicine Management</h3>

                <p>
                    Add, update, delete and manage medicine
                    information easily.
                </p>

            </div>


            <!-- Feature 2 -->

            <div class="feature-card">

                <div class="feature-icon purple">
                    📦
                </div>

                <h3>Inventory Management</h3>

                <p>
                    Monitor medicine stock and keep inventory
                    information organized.
                </p>

            </div>


            <!-- Feature 3 -->

            <div class="feature-card">

                <div class="feature-icon green">
                    🏢
                </div>

                <h3>Supplier Management</h3>

                <p>
                    Store and manage supplier information
                    in one place.
                </p>

            </div>


            <!-- Feature 4 -->

            <div class="feature-card">

                <div class="feature-icon orange">
                    🛒
                </div>

                <h3>Purchase Management</h3>

                <p>
                    Record medicine purchases and
                    manage purchase information.
                </p>

            </div>


            <!-- Feature 5 -->

            <div class="feature-card">

                <div class="feature-icon pink">
                    💰
                </div>

                <h3>Sales Management</h3>

                <p>
                    Record sales transactions and
                    organize daily sales activities.
                </p>

            </div>


            <!-- Feature 6 -->

            <div class="feature-card">

                <div class="feature-icon yellow">
                    📊
                </div>

                <h3>Reports & Tracking</h3>

                <p>
                    Keep track of pharmacy activities
                    through organized information.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer class="footer">

        <div class="footer-container">


            <!-- Footer Brand -->

            <div class="footer-brand">

                <div class="footer-logo">

                    <span class="footer-plus">✚</span>
                    <span class="footer-name">PharmaCare</span>

                </div>

                <p>
                    A simple and organized pharmacy management
                    system for managing medicines, inventory,
                    purchases and sales.
                </p>

                <div class="social-links">

                    <a href="#" aria-label="Facebook">f</a>
                    <a href="#" aria-label="Instagram">◎</a>
                    <a href="#" aria-label="LinkedIn">in</a>

                </div>

            </div>


            <!-- Quick Links -->

            <div class="footer-column">

                <h3>Quick Links</h3>

                <a href="#">Home</a>
                <a href="#about">About Us</a>
                <a href="#features">Features</a>
                <a href="login/login.html">Login</a>

            </div>


            <!-- Services -->

            <div class="footer-column">

                <h3>Our Services</h3>

                <a href="#features">Medicine Management</a>
                <a href="#features">Inventory Management</a>
                <a href="#features">Supplier Management</a>
                <a href="#features">Sales Management</a>

            </div>


            <!-- Get Started -->

            <div class="footer-column footer-cta">

                <h3>Get Started</h3>

                <p class="footer-contact">
                    Manage your pharmacy activities
                    with PharmaCare.
                </p>

                <a href="login/login.html" class="login-btn">
                    Access Your Account 
                </a>

            </div>

        </div>


        <!-- Footer Bottom -->

        <div class="footer-bottom">

            <p>
                © <?php echo date("Y"); ?> PharmaCare.
                All Rights Reserved.
            </p>

            <p class="footer-credit">
                Pharmacy Management System
            </p>

        </div>

    </footer>


</body>
</html>
