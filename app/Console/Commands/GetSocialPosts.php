<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\SocialPost;
use Carbon\Carbon;

class GetSocialPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:GetSocialPosts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets social posts and stores in database';

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
        $client = new Client(['verify' => false]);
        $response = $client->request('GET', config('social.rss'));

        $xml = simplexml_load_string($response->getBody());
        $namespaces = $xml->getNamespaces(true);
        foreach ($xml->channel->item as $item) {
            $socialPost = SocialPost::firstOrNew(['socialId' => $item->children($namespaces['dc'])->creator->__toString().'_'.$item->title->__toString()]);
            $socialPost->socialId = $item->children($namespaces['dc'])->creator->__toString().'_'.$item->title->__toString();
            $socialPost->text = $item->description->__toString();
            $socialPost->pubDate =  Carbon::parse($item->pubDate->__toString());
            $socialPost->platform = $item->children($namespaces['dc'])->creator->__toString();
            $socialPost->socialUrl = $item->link->__toString();
            $socialPost->save();
        }

        $this->info('finished GetSocialPosts');
    }
}
