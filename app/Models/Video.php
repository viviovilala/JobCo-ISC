<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'description',
        'url',
        'duration',
        'category_id',
        'thumbnail',
        'is_recommended',
    ];

    // Contoh relasi ke model lain, misalnya kategori video
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Metode untuk mendapatkan video yang direkomendasikan untuk pengguna
    public static function recommendedForUser($user)
    {
        return static::where('is_recommended', true)
            ->where('category_id', $user->preferred_category_id)
            ->get();
    }

    // Metode untuk mendapatkan video default (bisa disesuaikan dengan kebutuhan)
    public static function default()
    {
        return static::where('is_recommended', false)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
