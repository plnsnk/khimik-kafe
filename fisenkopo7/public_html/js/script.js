// Анимация при скролле
document.addEventListener('DOMContentLoaded', function() {
    // Находим все элементы, которые нужно анимировать при скролле
    const animatedElements = document.querySelectorAll(
        '.location-section h2, .location-section .venue-name, .location-section .venue-address, .location-section .map-button, ' +
        '.dresscode-section h2, .dresscode-section .dresscode-main, .dresscode-section .dresscode-text, .dresscode-section .important-note, .dresscode-section .closing-text, .dresscode-section .section-line'
    );

    // Создаём Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.2, // Элемент должен быть виден на 20%
        rootMargin: '0px 0px -50px 0px'
    });

    // Наблюдаем за каждым элементом
    animatedElements.forEach(el => observer.observe(el));
});
