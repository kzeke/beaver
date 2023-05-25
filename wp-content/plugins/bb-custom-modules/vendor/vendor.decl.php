<?php

// add_action("wp_enqueue_scripts", function() {
//     // # Slick (included from vendored copy)
//     wp_register_style('command-module-vendoredslick',
//         plugins_url('slick-1.8.1/slick/slick.css', __FILE__),
//         array(),
//         '1.8.1-' . filemtime(plugin_dir_path(__FILE__) . 'slick-1.8.1/slick/slick.css')
//     );
//     wp_register_script('command-module-vendoredslick',
//         plugins_url('slick-1.8.1/slick/slick.min.js', __FILE__),
//         array('jquery'),
//         '1.8.1-' . filemtime(plugin_dir_path(__FILE__) . 'slick-1.8.1/slick/slick.min.js')
//     );

//     // # Select2 (included via NPM & build system)
//     wp_register_style('command-module-vendoredselect2',
//         plugins_url('../build/vendor_select2.css', __FILE__),
//         array(),
//         '4.0.13-' . filemtime(plugin_dir_path(__FILE__) . '../build/vendor_select2.css')
//     );
//     wp_register_script('command-module-vendoredselect2',
//         plugins_url('../build/vendor_select2.js', __FILE__),
//         array('jquery'),
//         '4.0.13-' . filemtime(plugin_dir_path(__FILE__) . '../build/vendor_select2.js')
//     );

//     // # GSAP (included from vendored copy)
//     wp_register_script('command-module-gsapMinified',
//         plugins_url('gsap-3.11.3/gsap.min.js', __FILE__),
//         array('jquery'),
//         '3.11.3-' . filemtime(plugin_dir_path(__FILE__) . 'gsap-3.11.3/gsap.min.js')
//     );
//     wp_register_script('command-module-scrollToPlugin',
//         plugins_url('gsap-3.11.3/ScrollToPlugin.min.js', __FILE__),
//         array('jquery'),
//         '3.11.3-' . filemtime(plugin_dir_path(__FILE__) . 'gsap-3.11.3/ScrollToPlugin.min.js')
//     );
//     wp_register_script('command-module-scrollTrigger',
//         plugins_url('gsap-3.11.3/ScrollTrigger.min.js', __FILE__),
//         array('jquery'),
//         '3.11.3-' . filemtime(plugin_dir_path(__FILE__) . 'gsap-3.11.3/ScrollTrigger.min.js')
//     );
// });