<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dance extends Model
{
    protected $table = "dance";
    public $timestamps = true;
    protected $primaryKey = "dance_id";
    protected $guarded = [];


    /*** 舞蹈作品信息入库
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
                    'dance_type' => $request->get('dance_type'),
                    'opus_time' => $request->get('opus_time'),
                    'opus_name' => $request->get('opus_name'),
                    'performer_number' => $request->get('performer_number'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'dance_group' => $request->get('dance_group'),
                    'is_originality' => $request->get('is_originality'),
                    'opus_describe' => $request->get('opus_describe'),
                    'opus_file' => $request->get('opus_file')

                ]
            );
            $data=self::select('dance_id')->where('opus_describe',$request->get('opus_describe'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
}
