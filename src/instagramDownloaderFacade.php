<?php


namespace TenetUp\InstagramDownloader;


use Illuminate\Support\Facades\Facade;

class instagramDownloaderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'InstagramDownloader';
    }
}
