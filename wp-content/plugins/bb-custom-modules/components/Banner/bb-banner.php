<?php

/**
 * @class CMBanner
 * @version 1.0.0
 */

class CMBanner extends FLBuilderModule {

    public function __construct()
    {
      parent::__construct(array(
        'name'              => __( 'Banner', 'fl-builder' ),
        'description'       => __( 'A custom module that display Banner', 'fl-builder' ),
        'category'          => __( 'Space Station', 'fl-builder' ),
        'dir'               => plugin_dir_path(__FILE__),
        'url'               => plugins_url('/', __FILE__),
        'editor_export'     => true, // Defaults to true and can be omitted.
        'enabled'           => true, // Defaults to true and can be omitted.
      ));
    }
};
FLBuilder::register_module( 'CMBanner', array( 
    
) );
