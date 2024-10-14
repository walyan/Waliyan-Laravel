<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

    <header id="header">
        <nav>
            <div class="logo">Your Brand</div>
            <div class="menu">
                <a href="#about">About Us</a>
                <a href="#services">Services</a>
                <a href="#gallery">Gallery</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Your Inspiring Headline</h1>
            <p>Engage your visitors with a powerful, compelling message that resonates.</p>
            <a href="#services" class="cta">Learn More</a>
        </div>
    </section>

    <section class="content" id="about">
        <div class="text-content">
            <h2>About Our Company</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula urna euismod, dapibus massa in, tincidunt libero. Suspendisse potenti. Fusce eu nisi nec est facilisis sollicitudin a in felis. Nullam id libero vel erat interdum commodo.</p>
        </div>
        <div class="image-content">
            <img src="about-image.jpg" alt="About Us">
        </div>
    </section>

    <section class="content" id="services">
        
        <div class="features">
            <div class="feature">
                <img  src="asset/image/service1.jpg" alt="Service 1">
                <h3>Sukiman</h3>
                <p>Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget.</p>
            </div>
            <div class="feature">
                <img  src="asset/image/service1.jpg" alt="Service 2">
                <h3>Joko</h3>
                <p>Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget.</p>
            </div>
            <div class="feature">
                <img  src="asset/image/service1.jpg" alt="Service 3">
                <h3>Ruslan</h3>
                <p>Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget.</p>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="gallery1.jpg" alt="Gallery Image 1">
            </div>
            <div class="gallery-item">
                <img src="gallery2.jpg" alt="Gallery Image 2">
            </div>
            <div class="gallery-item">
                <img src="gallery3.jpg" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="gallery4.jpg" alt="Gallery Image 4">
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <h2>Client Testimonials</h2>
        <div class="testimonial">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula urna euismod, dapibus massa in, tincidunt libero."</p>
            <div class="author">- John Doe, CEO of Company</div>
        </div>
        <div class="testimonial">
            <p>"Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget."</p>
            <div class="author">- Jane Smith, Marketing Director</div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            header.classList.toggle('scrolled', window.scrollY > 50);
        });
    </script>

</body>
</html>
