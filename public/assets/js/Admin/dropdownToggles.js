document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
    dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function () {
    const dropdownId = this.getAttribute('data-dropdown-toggle');
    const dropdown = document.getElementById(dropdownId);
    dropdown.classList.toggle('hidden');
});
});
});
