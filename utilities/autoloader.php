<?php
function load($name): void
{
    $file = 'Classes/' . $name . '.php';
    if (!file_exists($file)) {
        $file = 'Classes/' . 'Personne/' . $name . '.php';
        if (!file_exists($file)) {
            $file = '../' . 'Classes/' . $name . '.php';
            if (!file_exists($file)) {
                $file = '../' . 'Classes/' . 'Personne/' . $name . '.php';
                if (!file_exists($file)) {
                    $file = '../../' . 'Classes/' . $name . '.php';
                    if (!file_exists($file)) {
                        $file = '../../' . 'Classes/' . 'Personne/' . $name . '.php';
                    }
                }
            }
        }
    }

    include_once $file;
}
spl_autoload_register('load');
