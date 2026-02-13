// Инициализация мобильного меню
function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenuContent = document.getElementById('mobileMenuContent');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');

    console.log('Mobile menu init:', {
        toggle: !!mobileMenuToggle,
        content: !!mobileMenuContent,
        overlay: !!mobileMenuOverlay
    });

    if (mobileMenuToggle && mobileMenuContent && mobileMenuOverlay) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            console.log('Toggle clicked');
            mobileMenuToggle.classList.toggle('active');
            mobileMenuContent.classList.toggle('active');
            mobileMenuOverlay.classList.toggle('active');

            console.log('Classes after toggle:', {
                toggle: mobileMenuToggle.classList.contains('active'),
                content: mobileMenuContent.classList.contains('active'),
                overlay: mobileMenuOverlay.classList.contains('active')
            });

            // Блокировка прокрутки страницы при открытом меню
            if (mobileMenuContent.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Закрытие меню при клике на оверлей
        mobileMenuOverlay.addEventListener('click', function() {
            mobileMenuToggle.classList.remove('active');
            mobileMenuContent.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Закрытие меню при клике на пункт меню
        const menuLinks = mobileMenuContent.querySelectorAll('.buttons_main_menu');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenuToggle.classList.remove('active');
                mobileMenuContent.classList.remove('active');
                mobileMenuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Закрытие меню при изменении размера экрана
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                mobileMenuToggle.classList.remove('active');
                mobileMenuContent.classList.remove('active');
                mobileMenuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        console.log('Mobile menu initialized successfully');
    } else {
        console.error('Mobile menu elements not found');
    }
}

// Инициализация при загрузке DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMobileMenu);
} else {
    // DOM уже загружен
    initMobileMenu();
}

// Анимация на главной странице
function animOpenMain() {
    let square = document.querySelector('#text_free');
    let square2 = document.querySelector('#text_free_2');

    // Проверяем, существуют ли элементы (только на главной странице)
    if (!square && !square2) {
        return;
    }

    let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
                return;
            }

            if (entry.isIntersecting) {
                entry.target.classList.add('text_free_animation');
            }
        });
    });

    if (square) {
        observer.observe(square);
    }
    if (square2) {
        observer.observe(square2);
    }
}

// Инициализация анимации при загрузке DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', animOpenMain);
} else {
    // DOM уже загружен
    animOpenMain();
}