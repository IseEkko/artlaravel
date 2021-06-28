<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teacher";
    public $timestamps = true;
    protected $primaryKey = "teacher_id";
    protected $guarded = [];


    /*** 复数的指导老师入库
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
    public static function vocalmusicadd($teacher_name,$teacher_card,$teacher_nation,$teacher_age,$teacher_area,$school_name,
                                         $school_depa,$contact_number,$number,$opus_id){

        try{

            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 1,
                        'teacher_name' => $teacher_name[$i],
                        'teacher_card' => $teacher_card[$i],
                        'teacher_nation' => $teacher_nation[$i],
                        'teacher_age' => $teacher_age[$i],
                        'teacher_area' => $teacher_area[$i],
                        'school_name' => $school_name[$i],
                        'school_depa' => $school_depa[$i],
                        'contact_number' => $contact_number[$i],
                        'teacher_post' => 0,
                        'opus_id'=>$opus_id[$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指导老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** 一个指导老师入库
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
    public static function vocalmusicadd2($teacher_name,$teacher_card,$teacher_nation,$teacher_age,$teacher_area,$school_name,
                                         $school_depa,$contact_number,$number,$opus_id){

        try{
                $data=self::create(
                    [
                        'type_id' => 1,
                        'teacher_name' => $teacher_name,
                        'teacher_card' => $teacher_card,
                        'teacher_nation' => $teacher_nation,
                        'teacher_age' => $teacher_age,
                        'teacher_area' => $teacher_area,
                        'school_name' => $school_name,
                        'school_depa' => $school_depa,
                        'contact_number' => $contact_number,
                        'teacher_post' => 0,
                        'opus_id'=>$opus_id
                    ]
                );

            return $data;
        }catch(\Exception $e){
            logError('指导老师上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** 复数的指挥老师入库
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
    public static function vocalmusicadd3($request,$number){

        try{

            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 1,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 2,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** 一个指挥老师入库
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
    public static function vocalmusicadd4($request,$number){

        try{
                $data=self::create(
                    [
                        'type_id' => 1,
                        'teacher_name' => $request['teacher_name'],
                        'teacher_card' => $request['teacher_card'],
                        'teacher_nation' => $request['teacher_nation'],
                        'teacher_age' => $request['teacher_age'],
                        'teacher_area' => $request['teacher_area'],
                        'school_name' => $request['school_name'],
                        'school_depa' => $request['school_depa'],
                        'contact_number' => $request['contact_number'],
                        'teacher_post' => 2,
                        'opus_id'=> $request['opus_id']
                    ]
                );

            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** 复数的伴奏老师入库
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
    public static function vocalmusicadd5($request,$number){

        try{

            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 1,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 1,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数伴奏老师上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** 一个伴奏老师入库
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
    public static function vocalmusicadd6($request,$number){

        try{
            $data=self::create(
                [
                    'type_id' => 1,
                    'teacher_name' => $request['teacher_name'],
                    'teacher_card' => $request['teacher_card'],
                    'teacher_nation' => $request['teacher_nation'],
                    'teacher_age' => $request['teacher_age'],
                    'teacher_area' => $request['teacher_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'contact_number' => $request['contact_number'],
                    'teacher_post' => 1,
                    'opus_id'=> $request['opus_id']
                ]
            );

            return $data;
        }catch(\Exception $e){
            logError('复数伴奏老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** in复数的指导老师入库
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
    public static function inmusicadd($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 2,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 0,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** in指导老师入库
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
    public static function inmusicadd2($request,$number){

        try{


                $data=self::create(
                    [
                        'type_id' => 2,
                        'teacher_name' => $request['teacher_name'],
                        'teacher_card' => $request['teacher_card'],
                        'teacher_nation' => $request['teacher_nation'],
                        'teacher_age' => $request['teacher_age'],
                        'teacher_area' => $request['teacher_area'],
                        'school_name' => $request['school_name'],
                        'school_depa' => $request['school_depa'],
                        'contact_number' => $request['contact_number'],
                        'teacher_post' => 0,
                        'opus_id'=> $request['opus_id']
                    ]
                );

            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** in复数的指挥老师入库
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
    public static function imusicadd($request,$number){

        try{

            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 2,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 2,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('in复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** in指挥老师入库
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
    public static function imusicadd2($request,$number){

        try{

                $data=self::create(
                    [
                        'type_id' => 2,
                        'teacher_name' => $request['teacher_name'],
                        'teacher_card' => $request['teacher_card'],
                        'teacher_nation' => $request['teacher_nation'],
                        'teacher_age' => $request['teacher_age'],
                        'teacher_area' => $request['teacher_area'],
                        'school_name' => $request['school_name'],
                        'school_depa' => $request['school_depa'],
                        'contact_number' => $request['contact_number'],
                        'teacher_post' => 2,
                        'opus_id'=> $request['opus_id']
                    ]
                );

            return $data;
        }catch(\Exception $e){
            logError('in指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** d复数的指导老师入库
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
    public static function dmusicadd($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 3,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 0,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** d指导老师入库
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
    public static function dmusicadd2($request,$number){

        try{


            $data=self::create(
                [
                    'type_id' => 3,
                    'teacher_name' => $request['teacher_name'],
                    'teacher_card' => $request['teacher_card'],
                    'teacher_nation' => $request['teacher_nation'],
                    'teacher_age' => $request['teacher_age'],
                    'teacher_area' => $request['teacher_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'contact_number' => $request['contact_number'],
                    'teacher_post' => 0,
                    'opus_id'=> $request['opus_id']
                ]
            );

            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** op复数的指导老师入库
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
    public static function opmusicadd($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 4,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 0,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** op指导老师入库
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
    public static function opmusicadd2($request,$number){

        try{


            $data=self::create(
                [
                    'type_id' => 4,
                    'teacher_name' => $request['teacher_name'],
                    'teacher_card' => $request['teacher_card'],
                    'teacher_nation' => $request['teacher_nation'],
                    'teacher_age' => $request['teacher_age'],
                    'teacher_area' => $request['teacher_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'contact_number' => $request['contact_number'],
                    'teacher_post' => 0,
                    'opus_id'=> $request['opus_id']
                ]
            );

            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** op复数的伴奏老师入库
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
    public static function opadd5($request,$number){

        try{

            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 4,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 1,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数伴奏老师上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** op一个伴奏老师入库
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
    public static function opadd6($request,$number){

        try{
            $data=self::create(
                [
                    'type_id' => 4,
                    'teacher_name' => $request['teacher_name'],
                    'teacher_card' => $request['teacher_card'],
                    'teacher_nation' => $request['teacher_nation'],
                    'teacher_age' => $request['teacher_age'],
                    'teacher_area' => $request['teacher_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'contact_number' => $request['contact_number'],
                    'teacher_post' => 1,
                    'opus_id'=> $request['opus_id']
                ]
            );

            return $data;
        }catch(\Exception $e){
            logError('复数伴奏老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** re复数的指导老师入库
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
    public static function remusicadd($request,$number){

        try{
            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 5,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 0,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** re指导老师入库
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
    public static function remusicadd2($request,$number){

        try{


            $data=self::create(
                [
                    'type_id' => 5,
                    'teacher_name' => $request['teacher_name'],
                    'teacher_card' => $request['teacher_card'],
                    'teacher_nation' => $request['teacher_nation'],
                    'teacher_age' => $request['teacher_age'],
                    'teacher_area' => $request['teacher_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'contact_number' => $request['contact_number'],
                    'teacher_post' => 0,
                    'opus_id'=> $request['opus_id']
                ]
            );

            return $data;
        }catch(\Exception $e){
            logError('复数指挥老师上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** re复数的伴奏老师入库
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
    public static function readd5($request,$number){

        try{

            for($i=0;$i<$number;$i++){
                $data=self::create(
                    [
                        'type_id' => 5,
                        'teacher_name' => $request['teacher_name'][$i],
                        'teacher_card' => $request['teacher_card'][$i],
                        'teacher_nation' => $request['teacher_nation'][$i],
                        'teacher_age' => $request['teacher_age'][$i],
                        'teacher_area' => $request['teacher_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'teacher_post' => 1,
                        'opus_id'=> $request['opus_id'][$i]
                    ]
                );
            }
            return $data;
        }catch(\Exception $e){
            logError('复数伴奏老师上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** re一个伴奏老师入库
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
    public static function readd6($request,$number){

        try{
            $data=self::create(
                [
                    'type_id' => 5,
                    'teacher_name' => $request['teacher_name'],
                    'teacher_card' => $request['teacher_card'],
                    'teacher_nation' => $request['teacher_nation'],
                    'teacher_age' => $request['teacher_age'],
                    'teacher_area' => $request['teacher_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'contact_number' => $request['contact_number'],
                    'teacher_post' => 1,
                    'opus_id'=> $request['opus_id']
                ]
            );

            return $data;
        }catch(\Exception $e){
            logError('复数伴奏老师上传失败',[$e->getMessage()]);
            return null;

    /***
     * lzz
     * 工作坊作品指导教师信息上传
     * @param $request
     * @param $id
     * @return mixed
     */
    public static function lzz_creat_teacher($request){
        try {

            $data = self::create([
                'type_id'=>$request['type_id'],
                'opus_id'=>$request['opus_id'],
                'teacher_name'=>$request['teacher_name'],
                'teacher_card'=>$request['teacher_card'],
                'teacher_nation'=>$request['teacher_nation'],
                'teacher_age'=>$request['teacher_age'],
                'teacher_area'=>$request['teacher_area'],
                'school_name'=>$request['school_name'],
                'school_depa'=>$request['school_depa'],
                'contact_number'=>$request['contact_number'],
                'teacher_post'=>$request['teacher_post'],
            ]);
            return $data;
        } catch(\Exception $e){
            logError('工作坊作品教师信息上传错误',[$e->getMessage()]);

        }
    }
}
