<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\IdentityInterface;

class SignUpForm extends Model{
    public $username;
    public $password;
    public $password_repeat;

    // public static function getDb(){
    //     return Yii::$app->db;
    // }
    public function rules(){
        return [
            [["username","password"],"required"],
            ["username","unique","targetClass"=>"\app\models\User"],
            [["username","password"],"string","min"=>6,"max"=>12],
            // ["password","compare","compareAttribute"=>"password_repeat"]
        ];
    }
}