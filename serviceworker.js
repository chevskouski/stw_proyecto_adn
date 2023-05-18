const SW_VERSION = '0.0.1'
const STATIC_CACHE    = 'static-v'+SW_VERSION;
const DYNAMIC_CACHE   = 'dynamic-v'+SW_VERSION;
const INMUTABLE_CACHE = 'inmutable-v'+SW_VERSION;
const URL = self.registration.scope;
const BASE_URL = URL.includes('localhost') ? `http://localhost/stw_poryecto_adn/` : `https://www.aduana.yapasenosinge.syswebgroup.online/`;
//const API_URL =  URL.includes('localhost') ? `http://localhost/proyecto/` : `https://sistema.proyecto.com/`;

// --------------- IMPORTS -------------------------------

importScripts('layout/main/js/carga_doc.js')

const APP_SHELL = [
   'layout/main/template.php',
   'layout/main/js/poliza.js'
]

const APP_SHELL_INMUTABLE = [
   'manifest.json',
   //'https://www.w3schools.com/w3css/4/w3.css',
   //'https://www.yapasenosinge.syswebgroup.online/assets/imgs/placeholder.ico', // CORS
   //'https://www.yapasenosinge.syswebgroup.online/assets/imgs/placeholder.svg', // CORS
   'https://fonts.googleapis.com/css?family=Montserrat',
   'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', 
   'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css',
   'https://kit.fontawesome.com/cd3d646c75.js',
   'https://code.jquery.com/jquery-3.6.4.min.js', 
   'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js',
   'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
   //'https://www.yapasenosinge.syswebgroup.online/assets/imgs/aduana.png' 

]

self.addEventListener('install', e => {

   const cacheStatic = caches.open( STATIC_CACHE ).then(cache => 
       cache.addAll( APP_SHELL ));

   const cacheInmutable = caches.open( INMUTABLE_CACHE ).then(cache => 
       cache.addAll( APP_SHELL_INMUTABLE ));

   e.waitUntil( Promise.all([ cacheStatic, cacheInmutable ])  );

});


self.addEventListener('activate', e => {

   const respuesta = caches.keys().then( keys => {

       keys.forEach( key => {

           if (  key !== STATIC_CACHE && key.includes('static') ) {
               return caches.delete(key);
           }

           if (  key !== DYNAMIC_CACHE && key.includes('dynamic') ) {
               return caches.delete(key);
           }

           if (  key !== INMUTABLE_CACHE && key.includes('inmutable') ) {
               return caches.delete(key);
           }
       });

   });

   e.waitUntil( respuesta );

});