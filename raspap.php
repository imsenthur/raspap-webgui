<?php

function getConfig()
{
    $config = array(
        'admin_user' => 'admin',
        'admin_pass' => '$2y$10$R0.O.32gGJbGgOs05JLlNeO5uwkE7c7gmjfi/9CfLFWS6/iuLREp.'
    );

    if (file_exists(RASPI_CONFIG . '/raspap.auth')) {
        if ($auth_details = fopen(RASPI_CONFIG . '/raspap.auth', 'r')) {
            $config['admin_user'] = trim(fgets($auth_details));
            $config['admin_pass'] = trim(fgets($auth_details));
            fclose($auth_details);
        }
    }
    return $config;
}

