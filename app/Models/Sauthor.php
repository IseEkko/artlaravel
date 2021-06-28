<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sauthor extends Model
{
    protected $table = "sauthor";
    public $timestamps = true;
    protected $primaryKey = "sauthor_id";
    protected $guarded = [];

    /*** p作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function pauthor($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 6,
                        'sauthor_name' => $request['sauthor_name'][$i],
                        'sauthor_card' => $request['sauthor_card'][$i],
                        'sauthor_area' => $request['sauthor_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number'=> $request['contact_number'][$i],
                        'opus_id'=> $request['opus_id'][$i],

                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** p作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function pauthor2($request,$number){

        try{

                $data=self::create(
                    [
                        'type_id' => 6,
                        'sauthor_name' => $request['sauthor_name'],
                        'sauthor_card' => $request['sauthor_card'],
                        'sauthor_area' => $request['sauthor_area'],
                        'school_name' => $request['school_name'],
                        'school_depa' => $request['school_depa'],
                        'major_type' => $request['major_type'],
                        'major_name' => $request['major_name'],
                        'student_number' => $request['student_number'],
                        'contact_number'=> $request['contact_number'],
                        'opus_id'=> $request['opus_id'],

                    ]
                );
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** c作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function cauthor($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 7,
                        'sauthor_name' => $request['sauthor_name'][$i],
                        'sauthor_card' => $request['sauthor_card'][$i],
                        'sauthor_area' => $request['sauthor_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number'=> $request['contact_number'][$i],
                        'opus_id'=> $request['opus_id'][$i],

                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** p作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function cauthor2($request,$number){

        try{

            $data=self::create(
                [
                    'type_id' => 7,
                    'sauthor_name' => $request['sauthor_name'],
                    'sauthor_card' => $request['sauthor_card'],
                    'sauthor_area' => $request['sauthor_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number'=> $request['contact_number'],
                    'opus_id'=> $request['opus_id'],

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** ph作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function phauthor($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 8,
                        'sauthor_name' => $request['sauthor_name'][$i],
                        'sauthor_card' => $request['sauthor_card'][$i],
                        'sauthor_area' => $request['sauthor_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number'=> $request['contact_number'][$i],
                        'opus_id'=> $request['opus_id'][$i],

                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** ph作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function phauthor2($request,$number){

        try{

            $data=self::create(
                [
                    'type_id' => 8,
                    'sauthor_name' => $request['sauthor_name'],
                    'sauthor_card' => $request['sauthor_card'],
                    'sauthor_area' => $request['sauthor_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number'=> $request['contact_number'],
                    'opus_id'=> $request['opus_id'],

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** de作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function deauthor($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 9,
                        'sauthor_name' => $request['sauthor_name'][$i],
                        'sauthor_card' => $request['sauthor_card'][$i],
                        'sauthor_area' => $request['sauthor_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number'=> $request['contact_number'][$i],
                        'opus_id'=> $request['opus_id'][$i],

                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** de作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function deauthor2($request,$number){

        try{

            $data=self::create(
                [
                    'type_id' => 9,
                    'sauthor_name' => $request['sauthor_name'],
                    'sauthor_card' => $request['sauthor_card'],
                    'sauthor_area' => $request['sauthor_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number'=> $request['contact_number'],
                    'opus_id'=> $request['opus_id'],

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** 微电影作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function fauthor($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 10,
                        'sauthor_name' => $request['sauthor_name'][$i],
                        'sauthor_card' => $request['sauthor_card'][$i],
                        'sauthor_area' => $request['sauthor_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number'=> $request['contact_number'][$i],
                        'opus_id'=> $request['opus_id'][$i],

                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** 微电影作者入库
     * @author zuoshengyu
     * @param $type_id
     * @param $teacher_name
     * @param $teacher_card
     * @param $teacher_nation
     * @param $teacher_age
     * @param $teacher_area
     * @param $school_name
     * @param $school_depa
     * @param $contact_number
     * @param $opus_id
     * @return null
     */
    public static function fauthor2($request,$number){

        try{

            $data=self::create(
                [
                    'type_id' => 10,
                    'sauthor_name' => $request['sauthor_name'],
                    'sauthor_card' => $request['sauthor_card'],
                    'sauthor_area' => $request['sauthor_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number'=> $request['contact_number'],
                    'opus_id'=> $request['opus_id'],

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
}
