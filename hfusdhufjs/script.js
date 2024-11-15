document.addEventListener('DOMContentLoaded', () => {
    const musicIcon = document.getElementById('music');
    const appsIcon = document.getElementById('apps');
    const settingsIcon = document.getElementById('settings');

    musicIcon.addEventListener('click', () => {
        alert('Music App is launched!');
    });

    appsIcon.addEventListener('click', () => {
        alert('Opening Apps...');
    });

    settingsIcon.addEventListener('click', () => {
        alert('Opening Settings...');
    });
});
