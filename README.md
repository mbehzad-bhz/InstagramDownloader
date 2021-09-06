# TenetUp-InstagramDownloader

this package use for download video and image from Instagram

> **NOTE:** These instructions are for the latest version of Laravel.


[![License](http://poser.pugx.org/tenetup/zarinpal/license)](https://packagist.org/packages/tenetup/zarinpal)




* [Installation](#installation)
* [Example](#Request)
* [Copyright and License](#copyright-and-license)


[![JetBrains](https://tenetup.com/tenetup.png)](https://tenetup.com)
## Installation



1. Install the package via Composer:

    ```sh
    $ composer require tenetup/instagram-downloader
    ```


## Example


```php
    $instagramDownloader = new instagramDownloader('https://www.instagram.com/p/CTR5ES4LkU2/');
    dd($instagramDownloader->getDetail());
```
> we just send your local image file after that you can save where you like 


sample response
```php
{
  "message": "success",
  "data": [
    {
      "image": "https://instagram.fevn1-3.fna.fbcdn.net/v/t51.2885-15/e35/240942751_1260224711085176_6182056288303936206_n.jpg?_nc_ht=instagram.fevn1-3.fna.fbcdn.net&_nc_cat=108&_nc_ohc=4ejatrmd9gEAX8ua1Xf&edm=APU89FABAAAA&ccb=7-4&oh=64cd3e45c4b1f89f56200b3beb59a5ae&oe=613C4E85&_nc_sid=86f79a",
      "contentURL": "https://instagram.fevn1-3.fna.fbcdn.net/v/t51.2885-15/e35/240942751_1260224711085176_6182056288303936206_n.jpg?_nc_ht=instagram.fevn1-3.fna.fbcdn.net&_nc_cat=108&_nc_ohc=4ejatrmd9gEAX8ua1Xf&edm=APU89FABAAAA&ccb=7-4&oh=64cd3e45c4b1f89f56200b3beb59a5ae&oe=613C4E85&_nc_sid=86f79a",
      "isVideo": false
    },
    {
      "image": "https://instagram.fevn1-1.fna.fbcdn.net/v/t51.2885-15/e35/240947331_2649935818642930_8159513102084948940_n.jpg?_nc_ht=instagram.fevn1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=SQ-fpaDd08QAX_Ej8CV&edm=APU89FABAAAA&ccb=7-4&oh=921168464ea7e25d7910c7784ed1a470&oe=613D4CA3&_nc_sid=86f79a",
      "contentURL": "https://instagram.fevn1-1.fna.fbcdn.net/v/t51.2885-15/e35/240947331_2649935818642930_8159513102084948940_n.jpg?_nc_ht=instagram.fevn1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=SQ-fpaDd08QAX_Ej8CV&edm=APU89FABAAAA&ccb=7-4&oh=921168464ea7e25d7910c7784ed1a470&oe=613D4CA3&_nc_sid=86f79a",
      "isVideo": false
    },
    {
      "image": "https://instagram.fevn1-2.fna.fbcdn.net/v/t51.2885-15/e35/240942933_522573639036303_4486886847428510560_n.jpg?_nc_ht=instagram.fevn1-2.fna.fbcdn.net&_nc_cat=103&_nc_ohc=I_j9XuAzySYAX_ujRt3&edm=APU89FABAAAA&ccb=7-4&oh=fc288f63684d9b885328ef4a52877231&oe=613C6A72&_nc_sid=86f79a",
      "contentURL": "https://instagram.fevn1-2.fna.fbcdn.net/v/t51.2885-15/e35/240942933_522573639036303_4486886847428510560_n.jpg?_nc_ht=instagram.fevn1-2.fna.fbcdn.net&_nc_cat=103&_nc_ohc=I_j9XuAzySYAX_ujRt3&edm=APU89FABAAAA&ccb=7-4&oh=fc288f63684d9b885328ef4a52877231&oe=613C6A72&_nc_sid=86f79a",
      "isVideo": false
    },
    {
      "image": "https://instagram.fevn1-1.fna.fbcdn.net/v/t51.2885-15/e35/240990654_625932278387894_7820318320394560603_n.jpg?_nc_ht=instagram.fevn1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=Off8oyW8w-QAX-lw5mE&edm=APU89FABAAAA&ccb=7-4&oh=233668cf8e653797701242bd4f955af1&oe=613D8BDB&_nc_sid=86f79a",
      "contentURL": "https://instagram.fevn1-1.fna.fbcdn.net/v/t51.2885-15/e35/240990654_625932278387894_7820318320394560603_n.jpg?_nc_ht=instagram.fevn1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=Off8oyW8w-QAX-lw5mE&edm=APU89FABAAAA&ccb=7-4&oh=233668cf8e653797701242bd4f955af1&oe=613D8BDB&_nc_sid=86f79a",
      "isVideo": false
    },
    {
      "image": "https://instagram.fevn1-3.fna.fbcdn.net/v/t51.2885-15/e35/240892687_4306552179431333_415137314335917993_n.jpg?_nc_ht=instagram.fevn1-3.fna.fbcdn.net&_nc_cat=105&_nc_ohc=l1SxOWAZajgAX8sLBqZ&edm=APU89FABAAAA&ccb=7-4&oh=1204f4fd9c2cb9a490aee2f51171d7c6&oe=613DB45C&_nc_sid=86f79a",
      "contentURL": "https://instagram.fevn1-3.fna.fbcdn.net/v/t51.2885-15/e35/240892687_4306552179431333_415137314335917993_n.jpg?_nc_ht=instagram.fevn1-3.fna.fbcdn.net&_nc_cat=105&_nc_ohc=l1SxOWAZajgAX8sLBqZ&edm=APU89FABAAAA&ccb=7-4&oh=1204f4fd9c2cb9a490aee2f51171d7c6&oe=613DB45C&_nc_sid=86f79a",
      "isVideo": false
    },
    {
      "image": "https://instagram.fevn1-2.fna.fbcdn.net/v/t51.2885-15/e35/241019545_386536389527515_5706791301670676094_n.jpg?_nc_ht=instagram.fevn1-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=uxzEwrPbd8MAX9y5X6R&edm=APU89FABAAAA&ccb=7-4&oh=555db4c2b1f80287ae92f348c441cf91&oe=613C3265&_nc_sid=86f79a",
      "contentURL": "https://instagram.fevn1-2.fna.fbcdn.net/v/t51.2885-15/e35/241019545_386536389527515_5706791301670676094_n.jpg?_nc_ht=instagram.fevn1-2.fna.fbcdn.net&_nc_cat=107&_nc_ohc=uxzEwrPbd8MAX9y5X6R&edm=APU89FABAAAA&ccb=7-4&oh=555db4c2b1f80287ae92f348c441cf91&oe=613C3265&_nc_sid=86f79a",
      "isVideo": false
    }
  ],
  "code": 200
}
```
```php
{
  "message": "incorrect url",
  "data": null,
  "code": 403
}
```



## Copyright and License

[TenetUp-InstagramDownloader](https://github.com/mbehzad-bhz/InstagramDownloader)
was written by [majid behzadnasab](https://github.com/mbehzad-bhz) , [pooria noruzi](https://github.com/pooria-noruzi) and is released under the
[MIT License](LICENSE.md).

Copyright (c) 2021 TenetUp Company
