<?php

namespace App\Repositories;

use App\Models\produk;
use App\Repositories\BaseRepository;

/**
 * Class produkRepository
 * @package App\Repositories
 * @version March 3, 2021, 4:25 pm UTC
*/

class produkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_produk',
        'harga_produk',
        'stock_produk',
        'keterangan_produk'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return produk::class;
    }
}
