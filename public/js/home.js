
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    const counterElements = document.querySelectorAll('.counter');
    const counterOptions = {
        threshold: 0.5
    };
    
    const counterCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target'));
                const duration = 2000; // ms
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    if (current < target) {
                        if (target >= 1000000) {
                            // Format as $X.XM for millions
                            entry.target.textContent = '$' + (current / 1000000).toFixed(1) + 'M+';
                        } else if (target >= 1000) {
                            // Format as XK+ for thousands
                            entry.target.textContent = (current / 1000).toFixed(0) + 'K+';
                        } else {
                            entry.target.textContent = Math.ceil(current) + '+';
                        }
                        current += increment;
                        requestAnimationFrame(updateCounter);
                    } else {
                        if (target >= 1000000) {
                            entry.target.textContent = '$' + (target / 1000000).toFixed(1) + 'M+';
                        } else if (target >= 1000) {
                            entry.target.textContent = (target / 1000).toFixed(0) + 'K+';
                        } else {
                            entry.target.textContent = target + '+';
                        }
                    }
                };
                
                updateCounter();
                observer.unobserve(entry.target);
            }
        });
    };
    
    if (counterElements.length > 0) {
        const counterObserver = new IntersectionObserver(counterCallback, counterOptions);
        counterElements.forEach(counter => {
            counterObserver.observe(counter);
        });
    }
});