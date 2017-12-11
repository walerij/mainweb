<?php
namespace app\models;

class UserJoinForm extends Model{
    public $username;
    public $passowrd;
    public $confirmpassword;
    
    public function rules()
    {
        return
        [
            [['username','password','confirmpassword'],'required','message'=>'поле должно быть заполнено'],
            ['username','email','message'=>'поле не формата email'],
            ['confirmpassowrd','compare','compareAttribute'=>'password','message'=>'пароли не равны']
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


