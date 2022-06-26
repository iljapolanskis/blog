import './bootstrap';

import Alpine from 'alpinejs';

import SwappableHeading from "./swappable-heading";

new SwappableHeading(document.getElementById('categories-swap'),
    ['PHP', 'ViM', 'Laravel', 'Magento 2']).swap();


window.Alpine = Alpine;

Alpine.start();
