<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    use HasFactory;

    protected $table = 'mobil';
    protected $fillable = [
        'nama_mobil',
        'tempat_duduk',
        'bagasi',
        'transmisi',
        'bahan_bakar',
        'status'
    ];
}