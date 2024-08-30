<?php
    function includeAndFetchData($helperFile, $dataFunction) {
        if (
            $_SERVER['REQUEST_URI'] === '/baixadawebstudio/' || 
            $_SERVER['REQUEST_URI'] === '/' ||
            $_SERVER['REQUEST_URI'] === '?i=1' ||
            $_SERVER['REQUEST_URI'] === '?i=2'
        ) {
            include "helpers/{$helperFile}.php";
        } else {
            include "../helpers/{$helperFile}.php";
        }
    
        $data = $dataFunction();
        return $data;
    }
    
    $worksData = includeAndFetchData('get-works-data', 'getWorksData');
    if ($worksData):
        include '../components/works.php';
    endif;
    
    $bannerData = includeAndFetchData('get-banner-data', 'getBannerData');
    if ($bannerData):
        include '../helpers/get-banner-data.php';
    endif;
    
    $offerData = includeAndFetchData('get-offer-data', 'getOfferData');
    if ($offerData):
        include '../components/offer.php';
    endif;
    
    $hiringData = includeAndFetchData('get-hiring-data', 'getHiringData');
    if ($hiringData):
        include '../components/hiring.php';
    endif;
    