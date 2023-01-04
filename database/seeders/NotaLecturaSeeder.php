<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NotaLectura;

class NotaLecturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotaLectura::create(['codigo'=>'Z100','descripcion'=> 'Medidor dañado y/o pantalla en blanco']);
        NotaLectura::create(['codigo'=>'Z101','descripcion'=> 'Medidor destruido']);
        NotaLectura::create(['codigo'=>'Z102','descripcion'=> 'Número de medidor borrado']);
        NotaLectura::create(['codigo'=>'Z103','descripcion'=> 'Domicilio y/o inmueble  cerrado, valdío, abandonado']);
        NotaLectura::create(['codigo'=>'Z104','descripcion'=> 'Medidor no localizado']);
        NotaLectura::create(['codigo'=>'Z105','descripcion'=> 'Medidor reportado como sobrante']);
        NotaLectura::create(['codigo'=>'Z106','descripcion'=> 'Medidor retirado']);
        NotaLectura::create(['codigo'=>'Z107','descripcion'=> 'Acceso al medidor se encuentra obstruido de difícil visibilidad']);
        NotaLectura::create(['codigo'=>'Z108','descripcion'=> 'Perro bravo']);
        NotaLectura::create(['codigo'=>'Z109','descripcion'=> 'Medidor desprogramado']);
        NotaLectura::create(['codigo'=>'Z110','descripcion'=> 'Medidor electrónico requiere cambio de batería']);
        NotaLectura::create(['codigo'=>'Z111','descripcion'=> 'Falta de energía en la red, medidor electrónico pantalla LCD']);
        NotaLectura::create(['codigo'=>'Z112','descripcion'=> 'Reubicar medidor']);
        NotaLectura::create(['codigo'=>'Z113','descripcion'=> 'Desconectado el servicio medidor electrónico, pantalla LCD']);
        NotaLectura::create(['codigo'=>'Z114','descripcion'=> 'Medidor sin uso/ lectura estacionada']);
        NotaLectura::create(['codigo'=>'Z115','descripcion'=> 'Visor de caja, o luna del medidor opaca u obstruída']);
        NotaLectura::create(['codigo'=>'Z116','descripcion'=> 'Alerta y/o Mensaje en pantalla medidor electrónico']);
        NotaLectura::create(['codigo'=>'Z117','descripcion'=> 'Medidor dañado']);
        NotaLectura::create(['codigo'=>'Z118','descripcion'=> 'Medidor destruido/Registrador permite que se tome la lectura']);
        NotaLectura::create(['codigo'=>'Z119','descripcion'=> 'Número de medidor borrado']);
        NotaLectura::create(['codigo'=>'Z120','descripcion'=> 'Domicilio y/o inmueble  cerrado, valdío, abandonado']);
        NotaLectura::create(['codigo'=>'Z121','descripcion'=> 'Acceso al medidor se encuentra obstruido de difícil visibilidad']);
        NotaLectura::create(['codigo'=>'Z122','descripcion'=> 'Medidor electrónico requiere cambio de batería']);
        NotaLectura::create(['codigo'=>'Z123','descripcion'=> 'Reubicar medidor']);
        NotaLectura::create(['codigo'=>'Z124','descripcion'=> 'Visor de caja, o luna del medidor opaca u obstruída']);
        NotaLectura::create(['codigo'=>'Z125','descripcion'=> 'Alerta y/o Mensaje en pantalla medidor electrónico']);
        NotaLectura::create(['codigo'=>'Z126','descripcion'=> 'Perro bravo']);
        NotaLectura::create(['codigo'=>'Z200','descripcion'=> 'Actualizar cambio de medidor']);
        NotaLectura::create(['codigo'=>'Z201','descripcion'=> 'Corregir dirección']);
        NotaLectura::create(['codigo'=>'Z202','descripcion'=> 'Rectificar Marca de medidor']);
        NotaLectura::create(['codigo'=>'Z203','descripcion'=> 'Se identifica otro tipo de utilización de la energía (revisar Tarifa)']);
        NotaLectura::create(['codigo'=>'Z204','descripcion'=> 'Rectificar Grupo de Numerador (cifras enteras y decimales)']);
        NotaLectura::create(['codigo'=>'Z205','descripcion'=> 'Número de serie del medidor difiere con el número de serie de la orden de lectura']);
        NotaLectura::create(['codigo'=>'Z206','descripcion'=> 'Rectificar Grupo de Numerador (cifras enteras y decimales)']);
        NotaLectura::create(['codigo'=>'Z207','descripcion'=> 'Número de serie del medidor difiere con el número de serie de la orden de lectura']);
        NotaLectura::create(['codigo'=>'Z300','descripcion'=> 'Verificar posible pérdida comercial']);
        NotaLectura::create(['codigo'=>'Z301','descripcion'=> 'Lectura ratificada sale de rango']);
        NotaLectura::create(['codigo'=>'Z302','descripcion'=> 'Lectura reportada por el cliente']);
        NotaLectura::create(['codigo'=>'Z303','descripcion'=> 'Servicio Nuevo, sin energizar']);
        NotaLectura::create(['codigo'=>'Z304','descripcion'=> 'Servicio Nuevo, sin energizar']);
        NotaLectura::create(['codigo'=>'Z305','descripcion'=> 'Daño Acometida y/o accesorios']);

    }

}
