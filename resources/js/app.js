import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import '@shoelace-style/shoelace/dist/themes/light.css';
import '@shoelace-style/shoelace/dist/components/details/details.js';
import '@dile/dile-modal/dile-modal';

import '@/components/eit-foo.js';
import '@/components/eit-modal.js';

import.meta.glob([
    '../images/**',
]);

const button = document.getElementById('openmodal');
if(button) {
    button.addEventListener('click', function() {
        document.getElementById('dialogo').open();
    });
}

console.log(import.meta.env.VITE_FOO);