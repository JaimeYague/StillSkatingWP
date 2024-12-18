<?php
/**
 * Plugin Name: Ejercicio Plugin
 * Description: Un plugin simple que inserta contenido personalizado al final de cada entrada.
 * Version: 1.0
 * Author: Tu Nombre
 */

// Evitar que el código se ejecute directamente
if (!defined('ABSPATH')) {
    exit;
}

// Registrar el estilo CSS
function ejercicioplugin_enqueue_styles() {
    wp_enqueue_style('ejercicioplugin-style', plugin_dir_url(__FILE__) . 'public/css/style.css');
}
add_action('wp_enqueue_scripts', 'ejercicioplugin_enqueue_styles');

// Función que añade contenido después de cada entrada
function ejercicioplugin_insertar_contenido($content) {
    if (is_single()) {
        $contenido_adicional = '<div class="ejercicioplugin-contenido">';
        $contenido_adicional .= '<p style="color: red;">GameHub, tu sitio para conocer todas las novedades sobre videojuegos y gaming en general!.</p>';
        $contenido_adicional .= '<img src="' . plugin_dir_url(__FILE__) . 'public/images/gamehub.jpg" alt="Imagen del plugin" />';
        $contenido_adicional .= '</div>';

        $content .= $contenido_adicional;
    }
    return $content;
}
add_filter('the_content', 'ejercicioplugin_insertar_contenido');

// Archivo de desinstalación
register_uninstall_hook(__FILE__, 'ejercicioplugin_uninstall');
function ejercicioplugin_uninstall() {
    // Aquí puedes definir las acciones al desinstalar el plugin, como limpiar la base de datos
}
?>