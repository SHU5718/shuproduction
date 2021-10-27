<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class LikeController extends Controller
{
    public function like()
    {

        // ユーザーインフォメーション
        session_start();
        $user_id = $_SESSION['id'];

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
                'ctime', date('Y-m-d H:i:s')
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

    public function show($id)
    {
        $like_counts = 0;
        $count_in_redis = Redis::get('likes_count'.$id);
        if (!is_null($count_in_redis)) {
            $like_counts += $count_in_redis;
        }
        $count_in_mysql = Like::where('product_id', $id)->first();
        if (!empty($count_in_mysql)) {
            $like_counts += $count_in_mysql->count;
        }
    }

    public function total()
    {
        $user_id = $_SESSION['id'];

        $post_id = DB::table('products')->select('id')->where('user_id', $user_id);

        $total_like_counts = 0;

        $count_in_redis = Redis::get('likes_count'.$post_id);
        if (!is_null($count_in_redis)) {
            $total_like_counts += $count_in_redis;
        }
        $count_in_mysql = Like::where('product_id', $post_id)->first();
        if (!empty($count_in_mysql)) {
            $total_like_counts += $count_in_mysql->count;
        }
    }

    public function button()
    {
        session_start();
        $user_id = $_SESSION['id'];

        $post_id = request('id');

        // product_idとuser_idで user_like_postテーブルの中 今ログインされたユーザーの評価記録の有無
        $mysql_like= DB::table('user_like_post')->where('product_id', $product_id)->where('user_id', $user_id)->first();

        // 評価記録あり：0を返す　|　評価記録なし：1を返す
        $redis_like = Redis::sadd($product_id, $user_id);

        // If Mysqlの中記録がない Redisから1を返した Like成功
        if (empty($mysql_like) && $redis_like) {
            return [
                'code' => 000,
                'message' => have,
            ];
        } else {
            return [
                'code' => 111,
                'message' => have-not,
            ];
        }
    }
}
