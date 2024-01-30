import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/css/app.css', 
            'resources/js/app.js',
            'resources/images/favicon.png',
            'resources/images/icons/instagram.png',

            'resources/images/fotospassando/img3edit.jpg',
            'resources/images/fotospassando/cirurD.png',
            'resources/images/fotospassando/digoult.jpg',
            'resources/images/fotospassando/labaro.jpg',
            'resources/images/fotospassando/img8edit.jpg',

            'resources/images/fotospassando/flatimg3.jpg',

            'resources/images/fotospassando/labar2.png',

            'resources/images/icons/aparelhodigest02R.png',
            'resources/images/icons/oncolog02R.png',
            'resources/images/icons/hernia02R.png',
            'resources/images/icons/robotica02R.png',

            'resources/images/fotospassando/img6.jpg',

            'resources/images/artigo/artigo1.png',
            'resources/images/artigo/artigo2.jpg',
            'resources/images/artigo/artigo3.jpg',
            'resources/images/artigo/artigo4.jpg',
            'resources/images/artigo/artigo5.jpg',
            'resources/images/artigo/artigo6.jpg',
            'resources/images/artigo/artigo7.jpg',
            'resources/images/artigo/artigo8.png',
            'resources/images/artigo/artigo9.png',

            'resources/images/fotospassando/img7.jpg',

            'resources/images/icons/telefone.png',
            'resources/images/icons/whats.png',
            'resources/images/icons/insta.png',
            'resources/images/icons/local.png'
            ],
            refresh: true,
            resolve: {
                alias: {
                    '@': '/resources/js',
                },
            },
        }),
    ],
});
