<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Registered' => 
    array (
      0 => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
    ),
    'SocialiteProviders\\Manager\\SocialiteWasCalled' => 
    array (
      0 => 'SocialiteProviders\\LinkedIn\\LinkedInExtendSocialite@handle',
      1 => 'SocialiteProviders\\Google\\GoogleExtendSocialite@handle',
      2 => 'SocialiteProviders\\Facebook\\FacebookExtendSocialite@handle',
    ),
  ),
);