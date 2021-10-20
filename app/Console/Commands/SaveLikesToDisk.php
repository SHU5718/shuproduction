<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaveLikesToDisk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // count how many post been liked in Redis
        $like_posts = Redis::scard('post_set');
        // loop X time for X posts been liked
        for ($i = 0; $i < $liked_posts; $i++) {
            // pop post from set
            $product_id = Redis::spop('post_set');
            // product_idのsetの中のliked user数
            $users = Redis::scard($product_id);
            // loop X time for X user liked
            for ($j = 0; $j < $users; $j++) {
                //　userを取り出す
                $user_id = Redis::spop($product_id);
                // product_idとuser_idでsnapshotのhashからインフォを取り出す
                $key = 'post_user_like_'.$product_id.'_'.$user_id;
                $ctime = Redis::hget($key, 'ctime');

                // user_like_postテーブルに保存
                DB::table('user_like_post')->insert([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'created_at' => $ctime,
                ]);
            }

            // product_idのsetからlike countを取り出す
            $count = Redis::get('likes_count' . $product_id);

            // Mysql likesのproduct_idの中からlike countを取り出す
            $res= DB::table('likes')->where('product_id', $product_id)->first();
            if ($res) {
                // 記録があれば 元のcountを取り出す
                $old_count = $res->count;
                // 元count＋新count＝count
                $count += $old_count;
                DB::table('likes')->where('product_id', $product_id)->update(['count' => $count]);
            } else {
                // 記録がない場合 insert
                DB::table('likes')->updateOrInsert([
                    'product_id' => $product_id,
                    'count' => $count,
                ]);
            }
        }
        // fluch cache
        Redis::flushDB();
    }
}
