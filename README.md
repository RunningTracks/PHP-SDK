# Running Tracks SDK for PHP Version 1
![PHP SDK](https://i.imgur.com/RZ7we6R.jpg)

This SDK has been provided as a means for users to quickly and easily access public endpoints and return data.

## Obtaining an API Key
You do not require an API Key from Running Tracks for public endpoints. If you are accessing a public endpoint, your api key and api secret will not be referenced or checked and will not count towards your limits.

## Example

```php

<?php

    ##/
    include 'runningtracks.class.php';

    ##/ You can obtain an API Key and Secret from runningtracks.net, but if you are accessing public endpoints you will not need to supply these credentials.
    $api_key='';
    $api_secret='';

    ##/ Confirm Key and Secret
    $obj = new RunningTracks($api_key,$api_secret);

    /*
        * Consult the REST API to determine the endpoints you wish to use
        * https://github.com/RunningTracks/Running-Tracks-API-Version-1/blob/main/rest-api.md
    */

    ##/ Return All Land Information
    $result = $obj->custom('map/locations/',array());
    ##/
    print_r($result);

```
