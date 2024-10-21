<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <header id="header" class="fixed w-full bg-black text-white">
        <nav class="container mx-auto flex justify-between items-center py-4 px-8">
            <div class="logo text-2xl font-bold">Your Brand</div>
            <div class="menu space-x-4">
                <a href="#about" class="hover:text-gray-300">About Us</a>
                <a href="#services" class="hover:text-gray-300">Services</a>
                <a href="#gallery" class="hover:text-gray-300">Gallery</a>
                <a href="#testimonials" class="hover:text-gray-300">Testimonials</a>
                <a href="#contact" class="hover:text-gray-300">Contact</a>
            </div>
        </nav>
    </header>

    <section class="hero min-h-screen flex items-center justify-center bg-gray-500">
        <div class="text-center text-white space-y-4">
            <h1 class="text-4xl font-bold">Your Inspiring Headline</h1>
            <p class="text-lg">Engage your visitors with a powerful, compelling message that resonates.</p>
            <a href="#services" class="bg-orange-500 text-white py-2 px-4 rounded-lg hover:bg-orange-600 transition">Learn More</a>
        </div>
    </section>

    <section class="content py-16" id="about">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="text-content space-y-4">
                <h2 class="text-3xl font-bold">About Our Company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula urna euismod, dapibus massa in, tincidunt libero. Suspendisse potenti. Fusce eu nisi nec est facilisis sollicitudin a in felis. Nullam id libero vel erat interdum commodo.</p>
            </div>
            <div class="image-content">
                <img src="about-image.jpg" alt="About Us" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <section class="content py-16 bg-gray-100" id="services">
        <div class="container mx-auto">
            <div class="features grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="feature text-center p-6 bg-white shadow-lg rounded-lg">
                    <img src="asset/image/service1.jpg" alt="Service 1" class="w-full h-32 object-cover rounded-t-lg">
                    <h3 class="text-xl font-bold mt-4">Sukiman</h3>
                    <p class="text-gray-600">Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget.</p>
                </div>
                <div class="feature text-center p-6 bg-white shadow-lg rounded-lg">
                    <img src="asset/image/service1.jpg" alt="Service 2" class="w-full h-32 object-cover rounded-t-lg">
                    <h3 class="text-xl font-bold mt-4">Joko</h3>
                    <p class="text-gray-600">Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget.</p>
                </div>
                <div class="feature text-center p-6 bg-white shadow-lg rounded-lg">
                    <img src="asset/image/service1.jpg" alt="Service 3" class="w-full h-32 object-cover rounded-t-lg">
                    <h3 class="text-xl font-bold mt-4">Ruslan</h3>
                    <p class="text-gray-600">Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery py-16 bg-gray-200" id="gallery">
        <h2 class="text-center text-3xl font-bold mb-8">Gallery</h2>
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="gallery-item">
                <img src="gallery1.jpg" alt="Gallery Image 1" class="w-full h-40 object-cover rounded-lg">
            </div>
            <div class="gallery-item">
                <img src="gallery2.jpg" alt="Gallery Image 2" class="w-full h-40 object-cover rounded-lg">
            </div>
            <div class="gallery-item">
                <img src="gallery3.jpg" alt="Gallery Image 3" class="w-full h-40 object-cover rounded-lg">
            </div>
            <div class="gallery-item">
                <img src="gallery4.jpg" alt="Gallery Image 4" class="w-full h-40 object-cover rounded-lg">
            </div>
        </div>
    </section>

    <section class="testimonials py-16 bg-white" id="testimonials">
        <h2 class="text-center text-3xl font-bold mb-8">Client Testimonials</h2>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="testimonial p-6 bg-gray-100 rounded-lg shadow-lg">
                <p class="text-gray-700">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula urna euismod, dapibus massa in, tincidunt libero."</p>
                <div class="author mt-4 text-gray-600">- John Doe, CEO of Company</div>
            </div>
            <div class="testimonial p-6 bg-gray-100 rounded-lg shadow-lg">
                <p class="text-gray-700">"Quisque nec lorem at purus congue viverra. Donec suscipit libero justo, ut aliquam elit malesuada eget."</p>
                <div class="author mt-4 text-gray-600">- Jane Smith, Marketing Director</div>
            </div>
        </div>
    </section>

    <footer class="py-8 bg-gray-800 text-white text-center">
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            header.classList.toggle('bg-black', window.scrollY > 50);
        });
    </script>

</body>
</html>
