<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    protected $table = "painting";
    public $timestamps = true;
    protected $primaryKey = "painting_id";
    protected $guarded = [];


    /*** 绘画作品信息入库
     * @author zuoshengyu
     * @param $vocality_type
     * @param $opus_time
     * @param $opus_name1
     * @param $is_originality1
     * @param $is_chineseopus1
     * @param $opus_name2
     * @param $is_originality2
     * @param $is_chineseopus2
     * @param $contact_name
     * @param $contact_number
     * @param $contact_address
     * @param $vocality_group
     * @param $performer_number
     * @param $opus_describe
     * @param $opus_file
     * @return null
     */
    public static function add($request){
        try{
            $data =self::create(
                [
                    'painting_type' => $request->get('painting_type'),
                    'opus_name' => $request->get('opus_name'),
                    'opus_instructor' => $request->get('opus_instructor'),
                    'create_time' => $request->get('create_time'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'opus_long' => $request->get('opus_long'),
                    'opus_wide' => $request->get('opus_wide'),
                    'painting_group' => $request->get('painting_group'),
                    'opus_file' => $request->get('opus_file'),
                    'author_brief' => $request->get('author_brief'),
                    'opus_brief' => $request->get('opus_brief'),

                ]
            );
            $data=self::select('painting_id')->where('author_brief',$request->get('author_brief'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('绘画信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
}
