<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'db' => array(
        'driver'         => 'PdoMysql',
        'dsn'            => 'mysql:dbname=nhpress;host=localhost',
        'username'       => 'root',
        'password'       => 'ptH3984z'
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                    => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name' => 'nhp',
            ),
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array(
            'Zend\Session\Validator\RemoteAddr',
            'Zend\Session\Validator\HttpUserAgent',
        ),
    ),
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
	        'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
		    'host' => 'localhost',
		    'port' => '3306',
		    'user' => 'root',
		    'password' => 'ptH3984z', 
		    'dbname' => 'nhpress',
                    'charset'  => 'utf8',
                    'driverOptions' => array(
                        1002 => 'SET NAMES utf8'
                    ),
                ),
            ),
        ),
        'driver' => array(
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'Application_annotation_driver',
                    'CRM\Entity' => 'CRM_annotation_driver',
                ),
            ),
        ),
    ),
);    // ...
