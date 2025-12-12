// Initialize Lucide icons
lucide.createIcons();

// Modal functionality
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');
const quoteModal = document.getElementById('quoteModal');

if (openModalBtn && closeModalBtn && quoteModal) {
    openModalBtn.addEventListener('click', () => {
        quoteModal.classList.remove('hidden');
    });
    
    closeModalBtn.addEventListener('click', () => {
        quoteModal.classList.add('hidden');
    });
    
    quoteModal.addEventListener('click', (e) => {
        if (e.target === quoteModal) {
            quoteModal.classList.add('hidden');
        }
    });
}

// Mobile menu toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
}

// Header scroll effect
window.addEventListener('scroll', function () {
    const header = document.querySelector('.header-main');
    if (header) {
        if (window.scrollY > 100) {
            header.classList.add('shadow-lg');
        } else {
            header.classList.remove('shadow-lg');
        }
    }
});