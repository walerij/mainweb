<?php
namespace app\models;
use yii\base\Model;
class UserJoinForm extends Model
{
    public $username;
    public $password;
    public $confirmpassword;
    public $cache_paysystem;
    public $cache_number;
    
    public function rules()
    {
        return
        [
            [['username','password','confirmpassword','cache_paysystem','cache_number'],'required','message'=>'поле должно быть заполнено'],
            ['username','email','message'=>'поле не формата email'],
            ['confirmpassword','compare','compareAttribute'=>'password','message'=>'пароли не равны']
        ];
    }
    
    public function setUserRecord($userrecord)
    {        
        $this->username = $userrecord->username;
        $this->password = md5($userrecord->password);
    }
        
    public function errorIfEmailUsed()
    {
        if(User::existsUsername($this->username))
            $this->addError('username','эта почта уже используется');

    }    
    
    
}


