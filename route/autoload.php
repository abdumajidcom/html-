<?php

spl_autoload_register( 'my_psr4_autoloader' );

/**
 * An example of a project-specific implementation.
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
function my_psr4_autoloader(string $class): void
{
    // replace namespace separators with directory separators in the relative
    // class name, append with .php
    $class_path = str_replace('\\', '/', $class);
    $file =  __DIR__ . '/../' . $class_path . '.php';
    if (file_exists($file)) {
        require $file;
    }
}