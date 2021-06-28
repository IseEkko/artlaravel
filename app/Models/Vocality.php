<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vocality extends Model
{
    protected $table = "vocality";
    public $timestamps = true;
    protected $primaryKey = "vocality_id";
    protected $guarded = [];


    /*** 声乐作品信息入库
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
                    'vocality_type' => $request->get('vocality_type'),
                    'opus_time' => $request->get('opus_time'),
                    'opus_name1' => $request->get('opus_name1'),
                    'is_originality1' => $request->get('is_originality1'),
                    'is_chineseopus1' => $request->get('is_chineseopus1'),
                    'opus_name2' => $request->get('opus_name2'),
                    'is_originality2' => $request->get('is_originality2'),
                    'is_chineseopus2' => $request->get('is_chineseopus2'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'vocality_group' => $request->get('vocality_group'),
                    'performer_number' => $request->get('performer_number'),
                    'opus_describe' => $request->get('opus_describe'),
                    'opus_file' => $request->get('opus_file')

                ]
            );
            $data=self::select('vocality_id')->where('opus_describe',$request->get('opus_describe'))
            ->get();
            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
}
