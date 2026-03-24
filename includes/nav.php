<nav class="nav">
    <div class="container nav__container">
        
        <a href="index.php" class="nav__logo">
            <img src="assets/img/logo.png" alt="Logo Malintzin">
            <span>MALINTZIN</span>
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="#inicio" class="nav__link"><?php echo __('nav_home'); ?></a></li>
                <li class="nav__item"><a href="#tours" class="nav__link"><?php echo __('nav_locations'); ?></a></li>
                <li class="nav__item"><a href="#galeria" class="nav__link"><?php echo __('nav_gallery'); ?></a></li>
                <li class="nav__item"><a href="#contacto" class="nav__link"><?php echo __('nav_contact'); ?></a></li>
                
                <li class="nav__item nav__lang">
                    <a href="?lang=es" class="<?php echo ($lang === 'es') ? 'active' : ''; ?>">ES</a>
                    <span>/</span>
                    <a href="?lang=en" class="<?php echo ($lang === 'en') ? 'active' : ''; ?>">EN</a>
                </li>
            </ul>
        </div>

        <button class="nav__toggle" id="nav-toggle" aria-label="Abrir menú">
            <span class="nav__burger"></span>
        </button>

    </div>
</nav>