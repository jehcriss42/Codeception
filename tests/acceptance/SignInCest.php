<?php 

class SignInCest
{
    // tests
    function showUserProfile(AcceptanceTester $I, \Page\Acceptance\Login $loginPage)
    {
        $loginPage->login('aaa@jjj.com', '12345');
        $I->see('Jessica Tavares');
    }
}
