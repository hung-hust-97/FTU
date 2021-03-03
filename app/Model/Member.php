<?php

//Member tham gia vòng 1

namespace App\Model;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Member extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use SoftDeletes, Authenticatable, CanResetPassword;

   protected $table = "candidates";
    // protected $table = 'member_final';
    protected $guarded = [];

//    public function setPasswordAttribute($pass)
//    {
//        $this->attributes['password'] = Hash::make($pass);
//    }


    /**
     * @param $params
     * @return array
     */
    public static function registerMember($params)
    {
        //Custom link fb
        if (!empty($params['facebook']) && !preg_match('/^(http:|https:)\/\/?.*/',$params['facebook'])) {
            $params['facebook'] = 'https://'.$params['facebook'];
        }

        $member = Member::create(array(
            'email' => $params['email'],
            'khu_vực' => $params['khu_vực'],
            'password' => Hash::make($params['password']),
            'phone' => $params['phone'],
            'name' => $params['name'],
            'dateOfBirth' => $params['dateOfBirth'],
            'identification'=> $params['identification'],
            'university' => $params['university'],
            'year' => $params['year'],
            'facebook' => $params['facebook'],
            // 'location' => $params['location'],
            'speciality'=> $params['speciality'],
            // 'prices'=> $params['prices'],
            // 'shift' => $params['shift'],
            // 'extracurricular'=> $params['extracurricular'],
            'status'=>0,
            'is_send_mail'=>0,
            'score'=>0,
        ));


        $result['member'] = $member;
        return $result;
    }


    /**
     * @param $request
     * @return string
     */
    public static function addCV($request)
    {
        $CV = "";
        if (is_uploaded_file($request->file('CV'))) {
            $CV = $request->file('CV')->getClientOriginalName();
            $request->CV->move('CV', $CV);
        }
        return $CV;
    }
}
