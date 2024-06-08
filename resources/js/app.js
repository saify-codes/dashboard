import './bootstrap';

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'
import Swiper from 'swiper';
import 'swiper/css';

window.Alpine = Alpine;

Alpine.plugin(persist)
Alpine.start();
