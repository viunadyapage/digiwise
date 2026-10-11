const themeToggle = document.getElementById('themeToggle');

const moonIcon = document.getElementById('moonIcon');
const sunIcon = document.getElementById('sunIcon');


// ================================================
// Load saved theme
// ================================================

const savedTheme = localStorage.getItem('theme');

if (savedTheme === 'dark') {

    document.documentElement.setAttribute(
        'data-theme',
        'dark'
    );

    moonIcon.style.display = 'none';
    sunIcon.style.display = 'block';

}


// ================================================
// Toggle theme
// ================================================

themeToggle.addEventListener('click', function () {

    const currentTheme =
        document.documentElement.getAttribute('data-theme');


    // DARK → LIGHT
    if (currentTheme === 'dark') {

        document.documentElement.removeAttribute(
            'data-theme'
        );

        localStorage.setItem(
            'theme',
            'light'
        );

        moonIcon.style.display = 'block';
        sunIcon.style.display = 'none';

    }


    // LIGHT → DARK
    else {

        document.documentElement.setAttribute(
            'data-theme',
            'dark'
        );

        localStorage.setItem(
            'theme',
            'dark'
        );

        moonIcon.style.display = 'none';
        sunIcon.style.display = 'block';

    }

});