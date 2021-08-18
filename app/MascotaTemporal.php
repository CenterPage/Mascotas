<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MascotaTemporal extends Model
{
    protected $guarded = [];

    protected $table = 'mascota_temporales';

    public function getRouteKeyName()
    {
      return 'url';
    }

    public static function create(array $attributes = []) {

        $mascota = static::query()->create($attributes);

        $url = \Str::slug($attributes['nombre_mascota']);

        if (static::whereUrl($url)->exists()) {

            $mascota->url = \Str::slug($attributes['nombre_mascota']) . "-{$mascota->id}";
        } else {

            $mascota->url = \Str::slug($attributes['nombre_mascota']);
        }

        $mascota->foto = '/storage/'.request()->file('foto')->store('fotosTemporales', 'public');

        $mascota->save();

        return $mascota;
    }
}
