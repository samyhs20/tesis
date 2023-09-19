<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('password_policy', function ($attribute, $value, $parameters, $validator) {
            // Verifica que la contraseña tenga al menos una mayúscula
            if (!preg_match('/[A-Z]/', $value)) {
                return false;
            }
    
            // Verifica que la contraseña tenga al menos un dígito
            if (!preg_match('/[0-9]/', $value)) {
                return false;
            }
    
            // Verifica que la contraseña tenga al menos un carácter especial
            if (!preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $value)) {
                return false;
            }
    
            return true;
        });
    
        // Define un mensaje de error personalizado para la regla de validación
        Validator::replacer('password_policy', function ($message, $attribute, $rule, $parameters) {
            return 'La contraseña debe contener al menos una mayúscula, al menos un dígito, al menos un carácter especial y tener un máximo de 8 caracteres.';
        });

        Validator::extend('valid_ec_cedula', function ($attribute, $value, $parameters, $validator) {
            // Verifica que la cédula tenga exactamente 10 dígitos
            if (strlen($value) !== 10) {
                return false;
            }
    
            // Extrae los primeros 9 dígitos
            $digits = substr($value, 0, 9);
    
            // Calcula el dígito de control
            $sum = 0;
            for ($i = 0; $i < 9; $i++) {
                $digit = (int)$digits[$i];
                if ($i % 2 === 0) {
                    $digit *= 2;
                    if ($digit > 9) {
                        $digit -= 9;
                    }
                }
                $sum += $digit;
            }
    
            $control_digit = 10 - ($sum % 10);
    
            // Verifica si el último dígito es igual al dígito de control
            return (int)$value[9] === $control_digit;
        });
    
        // Define un mensaje de error personalizado para la regla de validación
        Validator::replacer('valid_ec_cedula', function ($message, $attribute, $rule, $parameters) {
            return 'La cédula no es válida.';
        });
 
}

}