<?php

use Sunlight\Util\Environment;

return function () {

    // do not send headers on CLI
    if(Environment::isCli()){
        return;
    }

    $config = $this->getConfig();

    // header Strict-Transport-Security - require HTTPS
    if (
        $config['strict_transport_security_enabled']
        && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'
    ) {
        $hstsHeader = 'max-age=' . $config['strict_transport_security_max_age'];
        if ($config['strict_transport_security_include_subdomains']) {
            $hstsHeader .= "; includeSubDomains";
        }
        if ($config['strict_transport_security_preload']) {
            $hstsHeader .= "; preload";
        }

        header('Strict-Transport-Security: ' . $hstsHeader);
    }

    // header Content-Security-Policy
    if ($config['content_security_policy_enabled']) {
        $cspConfig = $config['content_security_policy'];

        $cspHeader = '';
        foreach ($cspConfig as $directive => $value) {
            $cspHeader .= $directive . ' ' . $value . '; ';
        }
        $cspHeader = rtrim($cspHeader, '; ');

        if (!empty($cspHeader)) {
            header('Content-Security-Policy: ' . $cspHeader);
        }
    }

    // header X-Frame-Options
    if ($config['x_frame_options_enabled']) {
        header('X-Frame-Options: ' . strtoupper($config['x_frame_options']));
    }

    // header X-Content-Type-Options
    if ($config['x_content_type_options_enabled']) {
        header('X-Content-Type-Options: nosniff');
    }

    // header Referrer-Policy
    if ($config['referrer_policy_enabled']) {
        header('Referrer-Policy: ' . $config['referrer_policy']);
    }

    // header Permissions-Policy
    if ($config['permissions_policy_enabled']) {
        $policyConfig = $config['permissions_policy'];

        $ppHeader = '';
        foreach ($policyConfig as $feature => $policy) {
            $ppHeader .= $feature . '=' . $policy . '; ';
        }
        $ppHeader = rtrim($ppHeader, '; ');

        if (!empty($ppHeader)) {
            header('Permissions-Policy: ' . $ppHeader);
        }
    }
};
