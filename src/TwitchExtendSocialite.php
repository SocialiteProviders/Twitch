<?php
namespace SocialiteProviders\Twitch;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TwitchExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('twitch', __NAMESPACE__.'\Provider');
    }
}
