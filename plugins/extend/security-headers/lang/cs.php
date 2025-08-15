<?php

return [
    'config.strict_transport_security_enabled' => '[STS] Odesílat hlavičku Strict-Transport-Security (pouze HTTPS)',
    'config.strict_transport_security_max_age' => '[STS] Nastavení hodnoty max-age',
    'config.strict_transport_security_max_age.hint' => 'doba v sekundách, doporučeno: "%maxage%"',
    'config.strict_transport_security_include_subdomains' => '[STS] Rozšířit na všechny subdomény',
    'config.strict_transport_security_preload' => '[STS] zařadit doménu do preload',
    'config.content_security_policy_enabled' => '[CSP] Odesílat hlavičku Content-Security-Policy',
    'config.content_security_policy' => '[CSP] Konfigurace Content-Security-Policy',
    'config.x_frame_options_enabled' => '[XFO] Odesílat hlavičku X-Frame-Options',
    'config.x_frame_options' => '[XFO] Konfigurace X-Frame-Options',
    'config.x_content_type_options_enabled' => '[XCTO] Odesílat hlavičku X-Content-Type-Options',
    'config.referrer_policy_enabled' => '[RP] Odesílat hlavičku Referrer-Policy',
    'config.referrer_policy' => '[RP] Konfigurace Referrer-Policy',
    'config.permissions_policy_enabled' => '[PP] Odesílat hlavičku Permissions-Policy',
    'config.permissions_policy' => '[PP] Konfigurace Permissions-Policy',
    'config.permissions_policy.hint' => '() = zakázáno všem | "self" = povoleno jen vlastní doméně | "*" = povoleno všem',
    'config.recommended' => 'doporučeno',
];
