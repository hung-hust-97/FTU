<?php

namespace App\Http\Controllers;

use App\Mail\RegisterFinal;
use App\MemberFinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Mockery\Exception;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Response;
use App\APIReturnHelper;


class FinalController extends Controller
{

    //Đăng ký vòng chung kết
    public function registerFinal() {
        if (strtotime("now") <= strtotime("12:00 11 july 2020")) {
            return view('2019.pages.register_final');
        } else {
            return redirect(route('home'));
        }
    }




    public function requestRegister(Request $request)
    {
        if (strtotime("now") <= strtotime("12:00 11 july 2020")) {
            DB::beginTransaction();
            $helper = new APIReturnHelper();
            
            try {
                
                //Validate data
                $params = $request->all();
                $validator = Validator::make($params,[
                    'name'=>'required',
                    'phone'=>'required',
                    'email'=>['required','unique:member_final','regex:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'],
                    'facebook' => 'required',
                    'university' => 'required',
                    'speciality' => 'required',
                    'year' => 'required',
                    // 'place' => 'required',
                ],[
                    'name.required'=>'Họ về tên không được để trống',
                    'phone.required'=>'Số điện thoại không được để trống',
                    // 'place' => 'Mục tiêu không được để trống',
                    'email.required'=>'Họ về tên không được để trống',
                    'email.regex' => "Email không đúng định dạng",
                    'email.unique' => 'Email này đã được sử dụng',
                    'university.required'=>'Trường đại học không được để trống',
                    'speciality.required'=>'Chuyên ngành không được để trống',
                    'year.required'=>'Năm tốt nghiệp không được để trống',
                    'facebook.required'=>'Địa chỉ Facebook không được để trống',
                    ]);

                //Check dữ liệu với DB
                
                if($validator->fails()){
                    // dd($validator->errors());
                    // return redirect()->back()->withInput();
                    return array (
                        'success' => 0,
                        'messages' => $helper->getMessageErrors($validator->errors())
                    );

                }    
                
                $member = MemberFinal::registerMemberFinal($params);


                DB::commit();
                //Send email
                if ((!empty($member))&&(!empty($params['email']))) {
                    Mail::to($params['email'])->send(new RegisterFinal(array(
                        'name'=>$params['name']
                    )));
                }
                // return redirect(route('xacnhandangkychungket'));
                return array(
                    "success" => 1
                );

            }
            // catch(\Exception $ex){
            //     DB::rollback();
            //     return redirect()->back();

            // }
            catch(\Exception $ex){
                DB::rollback();
                return array(
                    "success" => 0,
                    "messages" => $ex->getMessage()
                );
    
            }
        } else {
            return [];
        }

    }
    public function confirmRegisterFinal(Request $request)
    {
        return view('2019.pages.register_confirm');
    }



    public function getMessageErrors($errors){
        $result = array();
        if(!empty($errors)){
            foreach ($errors->getMessages() as $key=>$value){
                $result[] = $value[0];
            }
        }
        return implode('; ',$result);
    }















}