<?php 

class SignInCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function signIn(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('Sign in');
        $I->see('AUTHENTICATION');
        $I->fillField('#email', 'aaa@jjj.com');
        $I->fillField('#passwd', '12345');
        $I->click('SubmitLogin');
        $I->see('Jessica Tavares');
    }
}
