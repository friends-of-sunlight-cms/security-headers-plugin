<?php

return [
    'config.strict_transport_security_enabled' => '[STS] Send Strict-Transport-Security header (HTTPS only)',
    'config.strict_transport_security_max_age' => '[STS] Set max-age value',
    'config.strict_transport_security_max_age.hint' => 'time in seconds, recommended: "%maxage%"',
    'config.strict_transport_security_include_subdomains' => '[STS] Extend to all subdomains',
    'config.strict_transport_security_preload' => '[STS] Include domain in preload list',
    'config.content_security_policy_enabled' => '[CSP] Send Content-Security-Policy header',
    'config.content_security_policy' => '[CSP] Content-Security-Policy configuration',
    'config.x_frame_options_enabled' => '[XFO] Send X-Frame-Options header',
    'config.x_frame_options' => '[XFO] X-Frame-Options configuration',
    'config.x_content_type_options_enabled' => '[XCTO] Send X-Content-Type-Options header',
    'config.referrer_policy_enabled' => '[RP] Send Referrer-Policy header',
    'config.referrer_policy' => '[RP] Referrer-Policy configuration',
    'config.permissions_policy_enabled' => '[PP] Send Permissions-Policy header',
    'config.permissions_policy' => '[PP] Permissions-Policy configuration',
    'config.permissions_policy.hint' => '() = disabled for all | "self" = allowed only for own domain | "*" = allowed for all',
    'config.recommended' => 'recommended',
];