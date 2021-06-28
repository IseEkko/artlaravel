<?php
/*
 * @Author: Alexcutest
 * @Date: 2021-06-28 11:29:08
 * @LastEditTime: 2021-06-28 16:52:31
 * @LastEditors: Alexcutest
 * @Description: 
 * @FilePath: /artlaravel-1/app/Models/Insmusic.php
 * Learn and live
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insmusic extends Model
{
    protected $table = "insmusic";
    public $timestamps = true;
    protected $primaryKey = "insmusic_id";
    protected $guarded = [];

    /**
     * @Author: Alexcutest
     * @description: 器乐作品统计 
     * @param {*} $opus_status
     * @return {*}
     */
    public static function per_show($opus_status)
    {

        try {
            if ($opus_status == 0) {

                $res = Insmusic::where('opus_status', '=', 0)
                    ->select('insmusic_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'insmusic_type', 'performer_number', 'opus_status')
                    ->get();

                return $res ?
                    $res :
                    false;
            } elseif ($opus_status == 1) {

                $res = Insmusic::where('opus_status', '=', 1)
                    ->select('insmusic_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'insmusic_type', 'performer_number', 'opus_status')
                    ->get();

                return $res ?
                    $res :
                    false;
            }
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    /**
     * @Author: Alexcutest
     * @description: 器乐表删除
     * @param {*} $opus_id
     * @return {*}
     */
    public static function per_delete($opus_id)
    {
        try {
            $res = Insmusic::where('insmusic_id', '=', $opus_id)
                ->delete();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }


    /**
     * @Author: Alexcutest
     * @description: 搜索
     * @param {*} $opus_name
     * @return {*}
     */
    public static function search_show($opus_name)
    {
        try {
            $res = Insmusic::where('opus_name', '=', $opus_name)
                ->select('insmusic_id', 'opus_name', 'contact_name', 'contact_number', 'contact_address', 'insmusic_type', 'performer_number', 'opus_status')

                ->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;



    /*** 器乐作品信息入库
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
                    'insmusic_type' => $request->get('insmusic_type'),
                    'opus_time' => $request->get('opus_time'),
                    'opus_name' => $request->get('opus_name'),
                    'performer_number' => $request->get('performer_number'),
                    'contact_name' => $request->get('contact_name'),
                    'contact_number' => $request->get('contact_number'),
                    'contact_address' => $request->get('contact_address'),
                    'insmusic_group' => $request->get('insmusic_group'),
                    'is_originality' => $request->get('is_originality'),
                    'opus_describe' => $request->get('opus_describe'),
                    'opus_file' => $request->get('opus_file')

                ]
            );
            $data=self::select('insmusic_id')->where('opus_describe',$request->get('opus_describe'))
                ->get();
            return $data;
        }catch(\Exception $e){
            logError('器乐信息上传失败',[$e->getMessage()]);
            return null;

        }
    }
}
