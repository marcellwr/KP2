<?php

namespace App\Repositories;

use App\Models\pelanggan;
use App\Repositories\BaseRepository;

/**
 * Class pelangganRepository
 * @package App\Repositories
 * @version March 3, 2021, 4:31 pm UTC
*/

class pelangganRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_pelanggan',
        'alamat_pelanggan',
        'nomor_telepon'
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
        return pelanggan::class;
    }
}
