<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $guarded = [];

    protected $casts = [
        'fecha_nac' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function getRouteKeyName()
    {
      return 'url';
    }

    public static function create(array $attributes = []) {

        $attributes['user_id'] = auth()->id();

        $mascota = static::query()->create($attributes);

        $url = \Str::slug($attributes['nombre']);

        if (static::whereUrl($url)->exists()) {

            $mascota->url = \Str::slug($attributes['nombre']) . "-{$mascota->id}";
        } else {

            $mascota->url = \Str::slug($attributes['nombre']);
        }

        $mascota->foto = '/storage/'.request()->file('foto')->store('fotos', 'public');

        $mascota->solicitud = '/storage/'.request()->file('solicitud')->store('solicitudes', 'public');

        $mascota->save();

        return $mascota;
    }
}
