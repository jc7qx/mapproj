<?php
    $homepage = file_get_contents('http://data.taipei/opendata/datalist/apiAccess?scope=resourceAquire&rid=9ba187c9-b07e-40bc-9aa5-8d3c9f1aad63');
    $data ="[".$homepage."]";
    echo $data;
?>


