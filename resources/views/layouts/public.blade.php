<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GiveLink</title>
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Modern Font Family */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
        }

        .preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(16, 185, 129, 0.2);
            border-radius: 50%;
            border-top-color: #10B981;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #10B981;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 8px 15px rgba(16, 185, 129, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
        }

        /* Page Transition Effects */
        .page-transition {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #10B981;
            z-index: 9998;
            transform: translateY(100%);
            transition: transform 0.5s ease-in-out;
        }

        .page-transition.active {
            transform: translateY(0);
        }

        /* Content Animation */
        .content-wrapper {
            opacity: 1;
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        /* Modern Card Styles */
        .modern-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .modern-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Modern Button Styles */
        .btn-modern {
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(16, 185, 129, 0.2);
        }

        .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-modern-primary {
            background-color: #10B981;
            color: white;
        }

        .btn-modern-primary:hover {
            background-color: #0EA472;
        }

        .btn-modern-outline {
            background-color: transparent;
            border: 2px solid #10B981;
            color: #10B981;
        }

        .btn-modern-outline:hover {
            background-color: rgba(16, 185, 129, 0.1);
        }

        /* Modern Section Styles */
        .section-modern {
            padding: 80px 0;
            position: relative;
        }

        .section-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle at 10% 20%, rgba(16, 185, 129, 0.05) 0%, transparent 80%);
            z-index: -1;
        }

        /* Modern Heading Styles */
        .heading-modern {
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .heading-modern::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #10B981;
            border-radius: 3px;
        }

        /* Reveal Animation Classes */
        .reveal-section {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal-section.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-item {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .reveal-item.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* Animation Delays */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(90deg, #10B981, #0EA472);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        /* Glassmorphism Effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body style="background-color:rgb(248, 248, 248); color: #1F2937;">
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <!-- Page Transition Effect -->
    <div class="page-transition"></div>

    <!-- Scroll to Top Button -->
    <div class="scroll-top" id="scrollTop" title="Scroll to Top">
        <i class="fas fa-arrow-up"></i>
    </div>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Page content --}}
    <main class="container mx-auto px-4 py-8 content-wrapper">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

<script>
// Initialize Lucide icons
lucide.createIcons();

// Preloader - Simplified and more reliable
document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');
    
    // Hide preloader after DOM is loaded
    if (preloader) {
        setTimeout(function() {
            preloader.classList.add('hidden');
        }, 500);
    }
});

// Backup preloader removal - in case the event listener fails
window.onload = function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.classList.add('hidden');
    }
};

// Scroll to Top Button
document.addEventListener('DOMContentLoaded', function() {
    const scrollTopButton = document.getElementById('scrollTop');
    if (!scrollTopButton) return; // Safety check
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollTopButton.classList.add('visible');
        } else {
            scrollTopButton.classList.remove('visible');
        }
    });
    
    scrollTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// Page Transition Effects for Navigation - Simplified
document.addEventListener('DOMContentLoaded', function() {
    const pageTransition = document.querySelector('.page-transition');
    if (!pageTransition) return; // Safety check
    
    // Handle internal link clicks for page transitions
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a');
        
        if (link && 
            link.href && 
            link.href.indexOf(window.location.origin) === 0 && 
            !link.href.includes('#') && 
            !e.ctrlKey && 
            !e.metaKey) {
            
            e.preventDefault();
            const targetUrl = link.href;
            
            // Trigger transition animation
            pageTransition.classList.add('active');
            
            setTimeout(function() {
                window.location.href = targetUrl;
            }, 500);
        }
    });
});

// Reveal animations on scroll
document.addEventListener('DOMContentLoaded', function() {
    const revealSections = document.querySelectorAll('.reveal-section');
    const revealItems = document.querySelectorAll('.reveal-item');
    
    const revealOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    };
    
    if (revealSections.length > 0) {
        const sectionObserver = new IntersectionObserver(revealCallback, revealOptions);
        revealSections.forEach(section => {
            sectionObserver.observe(section);
        });
    }
    
    if (revealItems.length > 0) {
        const itemObserver = new IntersectionObserver(revealCallback, revealOptions);
        revealItems.forEach(item => {
            itemObserver.observe(item);
        });
    }
});

// Force hide preloader if it gets stuck
setTimeout(function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.classList.add('hidden');
    }
}, 2000); // Force hide after 2 seconds
</script>

</body>
</html>