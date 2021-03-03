<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class produk
 * @package App\Models
 * @version March 3, 2021, 4:25 pm UTC
 *
 * @property string $nama_produk
 * @property integer $harga_produk
 * @property integer $stock_produk
 * @property string $keterangan_produk
 */
class produk extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'produks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_produk',
        'harga_produk',
        'stock_produk',
        'keterangan_produk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_produk' => 'string',
        'harga_produk' => 'integer',
        'stock_produk' => 'integer',
        'keterangan_produk' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
