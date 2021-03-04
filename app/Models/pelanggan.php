<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pelanggan
 * @package App\Models
 * @version March 3, 2021, 4:31 pm UTC
 *
 * @property string $nama_pelanggan
 * @property string $alamat_pelanggan
 * @property string $nomor_telepon
 */
class pelanggan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pelanggans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_pelanggan',
        'alamat_pelanggan',
        'nomor_telepon'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_pelanggan' => 'string',
        'alamat_pelanggan' => 'string',
        'nomor_telepon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
