<?php

namespace App\Helpers;

use App\Models\Menu;
use App\Models\MenuGroup;

class Bodo {

    public static function enkrip($text) {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
        $encryption_iv = random_bytes($iv_length);
        $encryption_key = openssl_digest(php_uname(), 'MD5', true);
        $encryption = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv);
        return $encryption;
    }

    public static function dekrip($text) {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $decryption_iv = random_bytes($iv_length);
        $options = 0;
        $decryption_key = openssl_digest(php_uname(), 'MD5', true);
        $decryption = openssl_decrypt($text, $ciphering, $decryption_key, $options, $decryption_iv);
        return $decryption;
    }

    public static function menus() {
        return Menu::where('parent_id', '=', 0)
                        ->where('status', '=', 1)
                        ->where('is_hidden', '=', 0)
                        ->orderBy('order_no')
                        ->get();
    }

    public function groupMenu() {
        return MenuGroup::where('status', '=', 1)
                ->orderBy('order_no')
                ->get();
    }
}
