<?php
namespace Page\Acceptance;

class Login
{
    // include url of current page
    public static $URL = '/';
    public $emailField = '#email';
    public $passwordField = '#passwd';
    public $loginButton = 'SubmitLogin';

     /**
     * @var AcceptanceTester
     */

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function login($email,$password)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->click('Sign in');
        $I->see('AUTHENTICATION');
        $I->fillField($this->emailField, $email);
        $I->fillField($this->passwordField,$password);
        $I->click($this->loginButton);
    }
}
