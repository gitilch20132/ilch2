<?php

defined('SYSPATH') or die('No direct access allowed.');

return array(
    'frontend' => array(
            'name' => 'Ilch Pluto',
            'description' => 'Default Ilch Pluto Frontend-Theme',
            'media' => array(
                    'styles' => array(
                            'frontend/media/bootstrap/less/bootstrap.less' => 'screen',
							'frontend/media/bootstrap/less/responsive.less' => 'screen',
                            'frontend/media/frontend/less/style.less' => 'screen',
                            'frontend/media/frontend/less/start.less' => 'screen',
							'http://fonts.googleapis.com/css?family=EB+Garamond' => 'screen'
                    )
            ),
            'require' => array(),
            'extends' => array()
    ),
    'backend' => array(
        'name' => 'Standard Ilch Nr. 1',
        'description' => 'Ilch2.0 Standard Design - Frontend',
        'media' => array(
                'scripts' => array(
                        '/less/less.min.js'
                ),
                'styles' => array(
                        'frontend/media/bootstrap/less/bootstrap.less' => 'screen',
                        'frontend/media/backend/less/style.less' => 'screen',
                )
        ),
    ),
);