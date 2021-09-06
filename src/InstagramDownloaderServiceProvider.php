<?php


namespace TenetUp\InstagramDownloader;


use Illuminate\Support\ServiceProvider;

class InstagramDownloaderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('InstagramDownloader' , function (){
            return new instagramDownloader;
        });
    }
    public function boot(){

    }
}
