<?php

namespace App\Imports;

use App\Models\Usuario;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Permite procesar los datos que se envian en el file, todos recepcionados por su index
        return new Usuario([
            'id'  => $row['id'],
            'nombre' => $row['nombre'],
            'telefono'    => $row['telefono'],
        ]);
    }
}
