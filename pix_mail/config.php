<?php
	$mail_type = 'ce';
	//-----------------------------------------------------------------------------------------
    $to_Email       = 'Nguyenthanhhien18@yahoo.com,khanh.diepbao@gmail.com'; //Replace with recipient email address
    $subject        = 'GOLEAN DETOX'; //Subject line for emails

    // your recaptcha secret key
    $secret = '';      // Add your reCAPTCHA secret key
    //-----------------------------------------------------------------------------------------

    // Language
    $language = 'EN';

    /* Mailchimp setting */
     /* Mailchimp setting */
    define('MC_APIKEY', '0d005c0c85199c938c227109690589a0-us19'); // Your API key from here - http://admin.mailchimp.com/account/api
    define('MC_LISTID', '57def7e583'); // List unique id from here - http://admin.mailchimp.com/lists/

    /* Campaign Monitor setting. */
    define('CM_APIKEY', ''); // Your APIKEY from here - https://pixfort.createsend.com/admin/account/
    define('CM_LISTID', ''); // List ID from here - https://www.campaignmonitor.com/api/getting-started/#listid

    /* GetResponse setting. To enable a setting, uncomment (remove the '#' at the start of the line)*/
    define('GR_APIKEY', ''); // Your API key from here - https://app.getresponse.com/my_api_key.html
    define('GR_CAMPAIGN', ''); // Campaign name from here - https://app.getresponse.com/campaign_list.html
    
    /* AWeber setting */
    define('AW_AUTHCODE', ''); // Your Authcode from here - https://auth.aweber.com/1.0/oauth/authorize_app/647b2efd
    define('AW_LISTNAME', ''); // List name from here - https://www.aweber.com/users/autoresponder/manage

    /* ActiveCampaign setting */
    define('ACTIVECAMPAIGN_URL', ''); // API_URL : Go to My Settings -> Developers
    define('ACTIVECAMPAIGN_API_KEY', ''); // API_KEY : Go to My Settings -> Developers
    define('list_id', ''); // API_KEY : Go to My Settings -> Developers

    /* MailerLite setting */
    define('MailerLite_API_KEY', ''); // API Key: Go to https://app.mailerlite.com/integrations/api/
    define('MailerLite_LIST_ID', ''); // LIST ID (GroupID): Go to https://app.mailerlite.com/integrations/api/

    /* FreshMail setting */
    define ( 'FM_API_KEY', '' ); // API Key: Go to https://app.freshmail.com/en/settings/integration/
    define ( 'FM_API_SECRET', '' ); // API Secret: Go to https://app.freshmail.com/en/settings/integration/
    define ( 'FM_list_id', '' ); // List's API key: Go to list -> Parameters

    /* Sendloop setting */
    define('Sendloop_API3_KEY', '');
    define('Sendloop_SUBDOMAIN', '');
?>