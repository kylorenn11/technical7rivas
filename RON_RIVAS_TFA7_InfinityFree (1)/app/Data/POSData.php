<?php

namespace App\Data;

final class POSData
{
    public static function customers(): array
    {
        return [
            ['id' => 1, 'full_name' => 'Mikaela Santos', 'email' => 'mikaela.santos@example.com', 'phone' => '0917 555 0101'],
            ['id' => 2, 'full_name' => 'Gabriel Cruz', 'email' => 'gabriel.cruz@example.com', 'phone' => '0917 555 0102'],
            ['id' => 3, 'full_name' => 'Alyssa Mendoza', 'email' => 'alyssa.mendoza@example.com', 'phone' => '0917 555 0103'],
            ['id' => 4, 'full_name' => 'Mateo Reyes', 'email' => 'mateo.reyes@example.com', 'phone' => '0917 555 0104'],
            ['id' => 5, 'full_name' => 'Danica Flores', 'email' => 'danica.flores@example.com', 'phone' => '0917 555 0105'],
        ];
    }

    public static function users(): array
    {
        return [
            ['id' => 1, 'username' => 'ron.rivas', 'full_name' => 'Ron Rivas'],
            ['id' => 2, 'username' => 'mia.santos', 'full_name' => 'Mia Santos'],
            ['id' => 3, 'username' => 'noah.cruz', 'full_name' => 'Noah Cruz'],
            ['id' => 4, 'username' => 'sofia.garcia', 'full_name' => 'Sofia Garcia'],
            ['id' => 5, 'username' => 'liam.mendoza', 'full_name' => 'Liam Mendoza'],
        ];
    }
}
