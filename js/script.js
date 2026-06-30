document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.project-card');

    // Petite animation optionnelle à l'entrée de la souris sur les cartes
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.5)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.boxShadow = '';
        });
    });
});