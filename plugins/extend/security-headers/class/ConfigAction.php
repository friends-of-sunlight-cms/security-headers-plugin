<?php

namespace SunlightExtend\SecurityHeaders;

use Sunlight\Plugin\Action\ConfigAction as BaseConfigAction;
use Sunlight\Util\ConfigurationFile;
use Sunlight\Util\Form;
use Sunlight\Util\Json;

class ConfigAction extends BaseConfigAction
{
    protected function getFields(): array
    {
        $config = $this->plugin->getConfig();

        return [
            // header Strict-Transport-Security
            'strict_transport_security_enabled' => [
                'label' => '<label for="plugin_config_strict_transport_security_enabled">' . _lang('security-headers.config.strict_transport_security_enabled') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[strict_transport_security_enabled]',
                    '1',
                    ['id' => 'plugin_config_strict_transport_security_enabled', 'checked' => $config['strict_transport_security_enabled']]
                ),
                'type' => 'checkbox',
            ],
            'strict_transport_security_max_age' => [
                'label' => '<label for="plugin_config_strict_transport_security_max_age">' . _lang('security-headers.config.strict_transport_security_max_age') . '</label>',
                'input' => Form::input(
                        'number',
                        'config[strict_transport_security_max_age]',
                        $config['strict_transport_security_max_age'],
                        ['id' => 'plugin_config_strict_transport_security_max_age']
                    ) . '<p class="note">' . _lang('security-headers.config.strict_transport_security_max_age.hint', ['%maxage%' => 31536000]) . '</p>',
                'type' => 'text',
            ],
            'strict_transport_security_include_subdomains' => [
                'label' => '<label for="plugin_config_strict_transport_security_include_subdomains">' . _lang('security-headers.config.strict_transport_security_include_subdomains') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[strict_transport_security_include_subdomains]',
                    '1',
                    ['id' => 'plugin_config_strict_transport_security_include_subdomains', 'checked' => $config['strict_transport_security_include_subdomains']]
                ),
                'type' => 'checkbox',
            ],
            'strict_transport_security_preload' => [
                'label' => '<label for="plugin_config_strict_transport_security_preload">' . _lang('security-headers.config.strict_transport_security_preload') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[strict_transport_security_preload]',
                    '1',
                    ['id' => 'plugin_config_strict_transport_security_preload', 'checked' => $config['strict_transport_security_preload']]
                ),
                'type' => 'checkbox',
            ],

            // header Content-Security-Policy
            'content_security_policy_enabled' => [
                'label' => '<label for="plugin_config_use_default_dict">' . _lang('security-headers.config.content_security_policy_enabled') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[content_security_policy_enabled]',
                    '1',
                    ['id' => 'plugin_config_content_security_policy_enabled', 'checked' => $config['content_security_policy_enabled']]
                ),
                'type' => 'checkbox',
            ],
            'content_security_policy' => [
                'label' => _lang('security-headers.config.content_security_policy'),
                'input' => Form::textarea('config[content_security_policy]', Json::encode($config['content_security_policy'], Json::PRETTY), ['class' => 'areasmall_100pwidth']) . '<br>',
            ],

            // header X-Frame-Options
            'x_frame_options_enabled' => [
                'label' => '<label for="plugin_config_strict_transport_security_enabled">' . _lang('security-headers.config.x_frame_options_enabled') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[x_frame_options_enabled]',
                    '1',
                    ['id' => 'plugin_config_x_frame_options_enabled', 'checked' => $config['x_frame_options_enabled']]
                ),
                'type' => 'checkbox',
            ],
            'x_frame_options' => [
                'label' => _lang('security-headers.config.x_frame_options'),
                'input' => Form::select(
                    'config[x_frame_options]',
                    [
                        'DENY' => 'DENY',
                        'SAMEORIGIN' => 'SAMEORIGIN',
                    ],
                    $config['x_frame_options']
                ),
                'type' => 'text',
            ],

            // header X-Content-Type-Options
            'x_content_type_options_enabled' => [
                'label' => '<label for="plugin_config_strict_transport_security_enabled">' . _lang('security-headers.config.x_content_type_options_enabled') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[x_content_type_options_enabled]',
                    '1',
                    ['id' => 'plugin_config_x_content_type_options_enabled', 'checked' => $config['x_content_type_options_enabled']]
                ),
                'type' => 'checkbox',
            ],

            // header Referrer-Policy
            'referrer_policy_enabled' => [
                'label' => '<label for="plugin_config_strict_transport_security_enabled">' . _lang('security-headers.config.referrer_policy_enabled') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[referrer_policy_enabled]',
                    '1',
                    ['id' => 'plugin_config_referrer_policy_enabled', 'checked' => $config['referrer_policy_enabled']]
                ),
                'type' => 'checkbox',
            ],
            'referrer_policy' => [
                'label' => _lang('security-headers.config.referrer_policy'),
                'input' => Form::select(
                    'config[referrer_policy]',
                    [
                        'no-referrer' => 'no-referrer',
                        'no-referrer-when-downgrade' => 'no-referrer-when-downgrade',
                        'strict-origin-when-cross-origin' => 'strict-origin-when-cross-origin' . ' (' . _lang('security-headers.config.recommended') . ')',
                        'origin' => 'origin',
                        'strict-origin' => 'strict-origin',
                        'same-origin' => 'same-origin',
                        'origin-when-cross-origin' => 'origin-when-cross-origin',
                        'unsafe-url' => 'unsafe-url',
                    ],
                    $config['referrer_policy']
                ),
                'type' => 'text',
            ],

            // header Permissions-Policy
            'permissions_policy_enabled' => [
                'label' => '<label for="plugin_config_permissions_policy_enabled">' . _lang('security-headers.config.permissions_policy_enabled') . '</label>',
                'input' => Form::input(
                    'checkbox',
                    'config[permissions_policy_enabled]',
                    '1',
                    ['id' => 'plugin_config_permissions_policy_enabled', 'checked' => $config['permissions_policy_enabled']]
                ),
                'type' => 'checkbox',
            ],
            'permissions_policy' => [
                'label' => _lang('security-headers.config.permissions_policy'),
                'input' => Form::textarea('config[permissions_policy]', Json::encode($config['permissions_policy'], Json::PRETTY), ['class' => 'areasmall_100pwidth']) . '<br>'
                    . '<p class="note">' . _lang('security-headers.config.permissions_policy.hint') . '</p>',
            ],

        ];
    }

    protected function mapSubmittedValue(ConfigurationFile $config, string $key, array $field, $value): ?string
    {
        switch ($key) {
            case 'content_security_policy':
            case 'permissions_policy':
                try {
                    $config[$key] = Json::decode($value);
                } catch (\InvalidArgumentException $e) {
                    return $e->getMessage();
                }

                return null;
        }

        return parent::mapSubmittedValue($config, $key, $field, $value);
    }
}
