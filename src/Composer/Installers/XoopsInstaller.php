<?php
namespace Composer\Installers;

class XoopsInstaller extends BaseInstaller
{
    protected $locations = array(
        'module' => 'modules/{$name}/',
    );
}
