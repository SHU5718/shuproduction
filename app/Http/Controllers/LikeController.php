<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LikeController extends Controller
{
    public function like()
    {
        // ユーザーインフォメーション
        $user_id = request()->user()->id;

        // postインフォメーション
        $product_id = request('id');

        // Post_set　Redisのsetで評価されたpostを保存
        Redis::sadd('post_set', $product_id);

        // product_idとuser_idで user_like_postテーブルの中 今ログインされたユーザーの評価記録の有無
        $mysql_like= DB::table('user_like_post')->where('product_id', $product_id)->where('user_id', $user_id)->first();

        // 評価記録あり：0を返す　|　評価記録なし：1を返す
        $redis_like = Redis::sadd($product_id, $user_id);

        // If Mysqlの中記録がない Redisから1を返した Like成功
        if (empty($mysql_like) && $redis_like) {
            // 評価数　＋1
            Redis::incr('likes_count' . $product_id);
            // ユーザーのordered setにpost idをinsert
            Redis::zadd('user:' . $user_id, strtotime(now()), $product_id);
            // hashでsnapshotを保存
            Redis::hmset('post_user_like_'.$product_id.'_'.$user_id,
                'user_id', $user_id,
                'product_id', $product_id,
                'ctime', now()
            );

            // Like成功
            return [
                'code' => 200,
                'msg' => 'LIKE',
            ];

            // もしMysqlやRedisの中で記録がある場合
        } else {
            // 評価数-1
            Redis::decr('likes_count' . $product_id);
            // このpostのSetの中から今ログインしたユーザーのユーザーIDを削除
            Redis::srem($product_id, $user_id);
            // 今ログインしたユーザーの評価記録の中からこのpostを削除
            Redis::zrem('user:' . $user_id, $product_id);
            // Mysqlからこの評価を削除
            DB::table('user_like_post')->where('product_id', $product_id)->where('user_id', $user_id)->delete();

            // Unlike成功
            return [
                'code' => 202,
                'msg' => 'UNLIKE'
            ];
        }
    }
}