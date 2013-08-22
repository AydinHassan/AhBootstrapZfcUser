<?php
/**
 * AhBootstrapZfcUser module config
 * 
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'view_helpers' => array(
        'factories' => array(
            'bootstrapForm' => 'AhBootstrapZfcUser\View\Helper\Factory\BootstrapFormFactory',
        )
    ),
);