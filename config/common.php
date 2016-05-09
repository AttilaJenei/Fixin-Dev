<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

return array_replace_recursive(require "{$fixinClassesPath}/../config/default.php", array(
    'loader' => array(
        'prefixes' => array(
            'App' => "{$topPath}/classes/App",
            'Fixin' => "{$fixinClassesPath}/Fixin",
        )
    ),
));