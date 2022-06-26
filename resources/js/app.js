import './bootstrap';

import Alpine from 'alpinejs';

import SwappableHeading from "./swappable-heading";

// categories_list comes from category-dropdown.blade.php
if (typeof categories_list !== 'undefined') {
    new SwappableHeading(document.getElementById('categories-swap'), categories_list).swap();
}

window.Alpine = Alpine;

Alpine.start();
