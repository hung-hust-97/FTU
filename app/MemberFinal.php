<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberFinal extends Model
{
    protected $table = 'member_final';

    protected $guarded = [];

    /**
     * @param $params
     * @return mixed
     */
    public static function registerMemberFinal($params) {
        $member = MemberFinal::create(array(
            'name' => $params['name'],
            'phone' => $params['phone'],
            'email' => $params['email'],
            'facebook' => $params['facebook'],
            'university' => $params['university'],
            'speciality' => $params['speciality'],
            'place' => $params['place'],
            'year' => $params['year'],
            // 'mong_muốn'=> $params['mong_muốn'],
            // 'cổ_vũ'=> $params['cổ_vũ'],


        ));
        $result['member'] = $member;

        return $result;
    }
}
