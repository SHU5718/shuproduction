<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Console\Command;

class SaveLikesToDisk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'likestodisk:save';

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
     * @return mixed
     */
    public function handle()
    {
        $liked_posts = Redis::scard('post_set');
        for ($i = 0; $i < $liked_posts; $i++) {
            $product_id = Redis::spop('post_set');
            $users = Redis::scard($product_id);
            for ($j = 0; $j < $users; $j++) {
                $user_id = Redis::spop($product_id);
                $key = 'post_user_like_'.$product_id.'_'.$user_id;

                $ctime = Redis::hget($key, 'ctime');

                DB::table('user_like_post')->insert([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'created_at' => $ctime
                ]);
            }

            $count = Redis::get('likes_count' . $product_id);

            $res = DB::table('likes')->where('product_id', $product_id)->first();
            if ($res) {
                $old_count = $res->count;
                $count += $old_count;
                DB::table('likes')->where('product_id', $product_id)->update(['count' => $count]);
            }else{
                DB::table('likes')->updateOrInsert([
                    'product_id' => $product_id,
                    'count' => $count,
                ]);
            }
        }
        Redis::flushDB();
    }
}
