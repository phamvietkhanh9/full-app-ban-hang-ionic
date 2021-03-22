<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;
use Mail;
class AppUser extends Authenticatable
{
   protected $table = 'app_user';

   public function addNew($data)
   {
     $count = AppUser::where('email',$data['email'])->count();

     if($count == 0)
     {
        $add                = new AppUser;
        $add->name          = $data['name'];
        $add->email         = $data['email'];
        $add->phone         = $data['phone'];
        $add->password      = $data['password'];
        $add->save();

        return ['msg' => 'done','user_id' => $add->id];
     }
     else
     {
        return ['msg' => 'Rất tiếc! Email này đã tồn tại.'];
     }
   }

   public function login($data)
   {
     $chk = AppUser::where('email',$data['email'])->where('password',$data['password'])->first();

     if(isset($chk->id))
     {
        return ['msg' => 'done','user_id' => $chk->id];
     }
     else
     {
        return ['msg' => 'Rất tiếc! Thông tin đăng nhập không đúng'];
     }
   }

   public function updateInfo($data,$id)
   {
      $count = AppUser::where('id','!=',$id)->where('email',$data['email'])->count();

     if($count == 0)
     {
        $add                = AppUser::find($id);
        $add->name          = $data['name'];
        $add->email         = $data['email'];
        $add->phone         = $data['phone'];
        
        if(isset($data['password']))
        {
          $add->password    = $data['password'];
        }

        $add->save();

        return ['msg' => 'done','user_id' => $add->id,'data' => $add];
     }
     else
     {
        return ['msg' => 'Rất tiếc! Email này đã tồn tại.'];
     }
   }

   public function forgot($data)
    {
        $res = AppUser::where('email',$data['email'])->first();

        if(isset($res->id))
        {
            $otp = rand(1111,9999);

            $res->otp = $otp;
            $res->save();

           Mail::send('email',['res' => $res], function($message) use($res)
           {     
              $message->to($res->email)->subject("Lấy lại mật khẩu");
                    
            });

            $return = ['msg' => 'done','user_id' => $res->id];
        }
        else
        {
            $return = ['msg' => 'error','error' => 'Xin lỗi! Email này không chưa được đăng ký.'];
        }

        return $return;
    }

    public function verify($data)
    {
        $res = AppUser::where('id',$data['user_id'])->where('otp',$data['otp'])->first();

        if(isset($res->id))
        {
            $return = ['msg' => 'done','user_id' => $res->id];
        }
        else
        {
            $return = ['msg' => 'error','error' => 'Xin lỗi! Mã OTP không đúng.'];
        }

        return $return;
    }

    public function updatePassword($data)
    {
        $res = AppUser::where('id',$data['user_id'])->first();

        if(isset($res->id))
        {
            $res->password = $data['password'];
            $res->save();

            $return = ['msg' => 'done','user_id' => $res->id];
        }
        else
        {
            $return = ['msg' => 'error','error' => 'Xin lỗi! Đã xảy ra lỗi.'];
        }

        return $return;
    }

    public function countOrder($id)
    {
        return Order::where('user_id',$id)->where('status','>',0)->count();
    }
}
