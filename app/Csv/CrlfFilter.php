<?php

namespace App\Csv;

use Exception;

class CrlfFilter {

/**
 * 改行コードをCR+LFに置換する
 *
 * @param string $in
 * @param array  $out
 * @param array  $consumed
 * @param array  $closing
 * @return int
 * @throws Exception
 */
    public function filter($in, $out, &$consumed, $closing) {
        while ($bucket = stream_bucket_make_writeable($in)) {
	    // 改行コードを消す
            $bucket->data = preg_replace("/\n$/", '', $bucket->data);
            $bucket->data = preg_replace("/\r$/", '', $bucket->data);

	    // 改行コードを付ける
            $bucket->data = $bucket->data . "\r\n";

	    // データの長さが変わるのでconsumedを更新
	    // See: https://www.php.net/manual/ja/php-user-filter.filter.php
            $consumed += $bucket->datalen;

            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;
    }
}
