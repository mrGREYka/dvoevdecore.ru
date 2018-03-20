<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $reCaptcha;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            //[['name', 'email', 'body'], 'required'],
            ['name', 'required', 'message'=>'Обязательно укажите Ваше имя.'],
            ['email', 'required', 'message'=>'Обязательно укажите Ваш почтовый адрес.'],
            ['body', 'required', 'message'=>'Обязательно укажите Ваше сообщение.'],
            // email has to be a valid email address
            ['email', 'email', 'message'=>'Некорректный e-mail адрес.' ],
            // verifyCode needs to be entered correctly
            
            //['verifyCode', 'captcha', 'message'=>'Неправильно указана каптча.'],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LeQl00UAAAAABbPqB1eaY5uDyg-_TfXl-NagDVV', 'uncheckedMessage' => 'Please confirm that you are not a bot.'],
            
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email, $body)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['mail@dvoevdecore.ru' => $this->name])
                ->setSubject('обращение с сайта dvoevdecore.ru')
                ->setHTMLBody($body)
                ->send();

            return true;
        }
        return false;
    }
}
