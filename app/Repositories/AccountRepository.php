<?php

namespace App\Repositories;

use App\Models\Accounts;
use App\Repositories\BaseRepository;

/**
 * Class AccountRepository
 * @package App\Repositories
 * @version October 20, 2019, 12:58 pm UTC
*/

class AccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'user_id',
        'gender',
        'date_of_birth',
        'phone',
        'city',
        'country_id'
    ];

    /**
     * Trả về trường có thể tìm kiếm
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     *Cấu hình mô hình
     **/
    public function model()
    {
        return Accounts::class;
    }
}
