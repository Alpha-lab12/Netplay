<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetPlay - Huduma za Intaneti na Michezo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .visitor-counter {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .counter-number {
            font-size: 4rem;
            font-weight: bold;
            margin: 20px 0;
        }

        .counter-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            color: #333;
        }

        .counter-card i {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .recent-visitors {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 30px;
        }

        .visitor-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .visitor-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 15px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .stat-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary);
            margin: 10px 0;
        }

        .payment-option {
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin: 10px 0;
            cursor: pointer;
            transition: all 0.3s;
        }

        .payment-option:hover, .payment-option.selected {
            border-color: var(--secondary);
            background-color: #f8f9fa;
        }

        .payment-option.selected {
            background-color: #e3f2fd;
        }

        .payment-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .mpesa { color: #00A650; }
        .tigopesa { color: #FF0000; }
        .airtelmoney { color: #E20074; }
        .halopesa { color: #0033A0; }
        .paypal { color: #003087; }
        .card { color: #FF5A00; }

        .payment-details {
            display: none;
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }

        .simulated-phone {
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 20px;
            margin: 20px auto;
            max-width: 300px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .simulated-phone-header {
            background-color: var(--primary);
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }

        .simulated-phone-content {
            padding: 15px;
        }

        .simulated-input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }

        .simulated-button {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        .tab-content {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }

        .nav-tabs .nav-link.active {
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
            font-weight: 600;
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
                        <a class="nav-link" onclick="showSection('visitors')">Watalii</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="showSection('contact')">Contact</a>
                    </li>
                    <li class="nav-item">
                        <span class="user-status">
                            <span class="status-dot not-registered" id="statusDot"></span>
                            <span id="userStatusText">Haijasajiliwa</span>
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
                <h1 class="display-3 fw-bold mb-4">Huduma Bora za Intaneti na Michezo</h1>
                <p class="lead mb-4">Pata intaneti ya kasi na huduma za michezo bora kwa bei nafuu</p>
                <button class="btn btn-primary btn-lg me-2" onclick="showSection('services')">Angalia Huduma</button>
                <button class="btn btn-outline-light btn-lg" onclick="showPaymentForm()">Lipa Sasa</button>
            </div>
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <i class="fa-solid fa-bolt fa-3x text-primary mb-3"></i>
                    <h3>Intaneti ya Kasi</h3>
                    <p>Furahia intaneti ya kasi ya kutazama video, kuvinjari, na kupakua</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fa-solid fa-gamepad fa-3x text-primary mb-3"></i>
                    <h3>Michezo Bora</h3>
                    <p>Uzoefu wa michezo bila usumbufu na seva maalum na vifaa vya hali ya juu</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <i class="fa-solid fa-headset fa-3x text-primary mb-3"></i>
                    <h3>Usaidizi 24/7</h3>
                    <p>Timu yetu ya wataalam iko tayari kukusaidia masaa yote</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="page-section py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center section-title">Kuhusu Sisi</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Tunatoa Huduma Bora za Intaneti na Michezo</h3>
                    <p>NetPlay ilianzishwa mwaka 2015 kwa lengo la kutoa huduma bora za intaneti na michezo kwa jamii yetu. Tunaelewa mahitaji ya watumiaji wa kawaida na wachezaji wa michezo.</p>
                    <p>Miundombinu yetu ya kisasa inahakikisha uzoefu mwepesi wa intaneti na muunganisho wa kasi kwa mahitaji yako yote. Iwe unafanya kazi nyumbani, unatazama video, au unashindana kwenye michezo ya mtandaoni, tumekukabili.</p>
                    <div class="d-flex">
                        <div class="me-4">
                            <h4>5000+</h4>
                            <p>Wateja Waliofurahi</p>
                        </div>
                        <div class="me-4">
                            <h4>24/7</h4>
                            <p>Usaidizi</p>
                        </div>
                        <div>
                            <h4>10+</h4>
                            <p>Miaka ya Uzoefu</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1600132806372-b5bfedce21ca?ixlib=rb-4.0.3" alt="Kuhusu Sisi" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="page-section py-5">
        <div class="container py-5">
            <h2 class="text-center section-title">Huduma Zetu</h2>
            <p class="text-center lead mb-5">Chagua miongoni mwa huduma zilizowekwa kwa mahitaji yako</p>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="service-card card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <h3>Huduma za Intaneti</h3>
                            <p>Intaneti ya kasi ya kuvinjari, kutazama video, na kufanya kazi nyumbani</p>
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h4>Huduma za Intaneti</h4>
                                    <div class="price">TZS 1,000<span>/siku</span></div>
                                </div>
                                <ul class="list-unstyled pricing-features">
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Intaneti ya Kasi</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Upataji 24 Masaa</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Data Isiyo na Kikomo</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Usaidizi 24/7</li>
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
                            <h3>Huduma za Michezo</h3>
                            <p>Michezo ya hali ya juu na vifaa bora na muunganisho ulioboreshwa</p>
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <h4>Huduma za Michezo</h4>
                                    <div class="price">TZS 500<span>/dakika 10</span></div>
                                </div>
                                <ul class="list-unstyled pricing-features">
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Uzoefu Bora wa Michezo</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Kompyuta Za Michezo</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Uepesi wa Mtandao</li>
                                    <li><i class="fa-solid fa-check text-success me-2"></i>Michezo Mingi ya Kuchagua</li>
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

                    <h5 class="mb-3">Chagua Mfumo wa Malipo:</h5>
                    <ul class="nav nav-tabs" id="paymentTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab">Mitandao ya Simu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="card-tab" data-bs-toggle="tab" data-bs-target="#card" type="button" role="tab">Kadi ya Benki</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="paypal-tab" data-bs-toggle="tab" data-bs-target="#paypal" type="button" role="tab">PayPal</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="paymentTabContent">
                        <div class="tab-pane fade show active" id="mobile" role="tabpanel">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="payment-option" onclick="selectPaymentMethod('mpesa')">
                                        <div class="payment-icon mpesa">
                                            <i class="fa-solid fa-money-bill-wave"></i>
                                        </div>
                                        <h5>M-Pesa</h5>
                                        <p>Lipa kwa kutumia M-Pesa</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-option" onclick="selectPaymentMethod('tigopesa')">
                                        <div class="payment-icon tigopesa">
                                            <i class="fa-solid fa-mobile-alt"></i>
                                        </div>
                                        <h5>Tigo Pesa</h5>
                                        <p>Lipa kwa kutumia Tigo Pesa</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-option" onclick="selectPaymentMethod('airtelmoney')">
                                        <div class="payment-icon airtelmoney">
                                            <i class="fa-solid fa-wallet"></i>
                                        </div>
                                        <h5>Airtel Money</h5>
                                        <p>Lipa kwa kutumia Airtel Money</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-option" onclick="selectPaymentMethod('halopesa')">
                                        <div class="payment-icon halopesa">
                                            <i class="fa-solid fa-money-check"></i>
                                        </div>
                                        <h5>Halopesa</h5>
                                        <p>Lipa kwa kutumia Halopesa</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="card" role="tabpanel">
                            <div class="mt-3">
                                <div class="payment-option" onclick="selectPaymentMethod('card')">
                                    <div class="payment-icon card">
                                        <i class="fa-solid fa-credit-card"></i>
                                    </div>
                                    <h5>Kadi ya Benki</h5>
                                    <p>Lipa kwa kutumia kadi yako ya benki</p>
                                </div>

                                <div id="cardDetails" class="payment-details">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cardNumber" class="form-label">Nambari ya Kadi</label>
                                            <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="expiryDate" class="form-label">Tarehe ya Mwisho</label>
                                            <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cvv" class="form-label">Nambari ya CVV</label>
                                            <input type="text" class="form-control" id="cvv" placeholder="123">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="cardName" class="form-label">Jina kwenye Kadi</label>
                                            <input type="text" class="form-control" id="cardName" placeholder="Jina linaloonekana kwenye kadi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="paypal" role="tabpanel">
                            <div class="mt-3">
                                <div class="payment-option" onclick="selectPaymentMethod('paypal')">
                                    <div class="payment-icon paypal">
                                        <i class="fa-brands fa-paypal"></i>
                                    </div>
                                    <h5>PayPal</h5>
                                    <p>Lipa kwa kutumia PayPal</p>
                                </div>

                                <div id="paypalDetails" class="payment-details">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="paypalEmail" class="form-label">Barua pepe ya PayPal</label>
                                            <input type="email" class="form-control" id="paypalEmail" placeholder="mfano@email.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="mobilePaymentDetails" class="payment-details">
                        <h5 class="mb-3">Ingiza Maelezo ya Malipo:</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="paymentPhone" class="form-label">Nambari ya Simu ya Malipo</label>
                                <input type="tel" class="form-control" id="paymentPhone" placeholder="Nambari ya simu ya kutumia malipo">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="confirmName" class="form-label">Thibitisha Jina</label>
                                <input type="text" class="form-control" id="confirmName" placeholder="Jina linalofanana na kwenye akaunti">
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-success btn-lg" onclick="processPayment()">Lipa Sasa</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Visitors Section -->
    <section id="visitors" class="page-section">
        <div class="visitor-counter">
            <div class="container">
                <h2 class="section-title text-white">Watalii Wetu</h2>
                <p class="lead mb-4">Angalia idadi ya wateja wetu waliofika kwenye tovuti yetu</p>

                <div class="counter-number" id="totalVisitors">0</div>
                <p>Jumla ya watalii waliofika</p>
            </div>
        </div>

        <div class="container py-5">
            <div class="stats-grid">
                <div class="stat-item">
                    <i class="fa-solid fa-users fa-2x"></i>
                    <h3>Watalii Leo</h3>
                    <div class="stat-number" id="todayVisitors">0</div>
                </div>
                <div class="stat-item">
                    <i class="fa-solid fa-calendar-week fa-2x"></i>
                    <h3>Watalii Wiki Hii</h3>
                    <div class="stat-number" id="weekVisitors">0</div>
                </div>
                <div class="stat-item">
                    <i class="fa-solid fa-calendar fa-2x"></i>
                    <h3>Watalii Mwezi Huu</h3>
                    <div class="stat-number" id="monthVisitors">0</div>
                </div>
            </div>

            <div class="recent-visitors">
                <h3 class="mb-4">Watalii wa Hivi Karibuni</h3>
                <div id="recentVisitorsList">
                    <!-- Recent visitors will be added here dynamically -->
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
                        <li><a onclick="showSection('visitors')">Watalii</a></li>
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
                <p>Watalii waliofika: <span id="footerVisitorCount">0</span></p>
            </div>
        </div>
    </footer>

    <!-- Payment Simulation Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="paymentModalTitle">Malipo ya <span id="modalServiceName"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="mobilePaymentSimulation">
                        <p>Tuma <strong id="paymentAmountSimulation">TZS 1,000</strong> kwa <strong id="paymentRecipientSimulation">NetPlay Services</strong></p>

                        <div class="simulated-phone">
                            <div class="simulated-phone-header">
                                <h5 id="simulatedProvider">M-Pesa</h5>
                            </div>
                            <div class="simulated-phone-content">
                                <p>Ingiza PIN yako kudhibitisha malipo</p>
                                <input type="password" class="simulated-input" id="simulatedPin" placeholder="Namba ya siri 4" maxlength="4">
                                <div>
                                    <button class="simulated-button" onclick="cancelPayment()">Futa</button>
                                    <button class="simulated-button" onclick="confirmPayment()">Wasilisha</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="cardPaymentSimulation" style="display: none;">
                        <div class="alert alert-info">
                            <i class="fa-solid fa-info-circle"></i> Malipo ya kadi yanachakatwa kwa usalama kupitia mfumo wa benki yako.
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-credit-card fa-5x text-primary mb-3"></i>
                            <p>Unachanjia <strong id="cardPaymentAmount">TZS 1,000</strong> kwa NetPlay Services</p>
                            <p>Kadi: **** **** **** <span id="cardLastFour">3456</span></p>
                        </div>
                    </div>

                    <div id="paypalPaymentSimulation" style="display: none;">
                        <div class="alert alert-info">
                            <i class="fa-solid fa-info-circle"></i> Utaelekezwa kwenye tovuti ya PayPal kukamilisha malipo yako.
                        </div>
                        <div class="text-center">
                            <i class="fa-brands fa-paypal fa-5x text-primary mb-3"></i>
                            <p>Unachanjia <strong id="paypalPaymentAmount">TZS 1,000</strong> kwa NetPlay Services</p>
                            <p>Akaunti: <span id="paypalAccountEmail">mfano@email.com</span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="cancelPayment()">Funga</button>
                    <button type="button" class="btn btn-primary" onclick="confirmPayment()" id="confirmPaymentBtn">Thibitisha Malipo</button>
                </div>
            </div>
        </div>
    </div>

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
                        <div class="alert alert-info mt-3">
                            <strong>Simu:</strong> <span id="successPhoneNumber"></span><br>
                            <strong>Kiasi:</strong> <span id="successPaymentAmount"></span><br>
                            <strong>Muda:</strong> <span id="successServiceTime"></span><br>
                            <strong>Mfumo:</strong> <span id="successPaymentMethod"></span>
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
        let selectedPaymentMethod = '';
        let isRegistered = false;

        // Visitor tracking functionality
        let totalVisitors = localStorage.getItem('totalVisitors') ? parseInt(localStorage.getItem('totalVisitors')) : 0;
        let todayVisitors = localStorage.getItem('todayVisitors') ? parseInt(localStorage.getItem('todayVisitors')) : 0;
        let weekVisitors = localStorage.getItem('weekVisitors') ? parseInt(localStorage.getItem('weekVisitors')) : 0;
        let monthVisitors = localStorage.getItem('monthVisitors') ? parseInt(localStorage.getItem('monthVisitors')) : 0;
        let lastVisitDate = localStorage.getItem('lastVisitDate') ? new Date(localStorage.getItem('lastVisitDate')) : null;

        // Recent visitors data
        let recentVisitors = JSON.parse(localStorage.getItem('recentVisitors')) || [];

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

            // If showing visitors section, update the counter
            if (sectionId === 'visitors') {
                updateVisitorCounter();
            }
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

        function selectPaymentMethod(method) {
            selectedPaymentMethod = method;

            // Update all payment options UI
            document.querySelectorAll('.payment-option').forEach(option => {
                option.classList.remove('selected');
            });
            event.target.classList.add('selected');

            // Show appropriate payment details
            if (['mpesa', 'tigopesa', 'airtelmoney', 'halopesa'].includes(method)) {
                document.getElementById('mobilePaymentDetails').style.display = 'block';
                document.getElementById('cardDetails').style.display = 'none';
                document.getElementById('paypalDetails').style.display = 'none';

                // Set payment phone to customer phone if available
                const customerPhone = document.getElementById('customerPhone').value;
                if (customerPhone) {
                    document.getElementById('paymentPhone').value = customerPhone;
                }

                // Set confirm name to customer name if available
                const customerName = document.getElementById('customerName').value;
                if (customerName) {
                    document.getElementById('confirmName').value = customerName;
                }
            } else if (method === 'card') {
                document.getElementById('mobilePaymentDetails').style.display = 'none';
                document.getElementById('cardDetails').style.display = 'block';
                document.getElementById('paypalDetails').style.display = 'none';
            } else if (method === 'paypal') {
                document.getElementById('mobilePaymentDetails').style.display = 'none';
                document.getElementById('cardDetails').style.display = 'none';
                document.getElementById('paypalDetails').style.display = 'block';

                // Set PayPal email to customer email if available
                const customerEmail = document.getElementById('customerEmail').value;
                if (customerEmail) {
                    document.getElementById('paypalEmail').value = customerEmail;
                }
            }
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
            const customerPhone = document.getElementById('customerPhone').value;
            const customerEmail = document.getElementById('customerEmail').value;

            // Verify payment method is selected
            if (!selectedPaymentMethod) {
                alert("Tafadhali chagua mfumo wa malipo.");
                return;
            }

            // Verify details based on payment method
            if (['mpesa', 'tigopesa', 'airtelmoney', 'halopesa'].includes(selectedPaymentMethod)) {
                const paymentPhone = document.getElementById('paymentPhone').value;
                const confirmName = document.getElementById('confirmName').value;

                if (!paymentPhone) {
                    alert("Tafadhali weka nambari ya simu ya malipo.");
                    return;
                }

                // Verify that names match
                if (customerName !== confirmName) {
                    alert("Tafadhali hakikisha jina lako unaloweka linafanana na jina lako kwenye akaunti yako ya malipo.");
                    return;
                }

                // Show mobile payment simulation
                document.getElementById('modalServiceName').textContent =
                    selectedService === 'internet' ? 'Huduma za Intaneti' : 'Huduma za Michezo';
                document.getElementById('paymentAmountSimulation').textContent = 'TZS ' + selectedPrice.toLocaleString();

                let providerName = '';
                switch(selectedPaymentMethod) {
                    case 'mpesa':
                        providerName = 'M-Pesa';
                        break;
                    case 'tigopesa':
                        providerName = 'Tigo Pesa';
                        break;
                    case 'airtelmoney':
                        providerName = 'Airtel Money';
                        break;
                    case 'halopesa':
                        providerName = 'Halopesa';
                        break;
                }
                document.getElementById('simulatedProvider').textContent = providerName;

                document.getElementById('mobilePaymentSimulation').style.display = 'block';
                document.getElementById('cardPaymentSimulation').style.display = 'none';
                document.getElementById('paypalPaymentSimulation').style.display = 'none';
                document.getElementById('confirmPaymentBtn').textContent = 'Thibitisha Malipo';

            } else if (selectedPaymentMethod === 'card') {
                const cardNumber = document.getElementById('cardNumber').value;
                const expiryDate = document.getElementById('expiryDate').value;
                const cvv = document.getElementById('cvv').value;
                const cardName = document.getElementById('cardName').value;

                if (!cardNumber || !expiryDate || !cvv || !cardName) {
                    alert("Tafadhali jaza taarifa zote za kadi yako.");
                    return;
                }

                // Show card payment simulation
                document.getElementById('cardPaymentAmount').textContent = 'TZS ' + selectedPrice.toLocaleString();
                document.getElementById('cardLastFour').textContent = cardNumber.slice(-4);

                document.getElementById('mobilePaymentSimulation').style.display = 'none';
                document.getElementById('cardPaymentSimulation').style.display = 'block';
                document.getElementById('paypalPaymentSimulation').style.display = 'none';
                document.getElementById('confirmPaymentBtn').textContent = 'Chanjia Sasa';

            } else if (selectedPaymentMethod === 'paypal') {
                const paypalEmail = document.getElementById('paypalEmail').value;

                if (!paypalEmail) {
                    alert("Tafadhali weka barua pepe yako ya PayPal.");
                    return;
                }

                // Show PayPal payment simulation
                document.getElementById('paypalPaymentAmount').textContent = 'TZS ' + selectedPrice.toLocaleString();
                document.getElementById('paypalAccountEmail').textContent = paypalEmail;

                document.getElementById('mobilePaymentSimulation').style.display = 'none';
                document.getElementById('cardPaymentSimulation').style.display = 'none';
                document.getElementById('paypalPaymentSimulation').style.display = 'block';
                document.getElementById('confirmPaymentBtn').textContent = 'Endelea kwa PayPal';
            }

            // Show payment modal
            const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
            paymentModal.show();
        }

        function confirmPayment() {
            // Close payment modal
            const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            paymentModal.hide();

            // Simulate payment processing
            setTimeout(() => {
                // Get customer details
                const customerName = document.getElementById('customerName').value;
                const customerPhone = document.getElementById('customerPhone').value;

                // Payment successful
                document.getElementById('successServiceName').textContent =
                    selectedService === 'internet' ? 'Huduma za Intaneti' : 'Huduma za Michezo';

                document.getElementById('successServiceDuration').textContent = selectedDuration;
                document.getElementById('successServicePrice').textContent = 'TZS ' + selectedPrice.toLocaleString();
                document.getElementById('successPhoneNumber').textContent = customerPhone;
                document.getElementById('successPaymentAmount').textContent = 'TZS ' + selectedPrice.toLocaleString();
                document.getElementById('successServiceTime').textContent = selectedDuration;

                // Set payment method name
                let paymentMethodName = '';
                switch(selectedPaymentMethod) {
                    case 'mpesa':
                        paymentMethodName = 'M-Pesa';
                        break;
                    case 'tigopesa':
                        paymentMethodName = 'Tigo Pesa';
                        break;
                    case 'airtelmoney':
                        paymentMethodName = 'Airtel Money';
                        break;
                    case 'halopesa':
                        paymentMethodName = 'Halopesa';
                        break;
                    case 'card':
                        paymentMethodName = 'Kadi ya Benki';
                        break;
                    case 'paypal':
                        paymentMethodName = 'PayPal';
                        break;
                }
                document.getElementById('successPaymentMethod').textContent = paymentMethodName;

                // Show success modal
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();

                // Reset forms
                document.getElementById('payment').reset();
                document.getElementById('paymentForm').style.display = 'none';

                // Update user status
                isRegistered = true;
                document.getElementById('statusDot').classList.remove('not-registered');
                document.getElementById('statusDot').classList.add('registered');
                document.getElementById('userStatusText').textContent = 'Imesajiliwa';

                // Simulate sending SMS to customer
                console.log("SMS sent to", customerPhone, ": Umefanikiwa kulipa TZS", selectedPrice, "kwa", selectedService, "kwa", selectedDuration, "kwa kutumia", paymentMethodName);

                // Simulate sending SMS to business
                console.log("SMS sent to business: Mpokeaji: Umepokea TZS", selectedPrice, "kutoka kwa", customerName, "(", customerPhone, ") kwa", selectedService, "kwa kutumia", paymentMethodName);

            }, 2000);
        }

        function cancelPayment() {
            const paymentModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
            paymentModal.hide();
            document.getElementById('simulatedPin').value = '';
        }

        // Visitor counter functions
        function trackVisitor() {
            const now = new Date();
            const today = now.toDateString();

            // Check if this is a new day
            if (!lastVisitDate || lastVisitDate.toDateString() !== today) {
                // Reset today's counter if it's a new day
                todayVisitors = 0;

                // Check if it's a new week (Monday)
                if (now.getDay() === 1) {
                    weekVisitors = 0;
                }

                // Check if it's a new month
                if (now.getDate() === 1) {
                    monthVisitors = 0;
                }
            }

            // Increment counters
            totalVisitors++;
            todayVisitors++;
            weekVisitors++;
            monthVisitors++;

            // Update last visit date
            lastVisitDate = now;

            // Add to recent visitors
            const visitorName = "Mgeni " + Math.floor(Math.random() * 1000);
            const visitorTime = now.toLocaleTimeString();

            recentVisitors.unshift({
                name: visitorName,
                time: visitorTime,
                date: today
            });

            // Keep only the 10 most recent visitors
            if (recentVisitors.length > 10) {
                recentVisitors = recentVisitors.slice(0, 10);
            }

            // Save to localStorage
            localStorage.setItem('totalVisitors', totalVisitors);
            localStorage.setItem('todayVisitors', todayVisitors);
            localStorage.setItem('weekVisitors', weekVisitors);
            localStorage.setItem('monthVisitors', monthVisitors);
            localStorage.setItem('lastVisitDate', lastVisitDate);
            localStorage.setItem('recentVisitors', JSON.stringify(recentVisitors));

            // Update the counter display
            updateVisitorCounter();
        }

        function updateVisitorCounter() {
            document.getElementById('totalVisitors').textContent = totalVisitors.toLocaleString();
            document.getElementById('todayVisitors').textContent = todayVisitors.toLocaleString();
            document.getElementById('weekVisitors').textContent = weekVisitors.toLocaleString();
            document.getElementById('monthVisitors').textContent = monthVisitors.toLocaleString();
            document.getElementById('footerVisitorCount').textContent = totalVisitors.toLocaleString();

            // Update recent visitors list
            const recentVisitorsList = document.getElementById('recentVisitorsList');
            recentVisitorsList.innerHTML = '';

            recentVisitors.forEach(visitor => {
                const visitorItem = document.createElement('div');
                visitorItem.className = 'visitor-item';

                // Generate a random color based on the visitor's name
                const colors = ['#3498db', '#e74c3c', '#2ecc71', '#f39c12', '#9b59b6', '#1abc9c'];
                const colorIndex = visitor.name.length % colors.length;

                visitorItem.innerHTML = `
                    <div class="visitor-avatar" style="background-color: ${colors[colorIndex]}">
                        ${visitor.name.charAt(0)}
                    </div>
                    <div>
                        <div>${visitor.name}</div>
                        <small class="text-muted">${visitor.date} - ${visitor.time}</small>
                    </div>
                `;

                recentVisitorsList.appendChild(visitorItem);
            });
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // Track a new visitor
            trackVisitor();

            // Show home section by default
            showSection('home');
        });
    </script>
</body>
</html>