import './bootstrap';
const button = document.getElementById('popoverButton');
const popover = document.getElementById('myPopover');

button.addEventListener('mouseover', () => {
    popover.style.display = 'block';
});

button.addEventListener('mouseout', () => {
    popover.style.display = 'none';
});

