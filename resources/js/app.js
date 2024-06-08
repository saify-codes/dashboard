import './bootstrap';

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'
import Swiper from 'swiper';
import 'swiper/css';
import 'boxicons'


window.Alpine = Alpine;

Alpine.plugin(persist)
Alpine.start();
