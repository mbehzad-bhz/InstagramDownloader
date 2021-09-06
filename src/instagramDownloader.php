<?php


namespace TenetUp\InstagramDownloader;


use Illuminate\Support\Facades\Http;

class instagramDownloader
{
    public $url;
    public $uniqueParam;
    public function __construct($url)
    {
        $this->url = $url;
        if ($this->parseURL() === false){
            return $this->generateMessage('incorrect url');
        }
        return $this;
    }

    public function getDetail(){
        $variable = array('shortcode' => $this->uniqueParam , 'include_reel' => false , 'include_logged_out' => true);
        $res = Http::get('https://www.instagram.com/graphql/query' , [
            'query_hash' => '6ff3f5c474a240353993056428fb851e',
            'variables' => json_encode($variable)
        ]);
        $res = json_decode($res);
        if (!$res->data->shortcode_media){
            return $this->generateMessage('incorrect url');
        }
        $id = $res->data->shortcode_media->owner->id;
        $variable = array('id' => $id , 'first' => 12);
        $response = Http::get('https://www.instagram.com/graphql/query' , [
            'query_hash' => '8c2a529969ee035a5063f2fc8602a0fd',
            'variables' => json_encode($variable)
        ]);
        $response = json_decode($response);
        $edges = $response->data->user->edge_owner_to_timeline_media->edges;
        $nodes = array();
        foreach ($edges as $item){
            if ($item->node->shortcode === $this->uniqueParam){
                array_push($nodes , $item);
            }
        }
        $nodes = json_decode(json_encode($nodes[0]));
        $result = array();
        if ($nodes->node->__typename === 'GraphVideo'){
            array_push($result , array('image' => $nodes->node->display_url , 'contentURL' => $nodes->node->video_url , 'isVideo' => true));
        }elseif ($nodes->node->__typename === 'GraphSidecar'){
            foreach ($nodes->node->edge_sidecar_to_children->edges as $item){
                if ($item->node->is_video == 'true'){
                    array_push($result , array('image' => $item->node->display_url , 'contentURL' => $item->node->video_url , 'isVideo' => true));
                }else{
                    array_push($result , array('image' => $item->node->display_url , 'contentURL' => $item->node->display_url , 'isVideo' => false));
                }
            }
        }elseif ($nodes->node->__typename === 'GraphImage'){
            array_push($result , array('image' => $item->node->display_url , 'contentURL' => $item->node->display_resources[0]->src , 'isVideo' => false));
        }
        return $this->generateMessage('success' , $result , 200);
    }
    private function parseURL(){
        try {
            if (substr($this->url , -1) === '/'){
                $this->url = substr($this->url, 0, -1);
            }
            $explode = explode('/' , $this->url);
            $this->uniqueParam = end($explode);
            return true;
        }catch (\Exception $exception){
            return false;
        }
    }
    private function generateMessage($message , $data = null , $code = 403){
        return array(
            'message' => $message,
            'data' => $data,
            'code' => $code
        );
    }
}
