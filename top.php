<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta name="og:image" content="images/assets/ogg.png" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- For Responsive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>iwac ai</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/favicon.png" />
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <!-- Responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body data-spy="scroll" data-target="#one-page-nav" data-offset="120">
    <div class="main-page-wrapper font-gordita">
        <section>
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="i" class="letters-loading"> i </span>
                            <span data-text-preloader="w" class="letters-loading"> w </span>
                            <span data-text-preloader="a" class="letters-loading"> a </span>
                            <span data-text-preloader="c" class="letters-loading"> c </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="theme-main-menu sticky-menu theme-menu-five">
            <div class="d-flex align-items-center justify-content-center">
                <div class="logo">
                    <a href="index.php"><img src="images/iwac-logo.svg" alt="" /></a>
                </div>

                <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
                    <div class="nav-container">
                        <button class="navbar-toggler">
                            <span></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarSupportedContent">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <ul class="navbar-nav main-side-nav font-gordita" id="one-page-nav">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"> Solutions </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="ticket_booking.php"><i
                                                        class="fas fa-ticket-alt icon-style booking-icon"></i> Ticket
                                                    Booking</a></li>
                                            <li><a class="dropdown-item" href="appointment_booking.php"><i
                                                        class="fas fa-calendar-alt icon-style appointment-icon"></i>
                                                    Appointment</a></li>
                                            <li><a class="dropdown-item" href="whatsapp_shopping.php"><i
                                                        class="fab fa-whatsapp icon-style whatsapp-icon"></i> Mobile
                                                    Commerce</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Industries </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="healthcare.php"><i
                                                        class="fas fa-heartbeat icon-style healthcare-icon"></i> Health
                                                    Care</a></li>
                                            <li><a class="dropdown-item" href="entertainment.php"><i
                                                        class="fas fa-film icon-style entertainment-icon"></i>
                                                    Entertainment</a></li>
                                            <li><a class="dropdown-item" href="tourism.php"><i
                                                        class="fas fa-globe icon-style tourism-icon"></i> Tourism</a>
                                            </li>
                                            <li><a class="dropdown-item" href="realstate.php"><i
                                                        class="fas fa-building icon-style realstate-icon"></i> Real
                                                    Estate</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link"> About Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="right-widget">
                    <a href="#" class="demo-button" id="try-iwac-btn">
                        <span>Try iwac</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="iwacModal" class="iwac-modal">
    <div class="iwac-modal-content">
        <button class="iwac-close" id="closeModal">
            <i class="fas fa-times"></i>
        </button>
        <div class="iwac-modal-header">
            <h2>Get in Touch</h2>
        </div>
        <form id="iwacForm">
            <div class="iwac-form-group">
                <label for="name">
                    <i class="fas fa-user iwac-form-icon"></i>Full Name
                </label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
                <div class="iwac-error-message">Please enter your name</div>
            </div>
            <div class="iwac-form-group">
                <label for="name">
                    <i class="fas fa-user iwac-form-icon"></i>Company Name
                </label>
                <input type="text" id="name" name="name" required placeholder="Enter company name">
                <div class="iwac-error-message">Please enter your Company name</div>
            </div>
            
            <div class="iwac-form-group">
                <label for="email">
                    <i class="fas fa-envelope iwac-form-icon"></i> Official Email Address
                </label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
                <div class="iwac-error-message">Please enter a valid email address</div>
            </div>
            
            <div class="iwac-form-group">
                <label for="mobile">
                    <i class="fas fa-phone iwac-form-icon"></i>Mobile Number
                </label>
                <input type="tel" id="mobile" name="mobile" required placeholder="Enter your mobile number">
                <div class="iwac-error-message">Please enter your mobile number</div>
            </div>
            
            <div class="iwac-form-group">
                <label for="message">
                    <i class="fas fa-comment iwac-form-icon"></i>Message
                </label>
                <textarea id="message" name="message" rows="4" required placeholder="How can we help you?"></textarea>
                <div class="iwac-error-message">Please enter your message</div>
            </div>
            
            <button type="submit" class="iwac-submit-btn">
                <i class="fas fa-paper-plane"></i>
                Send Message
            </button>
        </form>
    </div>
</div>

<!-- Add this before the closing </body> tag -->
<script>
    document.getElementById('try-iwac-btn').addEventListener('click', function(event) {
        event.preventDefault();
        const modal = document.getElementById('iwacModal');
        modal.style.display = 'block';
        setTimeout(() => modal.classList.add('show'), 10);
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        const modal = document.getElementById('iwacModal');
        modal.classList.remove('show');
        setTimeout(() => modal.style.display = 'none', 300);
    });

    window.onclick = function(event) {
        const modal = document.getElementById('iwacModal');
        if (event.target == modal) {
            modal.classList.remove('show');
            setTimeout(() => modal.style.display = 'none', 300);
        }
    };

    document.getElementById('iwacForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Reset previous errors
        const errorMessages = document.querySelectorAll('.iwac-error-message');
        const inputs = this.querySelectorAll('input, textarea');
        errorMessages.forEach(msg => msg.classList.remove('show'));
        inputs.forEach(input => input.classList.remove('iwac-error'));
        
        let isValid = true;
        
        // Validate each field
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('iwac-error');
                input.nextElementSibling.classList.add('show');
                isValid = false;
            }
            
            // Email validation
            if (input.type === 'email' && input.value.trim()) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(input.value)) {
                    input.classList.add('iwac-error');
                    input.nextElementSibling.classList.add('show');
                    isValid = false;
                }
            }
            
            // Mobile validation (optional)
            if (input.type === 'tel' && input.value.trim()) {
                const phonePattern = /^\d{10}$/;  // Basic 10-digit validation
                if (!phonePattern.test(input.value.replace(/\D/g, ''))) {
                    input.classList.add('iwac-error');
                    input.nextElementSibling.textContent = 'Please enter a valid 10-digit mobile number';
                    input.nextElementSibling.classList.add('show');
                    isValid = false;
                }
            }
        });
        
        if (isValid) {
            // Here you would typically send the form data to your server
            alert('Thank you! Your message has been sent successfully.');
            document.getElementById('closeModal').click();
            this.reset();
        }
    });
</script>

        <!-- JavaScript for Modal -->
        <script>
        document.getElementById('try-iwac-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('iwacModal').style.display = 'block';
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('iwacModal').style.display = 'none';
        });

        window.onclick = function(event) {
            const modal = document.getElementById('iwacModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        };
        </script>

        <!-- Modal Styling -->
        <style>
         .iwac-modal {
        display: none;
        position: absolute;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .iwac-modal.show {
        opacity: 1;
    }

    .iwac-modal-content {
        background-color: #ffffff;
        margin: 5% auto;
        padding: 2.5rem;
        width: 90%;
        max-width: 600px;
        border-radius: 16px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        transform: translateY(-50px);
        opacity: 0;
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    .iwac-modal.show .iwac-modal-content {
        transform: translateY(0);
        opacity: 1;
    }

    .iwac-modal-header {
        text-align: center;
        margin-bottom: 2rem;
        position: relative;
    }

    .iwac-modal-header h2 {
        color: #1f2937;
        font-size: 1.875rem;
        font-weight: 600;
        margin: 0;
    }

    .iwac-close {
        position: absolute;
        right: -1rem;
        top: -1rem;
        width: 2.5rem;
        height: 2.5rem;
        background-color: #f3f4f6;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
        border: none;
    }

    .iwac-close:hover {
        background-color: #e5e7eb;
        transform: rotate(90deg);
    }

    .iwac-form-group {
        margin-bottom: 1.5rem;
    }

    .iwac-form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #374151;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .iwac-form-group input,
    .iwac-form-group textarea {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.2s;
        background-color: #f9fafb;
    }

    .iwac-form-group input:focus,
    .iwac-form-group textarea:focus {
        outline: none;
        border-color: #2563eb;
        background-color: #ffffff;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    .iwac-submit-btn {
        width: 100%;
        padding: 0.875rem;
        background-color: #2e9b57;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .iwac-submit-btn:hover {
        background-color: #146131;
        transform: translateY(-1px);
    }

    .iwac-form-icon {
        margin-right: 0.5rem;
        color: #6b7280;
    }

    @keyframes iwac-shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }

    .iwac-error {
        border-color: #dc2626 !important;
        animation: iwac-shake 0.2s ease-in-out;
    }

    .iwac-error-message {
        color: #dc2626;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        display: none;
    }

    .iwac-error-message.show {
        display: block;
    }
        </style>
    </div>