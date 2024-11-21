<?php
# Retirer les accents des noms de fichiers
add_filter('sanitize_file_name', 'remove_accents');

# Déclarer les scripts et les styles
function capitaine_register_assets()
{
    # Charger la feuille style.css du thème
    wp_enqueue_style('main', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'capitaine_register_assets');
