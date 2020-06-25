<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
// use SilverStripe\View\SSViewer;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
// Settings are registered via Injector configuration - see passwords.yml in framework
Member::set_password_validator($validator);

// SSViewer::set_theme("my-theme");
// // HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');

