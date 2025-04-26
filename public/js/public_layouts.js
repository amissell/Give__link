
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
