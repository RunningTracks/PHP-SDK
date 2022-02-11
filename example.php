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

