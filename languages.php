<?php
/**
 * Diccionario de traducciones - Aventuras Locales MALINTZIN
 * BIOR Web Studio - Master en Full Stack Web Development
 */

$texts = [
    'es' => [
        // --- NAVEGACIÓN ---
        'nav_home' => 'Inicio',
        'nav_locations' => 'Ubicaciones',
        'nav_gallery' => 'Galería',
        'nav_contact' => 'Contacto',
        
        // --- HERO HEADER ---
        'hero_badge' => '¡Top Tours en el Bosque!',
        'hero_title' => 'Bienvenidos a <br><span>Malintzin Forest</span>',
        'hero_copy'  => 'Explora los senderos más bellos con guías expertos locales.',
        'btn_book'   => 'RESERVA UN TOUR',
        
        // Filtros & Títulos
        'filter_all'     => 'La Malinche',
        'filter_snow'    => 'Rutas Nevadas',
        'filter_clouds'  => 'Mar de Nubes',
        'featured_tours' => 'Tours Destacados',
        'btn_hex_action' => 'Ver detalles',

        // Rutas (Data traducida)
        'rutas' => [
            'cima'         => 'Cima Principal',
            'arenal'       => 'El Arenal',
            'bosque'       => 'Bosque de Coníferas',
            'nocturna'     => 'Ruta Nocturna',
            'canada'       => 'La Cañada',
            'avistamiento' => 'Avistamiento de Aves'
        ],

        // Testimonios
        'testimonials_title' => 'Testimonios',
        'testimonials_subtitle' => 'LO QUE NUESTROS AVENTUREROS DICEN',
        'reviews' => [
            [
                'texto' => 'La vista del mar de nubes desde la cima es algo que no se puede explicar con palabras. ¡Increíble!',
                'autor' => 'Louis Barrett'
            ],
            [
                'texto' => 'Excelente guía local. Conocen la montaña como la palma de su mano y te hacen sentir seguro siempre.',
                'autor' => 'Emma Gibson'
            ],
            [
                'texto' => 'Fuimos en temporada de nieve y fue la mejor experiencia de mi vida. Todo muy bien organizado.',
                'autor' => 'Alice Foster'
            ]
        ],

        // --- FOOTER ---
        'footer_email_title' => 'Correo', 
        'footer_email_subtext' => 'Envíanos un correo',
        'footer_contact_title' => 'Contáctanos', 
        'footer_address' => 'Apizaco, Tlaxcala, México',
        'footer_about' => 'Sobre nosotros',
        'footer_social_title' => 'Síguenos',
        'footer_rights' => '© 2026 Aventuras Locales MALINTZIN. Todos los derechos reservados.',
        'footer_agency' => 'Desarrollado por <span>BIOR Web Studio</span>',
        
        // nav
        'nav_home'      => 'Inicio',
        'nav_locations' => 'Ubicaciones',
        'nav_gallery'   => 'Galería',
        'nav_contact'   => 'Contacto',
    ],
    
    'en' => [
        // --- NAVEGACIÓN ---
        'nav_home' => 'Home',
        'nav_locations' => 'Locations',
        'nav_gallery' => 'Gallery',
        'nav_contact' => 'Contact',

        // --- HERO HEADER ---
        'hero_badge' => 'Top Forest Tours!',
        'hero_title' => 'Welcome to <br><span>Malintzin Forest</span>',
        'hero_copy'  => 'Explore the most beautiful trails with expert local guides.',
        'btn_book'   => 'BOOK A TOUR',
        
        // Filters & Titles
        'filter_all'     => 'The Malinche',
        'filter_snow'    => 'Snowy Routes',
        'filter_clouds'  => 'Sea of Clouds',
        'featured_tours' => 'Featured Tours',
        'btn_hex_action' => 'Book tour',

        // Routes (Translated Data)
        'rutas' => [
            'cima'         => 'Main Summit',
            'arenal'       => 'The Sandy Path',
            'bosque'       => 'Coniferous Forest',
            'nocturna'     => 'Night Hike',
            'canada'       => 'The Canyon',
            'avistamiento' => 'Bird Watching'
        ],

        // Testimonials
        'testimonials_title' => 'Testimonios',
        'testimonials_subtitle' => 'WHAT OUR CUSTOMERS SAY ABOUT US',
        'reviews' => [
            [
                'texto' => 'The view of the sea of clouds from the summit is something that cannot be explained in words. Amazing!',
                'autor' => 'Louis Barrett'
            ],
            [
                'texto' => 'Excellent local guide. They know the mountain like the back of their hand and make you feel safe.',
                'autor' => 'Emma Gibson'
            ],
            [
                'texto' => 'We went during snow season and it was the best experience of my life. Everything was very well organized.',
                'autor' => 'Alice Foster'
            ]
        ],

        // --- FOOTER ---
        'footer_email_title' => 'Email',
        'footer_email_subtext' => 'Send us an email',
        'footer_contact_title' => 'Contact us', // O 'Contact us'
        'footer_address' => 'Apizaco, Tlaxcala, Mexico', // Sin acento en Mexico
        'footer_about' => 'About us',
        'footer_social_title' => 'Follow us',
        'footer_rights' => '© 2026 Local Adventures MALINTZIN. All rights reserved.',
        'footer_agency' => 'Developed by <span>BIOR Web Studio</span>',
        
        // Nav
        'nav_home'      => 'Home',
        'nav_locations' => 'Locations',
        'nav_gallery'   => 'Gallery',
        'nav_contact'   => 'Contact',
    ]
];

/**
 * Data Técnica de las Rutas (Constantes)
 * Esto no cambia con el idioma, así que lo dejamos fuera del array de traducción
 */
$rutas_assets = [
    'cima'         => ['img' => 'cima.jpg'],
    'arenal'       => ['img' => 'arenal.jpg'],
    'bosque'       => ['img' => 'bosque.jpg'],
    'nocturna'     => ['img' => 'noche.jpg'],
    'canada'       => ['img' => 'canada.jpg'],
    'avistamiento' => ['img' => 'aves.jpg'],
];