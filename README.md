# lib-pusher

[pusher.com](https://pusher.com/) library untuk phun. Module ini akan menambah
satu service dengan nama `pusher` yang bisa dipanggil dari kontroler dengan
perintah `$this->pusher`.

Tambahkan konfigurasi pusher pada konfigurasi aplikasi sebagai berikut:

```php
<?php

return [
    '_name' => 'Phun',
    ...,
    'pusher' => [
        'id'        => '',
        'secret'    => '',
        'key'       => '',
        'cluster'   => ''
    ]
];
```

dan trigger/broadcast event dengan perintah berikut dari kontroler.

```php

$this->pusher->trigger($channel, $event, $data);

```

Untuk informasi lebih lanjut dan lebih lengkap tentang penggunaan masing-masing
method, dan parameternya, silahkan mengacu ke dokumentasi resmi 
[php-pusher](https://github.com/pusher/pusher-http-php).