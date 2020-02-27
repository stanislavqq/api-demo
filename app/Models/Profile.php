<?php

namespace App\Models;

use App\Http\Controllers\Api\IApiResponse;
use App\Http\Requests\ProfileListRequest;
use Illuminate\Database\Eloquent\Model;

class Profile extends User
{
    protected $table = 'users';
    protected $guarded = [];
    protected $hidden = ['password'];

    public static function getList(ProfileListRequest $validatedFields)
    {
        $page = (int) $validatedFields->getValidField('page', 1);
        $limit = (int) $validatedFields->getValidField('limit', 50);

        return self::skip(($page - 1) * $limit)
            ->take($limit)
            ->orderBy('last_login', 'ASC')
            ->get();
    }
}
