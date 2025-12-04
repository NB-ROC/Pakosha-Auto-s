// Change main image on gallery click
document.querySelectorAll('.gallery img').forEach(img => {
    img.addEventListener('click', () => {
        document.querySelector('.main-image').src = img.src;
    });
});
