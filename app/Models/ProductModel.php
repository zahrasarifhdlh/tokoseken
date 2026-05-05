<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'tb_product';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'nama_product',
        'ukuran',
        'warna',
        'harga'
    ]; 

    // protected $fillable = ['id_product'];

}
