<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yt_admin_user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property integer $order
 * @property string $about_us
 * @property string $access_token
 * @property string $auth_time
 * @property string $create_time
 */
class YtAdminUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yt_admin_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'about_us', 'access_token'], 'required'],
            [['order'], 'integer'],
            [['about_us'], 'string'],
            [['auth_time', 'create_time'], 'safe'],
            [['username'], 'string', 'max' => 64],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash'], 'string', 'max' => 255],
            [['access_token'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户id',
            'username' => '成员名称。长度为1~64个字符',
            'auth_key' => 'auth_key',
            'password_hash' => '用户密码hash',
            'order' => '排序，默认为0',
            'about_us' => 'About Us',
            'access_token' => '用户登录token',
            'auth_time' => '过期时间',
            'create_time' => '创建时间',
        ];
    }
}
