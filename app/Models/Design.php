<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $table = "design";
    public $timestamps = true;
    protected $primaryKey = "design_id";
    protected $guarded = [];

    /*** 设计作品信息入库
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
                    'design_type' => $request->get('design_type'),
                    'opus_name' => $request->get('opus_name'),
                    'opus_instructor' => $request->get('opus_instructor'),
                    'create_time' => $request->get('create_time'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'opus_long' => $request->get('opus_long'),
                    'opus_wide' => $request->get('opus_wide'),
                    'design_group' => $request->get('design_group'),
                    'opus_file' => $request->get('opus_file'),
                    'author_brief' => $request->get('author_brief'),
                    'opus_brief' => $request->get('opus_brief'),

                ]
            );
            $data=self::select('design_id')->where('author_brief',$request->get('author_brief'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
}
