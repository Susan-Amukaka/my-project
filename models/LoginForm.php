<?php

declare(strict_types=1);

namespace app\models;

use Yii;
use yii\base\Model;
use yii\base\Security;

class LoginForm extends Model
{
    public string $username = '';
    public string $password = '';
    public bool $rememberMe = true;

    private Security $security;

    public function __construct(Security $security, $config = [])
    {
        $this->security = $security;
        parent::__construct($config);
    }

    public function rules(): array
    {
        return [
            [['username', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword(string $attribute): void
    {
        if (!$this->hasErrors()) {
            $user = User::findByUsername($this->username);

            if (
                !$user ||
                !$this->security->validatePassword(
                    $this->password,
                    $user->passwordHash
                )
            ) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    public function login(): bool
    {
        if ($this->validate()) {
            $user = User::findByUsername($this->username);

            return Yii::$app->user->login(
                $user,
                $this->rememberMe ? 3600 * 24 * 30 : 0
            );
        }

        return false;
    }
}