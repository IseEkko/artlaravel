<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opera extends Model
{
    protected $table = "opera";
    public $timestamps = true;
    protected $primaryKey = "opera_id";
    protected $guarded = [];

    /*** 戏剧作品信息入库
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
                    'opera_type' => $request->get('opera_type'),
                    'opus_time' => $request->get('opus_time'),
                    'opus_name' => $request->get('opus_name'),
                    'performer_number' => $request->get('performer_number'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'opera_group' => $request->get('opera_group'),
                    'is_originality' => $request->get('is_originality'),
                    'opus_describe' => $request->get('opus_describe'),
                    'opus_file' => $request->get('opus_file')

                ]
            );
            $data=self::select('opera_id')->where('opus_describe',$request->get('opus_describe'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
}
