<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetPlay - Premium Internet & Gaming Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            padding-top: 80px;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: var(--primary);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-4.0.3') center/cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .section-title {
            position: relative;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--secondary);
            margin: 15px auto;
        }

        .service-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: var(--secondary);
            border-color: var(--secondary);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
        }

        .btn-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .pricing-table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
            margin: 20px 0;
        }

        .pricing-table:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .pricing-header {
            background: var(--primary);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .price {
            font-size: 3rem;
            font-weight: 700;
            margin: 20px 0;
        }

        .price span {
            font-size: 1.5rem;
            font-weight: 400;
        }

        .pricing-features {
            padding: 20px;
        }

        .pricing-features li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-links a {
            color: var(--light);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--secondary);
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: var(--secondary);
        }

        .payment-form {
            display: none;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 30px;
        }

        .page-section {
            display: none;
            padding: 60px 0;
            min-height: 80vh;
        }

        .page-section.active {
            display: block;
        }

        .nav-link {
            cursor: pointer;
        }

        .user-status {
            background-color: var(--light);
            padding: 10px 15px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            margin-left: 15px;
        }

        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 8px;
        }

        .status-dot.registered {
            background-color: #2ecc71;
        }

        .status-dot.not-registered {
            background-color: #e74c3c;
        }

        .time-option {
            display: inline-block;
            padding: 8px 15px;
            margin: 5px;
            border: 1px solid #ddd;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .time-option:hover, .time-option.selected {
            background-color: var(--secondary);
            color: white;
            border-color: var(--secondary);
        }

        .loading {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .loading-spinner {
            width: 3rem;
            height: 3rem;
        }

        .transaction-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .info-alert {
            background-color: #d1ecf1;
            border-color: #bee5eb;
            color: #0c5460;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .test-card {
            background-color: #f8d7da;
            border-left: 4px solid #dc3545;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showSection('home')">
                <i class="fa-solid fa-gamepad me-2"></i>NetPlay
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" onclick="showSection('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="showSection('about')">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="showSection('services')">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="showSection('contact')">Contact</a>
                    </li>
                    <li class="nav-item">
                        <span class="user-status">
                            <span class="status-dot not-registered" id="statusDot"></span>
                            <span id="userStatusText">Not Registered</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="page-section active">
        <div class="hero">
            <div class="container">
                <h1 class="display-3 fw-bold mb-4">Premium Internet & Gaming Experience</h1>
                <p class="lead mb-4">Get high-speed internet access and premium gaming services with flexible plans</p>
                <button class="btn btn-primary btn-lg me-2" onclick="showSection('services')">View Plans</button>
                <button class="btn btn-outline-light btn-lg" onclick="showPaymentForm()">Pay Now</button>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <i class="fa-solid fa-bolt fa-3x text-primary mb-3"></i>
                    <h3>High Speed Internet</h3>
                    <p>Enjoy blazing fast internet speeds for streaming, browsing, and downloading</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fa-solid fa-gamepad fa-3x text-primary mb-3"></i>
                    <h3>Premium Gaming</h3>
                    <p>Low latency gaming experience with dedicated servers and premium hardware</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fa-solid fa-headset fa-3x text-primary mb-3"></i>
                    <h3>24/7 Support</h3>
                    <p>Our technical team is available round the clock to assist you</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="page-section py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center section-title">About Us</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3>We Provide The Best Internet & Gaming Services</h3>
                    <p>NetPlay was founded in 2015 with a mission to provide high-quality internet and gaming services to our community. We understand the needs of both casual users and hardcore gamers.</p>
                    <p>Our state-of-the-art infrastructure ensures low latency and high-speed connectivity for all your needs. Whether you're working from home, streaming content, or competing in online games, we've got you covered.</p>
                    <div class="d-flex">
                        <div class="me-4">
                            <h4>5000+</h4>
                            <p>Happy Customers</p>
                        </div>
                        <div class="me-4">
                            <h4>24/7</h4>
                            <p>Support</p>
                        </div>
                        <div>
                            <h4>10+</h4>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1600132806372-b5bfedce21ca?ixlib=rb-4.0.3" alt="About Us" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="page-section py-5">
        <div class="container py-5">
            <h2 class="text-center section-title">Our Services</h2>
            <p class="text-center lead mb-5">Choose from our flexible plans tailored to your needs</p>

            <div class="info-alert">
                <i class="fa-solid fa-info-circle"></i> You're currently in test mode. All transactions are simulated for demonstration purposes.
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="service-card card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <h3>Internet Services</h3>
                            <p>High-speed internet for browsing, streaming, and working from home</p>
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h4>Internet Services</h4>
                                    <div class="price">TZS 1,000<span>/day</span></div>
                                </div>
                                <ul class="list-unstyled pricing-features">
                                    <li><i class="fa-solid fa-check text-success me-2"></i>High Speed Internet</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>24 Hours Access</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Unlimited Data</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>24/7 Support</li>
                                </ul>
                                <div class="text-center p-3">
                                    <button class="btn btn-primary" onclick="selectService('internet', 1000)">Chagua Huduma</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="service-card card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fa-solid fa-gamepad"></i>
                            </div>
                            <h3>Gaming Services</h3>
                            <p>Low-latency gaming with premium hardware and optimized connections</p>
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h4>Gaming Services</h4>
                                    <div class="price">TZS 500<span>/10 min</span></div>
                                </div>
                                <ul class="list-unstyled pricing-features">
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Premium Gaming Experience</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>High-End Gaming PCs</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Low Latency</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Wide Game Selection</li>
                                </ul>
                                <div class="text-center p-3">
                                    <button class="btn btn-primary" onclick="selectService('gaming', 500)">Chagua Huduma</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Form -->
            <div id="paymentForm" class="payment-form">
                <h3 class="text-center mb-4">Malipo ya <span id="paymentServiceName"></span></h3>
                <div class="alert alert-info">
                    Unachagua: <strong id="subscriptionPlan"></strong> - <strong id="subscriptionPrice"></strong>
                </div>

                <!-- Internet Options -->
                <div id="internetOptions" style="display: none;">
                    <h5 class="mb-3">Chagua Muda wa Kutumia Intaneti:</h5>
                    <div>
                        <div class="time-option" onclick="selectTimeOption(1, 1000, 'Siku 1')">Siku 1 - TZS 1,000</div>
                        <div class="time-option" onclick="selectTimeOption(3, 2700, 'Siku 3')">Siku 3 - TZS 2,700</div>
                        <div class="time-option" onclick="selectTimeOption(7, 6000, 'Siku 7')">Siku 7 - TZS 6,000</div>
                        <div class="time-option" onclick="selectTimeOption(30, 22000, 'Mwezi 1')">Mwezi 1 - TZS 22,000</div>
                    </div>
                </div>

                <!-- Gaming Options -->
                <div id="gamingOptions" style="display: none;">
                    <h5 class="mb-3">Chagua Muda wa Kucheza:</h5>
                    <div>
                        <div class="time-option" onclick="selectTimeOption(10, 500, 'Dakika 10')">Dakika 10 - TZS 500</div>
                        <div class="time-option" onclick="selectTimeOption(30, 1200, 'Dakika 30')">Dakika 30 - TZS 1,200</div>
                        <div class="time-option" onclick="selectTimeOption(60, 2000, 'Dakika 60')">Dakika 60 - TZS 2,000</div>
                        <div class="time-option" onclick="selectTimeOption(120, 3500, 'Dakika 120')">Dakika 120 - TZS 3,500</div>
                    </div>
                </div>

                <form id="payment" class="mt-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="customerName" class="form-label">Jina Kamili</label>
                            <input type="text" class="form-control" id="customerName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="customerEmail" class="form-label">Barua Pepe</label>
                            <input type="email" class="form-control" id="customerEmail" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="customerPhone" class="form-label">Nambari ya Simu</label>
                            <input type="tel" class="form-control" id="customerPhone" placeholder="+255..." required>
                        </div>
                    </div>

                    <div class="test-card">
                        <h5><i class="fa-solid fa-credit-card"></i> Test Card Information</h5>
                        <p><strong>Card Number:</strong> 5531 8866 5214 2950</p>
                        <p><strong>CVV:</strong> 564</p>
                        <p><strong>Expiry:</strong> 09/32</p>
                        <p><strong>PIN:</strong> 3310</p>
                        <p><strong>OTP:</strong> 12345</p>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-success btn-lg" onclick="processPayment()">Lipa kwa Flutterwave</button>
                    </div>
                </form>

                <div id="paymentLoading" class="loading">
                    <div class="spinner-border loading-spinner text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3">Inauliza malipo... Tafadhali subiri</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="page-section py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center section-title">Wasiliana Nasi</h2>
            <p class="text-center lead mb-5">Una maswali? Wasiliana na timu yetu</p>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="contact-form">
                        <h3 class="mb-4">Tumia Ujumbe</h3>
                        <form>
                            <div class="mb-3">
                                <label for="contactName" class="form-label">Jina Lako</label>
                                <input type="text" class="form-control" id="contactName" required>
                            </div>
                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">Barua Pepe</label>
                                <input type="email" class="form-control" id="contactEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="contactMessage" class="form-label">Ujumbe</label>
                                <textarea class="form-control" id="contactMessage" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tuma Ujumbe</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Maelezo ya Mawasiliano</h3>
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="fa-solid fa-location-dot text-primary"></i>
                                </div>
                                <div>
                                    <h5>Anuani</h5>
                                    <p>Sokoine Drive, Dar es Salaam, Tanzania</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="fa-solid fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <h5>Simu</h5>
                                    <p>+255 755 123 456</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="me-3">
                                    <i class="fa-solid fa-envelope text-primary"></i>
                                </div>
                                <div>
                                    <h5>Barua Pepe</h5>
                                    <p>info@netplay.co.tz</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4204335136596!2d39.279258314558!3d-6.688888295168007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4f53bd9d8435%3A0x4b51178133b0dab1!2sSokoine%20Dr%2C%20Dar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1659872345678!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4>NetPlay</h4>
                    <p>Kutoa huduma bora za intaneti na michezo tangu 2015. Lengo letu ni kutoa uzuri wa huduma kwa wateja wetu.</p>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Viungo Vya Haraka</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a onclick="showSection('home')">Home</a></li>
                        <li><a onclick="showSection('about')">Kuhusu Sisi</a></li>
                        <li><a onclick="showSection('services')">Huduma</a></li>
                        <li><a onclick="showSection('contact')">Wasiliana</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Huduma</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Huduma za Intaneti</a></li>
                        <li><a href="#">Huduma za Michezo</a></li>
                        <li><a href="#">Huduma Pamoja</a></li>
                        <li><a href="#">Huduma za Kibiashara</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Tuandikie</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <p class="mt-3">Jiandikishe kwa jarida letu</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Barua pepe yako">
                        <button class="btn btn-primary">Jiandikishe</button>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-4">
            <div class="text-center">
                <p>&copy; 2023 NetPlay. Haki zote zimehifadhiwa.</p>
            </div>
        </div>
    </footer>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Malipo Yamefanikiwa!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa-solid fa-check-circle fa-5x text-success mb-3"></i>
                        <h4>Hongera! Umefanikiwa kujisajili</h4>
                        <p>Umejisajili kwa <span id="successServiceName"></span> kwa <span id="successServiceDuration"></span></p>
                        <p>Kiasi: <span id="successServicePrice"></span></p>
                        <p>Umepokea SMS kwenye simu yako na maelezo ya kutumia huduma yetu.</p>
                        <div class="transaction-details mt-3">
                            <h5>Maelezo ya Malipo:</h5>
                            <p><strong>Namba ya Muamala:</strong> <span id="transactionId"></span></p>
                            <p><strong>Namba ya Simu:</strong> <span id="successPhoneNumber"></span></p>
                            <p><strong>Kiasi:</strong> <span id="successPaymentAmount"></span></p>
                            <p><strong>Muda:</strong> <span id="successServiceTime"></span></p>
                            <p><strong>Tarehe:</strong> <span id="transactionDate"></span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sawa</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let selectedService = '';
        let selectedPrice = 0;
        let selectedDuration = '';
        let selectedDurationValue = 0;
        let isRegistered = false;
        let customerPhone = '';

        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.page-section').forEach(section => {
                section.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(sectionId).classList.add('active');

            // Hide payment form if showing services
            if (sectionId !== 'services') {
                document.getElementById('paymentForm').style.display = 'none';
            }

            // Update navigation active state
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        function selectService(service, basePrice) {
            selectedService = service;
            selectedPrice = basePrice;

            document.getElementById('paymentServiceName').textContent =
                service === 'internet' ? 'Huduma za Intaneti' : 'Huduma za Michezo';

            document.getElementById('subscriptionPlan').textContent =
                service === 'internet' ? 'Huduma za Intaneti' : 'Huduma za Michezo';

            // Show the payment form
            document.getElementById('paymentForm').style.display = 'block';

            // Show appropriate options
            if (service === 'internet') {
                document.getElementById('internetOptions').style.display = 'block';
                document.getElementById('gamingOptions').style.display = 'none';
                // Select 1 day by default for internet
                selectTimeOption(1, 1000, 'Siku 1');
            } else {
                document.getElementById('internetOptions').style.display = 'none';
                document.getElementById('gamingOptions').style.display = 'block';
                // Select 10 minutes by default for gaming
                selectTimeOption(10, 500, 'Dakika 10');
            }

            // Scroll to payment form
            document.getElementById('paymentForm').scrollIntoView({ behavior: 'smooth' });
        }

        function selectTimeOption(duration, price, durationText) {
            selectedDurationValue = duration;
            selectedPrice = price;
            selectedDuration = durationText;

            // Update all time options UI
            document.querySelectorAll('.time-option').forEach(option => {
                option.classList.remove('selected');
            });
            event.target.classList.add('selected');

            // Update the display
            document.getElementById('subscriptionPrice').textContent = 'TZS ' + price.toLocaleString();
        }

        function showPaymentForm() {
            showSection('services');
            document.getElementById('paymentForm').style.display = 'block';
            document.getElementById('paymentForm').scrollIntoView({ behavior: 'smooth' });
        }

        function processPayment() {
            // Basic form validation
            const form = document.getElementById('payment');
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Get customer details
            const customerName = document.getElementById('customerName').value;
            customerPhone = document.getElementById('customerPhone').value;
            const customerEmail = document.getElementById('customerEmail').value;

            // Show loading state
            document.getElementById('payment').style.display = 'none';
            document.getElementById('paymentLoading').style.display = 'block';

            // Generate transaction reference
            const txRef = "NP" + Date.now();

            // Initialize Flutterwave payment
            FlutterwaveCheckout({
                public_key: "FLWPUBK_TEST-8c13e7f951a62d4e4e5e6e5e5e5e5e5e-X", // Test public key
                tx_ref: txRef,
                amount: selectedPrice,
                currency: "TZS",
                country: "TZ",
                payment_options: "card, mobilemoney, ussd",
                customer: {
                    email: customerEmail,
                    phone_number: customerPhone,
                    name: customerName,
                },
                callback: function(response) {
                    // Handle payment response
                    if (response.status === "successful") {
                        // Payment was successful
                        document.getElementById('successServiceName').textContent =
                            selectedService === 'internet' ? 'Huduma za Intaneti' : 'Huduma za Michezo';

                        document.getElementById('successServiceDuration').textContent = selectedDuration;
                        document.getElementById('successServicePrice').textContent = 'TZS ' + selectedPrice.toLocaleString();
                        document.getElementById('successPhoneNumber').textContent = customerPhone;
                        document.getElementById('successPaymentAmount').textContent = 'TZS ' + selectedPrice.toLocaleString();
                        document.getElementById('successServiceTime').textContent = selectedDuration;
                        document.getElementById('transactionId').textContent = response.transaction_id;

                        // Set current date
                        const now = new Date();
                        document.getElementById('transactionDate').textContent = now.toLocaleDateString('sw-TZ', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit'
                        });

                        // Show success modal
                        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();

                        // Reset form
                        document.getElementById('payment').reset();
                        document.getElementById('paymentForm').style.display = 'none';
                        document.getElementById('paymentLoading').style.display = 'none';
                        document.getElementById('payment').style.display = 'block';

                        // Update user status
                        isRegistered = true;
                        document.getElementById('statusDot').classList.remove('not-registered');
                        document.getElementById('statusDot').classList.add('registered');
                        document.getElementById('userStatusText').textContent = 'Registered';

                        // In a real implementation, you would send the payment details to your server
                        // to verify the transaction and activate the service for the customer
                        console.log("Payment successful. Transaction ID:", response.transaction_id);

                        // Simulate sending SMS to customer
                        console.log("SMS sent to", customerPhone, ": Umefanikiwa kulipa TZS", selectedPrice, "kwa", selectedService, "kwa", selectedDuration);

                        // Simulate sending SMS to business
                        console.log("SMS sent to business: Mpokeaji: Umepokea TZS", selectedPrice, "kutoka kwa", customerPhone, "kwa", selectedService);

                    } else {
                        // Payment failed
                        alert("Malipo yameshindikana. Tafadhali jaribu tena.");
                        document.getElementById('paymentLoading').style.display = 'none';
                        document.getElementById('payment').style.display = 'block';
                    }
                },
                onclose: function() {
                    // Payment modal closed
                    document.getElementById('paymentLoading').style.display = 'none';
                    document.getElementById('payment').style.display = 'block';
                },
                customizations: {
                    title: "NetPlay Services",
                    description: "Payment for " + (selectedService === 'internet' ? 'Internet Service' : 'Gaming Service'),
                    logo: "https://via.placeholder.com/100x50/3498db/ffffff?text=NetPlay",
                },
            });
        }
    </script>
</body>
</html>