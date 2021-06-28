<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    public $timestamps = true;
    protected $primaryKey = "student_id";
    protected $guarded = [];

    /*** 复数参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function addstudent($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 1,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 0

                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** 一个参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function addstudent2($request,$number){
        try{


                $data = self::create(
                    [
                        'type_id' => 1,
                        'opus_id' => $request['opus_id'],
                        'student_name' => $request['student_name'],
                        'student_card' => $request['student_card'],
                        'student_nation' => $request['student_nation'],
                        'student_age' => $request['student_age'],
                        'student_sex' => $request['student_sex'],
                        'student_area' => $request['student_area'],
                        'school_name' => $request['school_name'],
                        'school_depa' => $request['school_depa'],
                        'student_grade' => $request['student_grade'],
                        'major_type' => $request['major_type'],
                        'major_name' => $request['major_name'],
                        'student_number' => $request['student_number'],
                        'contact_number' => $request['contact_number'],
                        'student_post' => 0

                    ]
                );


            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** 一个伴奏学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function addstudent3($request,$number){
        try{


            $data = self::create(
                [
                    'type_id' => 1,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 1

                ]
            );


            return $data;
        }catch(\Exception $e){
            logError('伴奏学生上传失败',[$e->getMessage()]);
            return null;
        }
    }
    /*** 复数伴奏学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function addstudent4($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 1,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 1

                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('复数伴奏学生上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** in复数参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function iaddstudent($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 2,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 0
                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** in参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function iaddstudent2($request,$number){
        try{


                $data = self::create(
                    [
                        'type_id' => 2,
                        'opus_id' => $request['opus_id'],
                        'student_name' => $request['student_name'],
                        'student_card' => $request['student_card'],
                        'student_nation' => $request['student_nation'],
                        'student_age' => $request['student_age'],
                        'student_sex' => $request['student_sex'],
                        'student_area' => $request['student_area'],
                        'school_name' => $request['school_name'],
                        'school_depa' => $request['school_depa'],
                        'student_grade' => $request['student_grade'],
                        'major_type' => $request['major_type'],
                        'major_name' => $request['major_name'],
                        'student_number' => $request['student_number'],
                        'contact_number' => $request['contact_number'],
                        'student_post' => 0

                    ]
                );
            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** in指挥学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function inaddstudent($request){
        try{


            $data = self::create(
                [
                    'type_id' => 2,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 2
                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** d复数参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function daddstudent($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 3,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 0
                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** d参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function daddstudent2($request,$number){
        try{


            $data = self::create(
                [
                    'type_id' => 2,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 0

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('声乐信息上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** op复数参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function opaddstudent($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 4,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 0
                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('复数戏曲参演学生信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** op参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function opaddstudent2($request,$number){
        try{


            $data = self::create(
                [
                    'type_id' => 4,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 0

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('戏曲参演学生信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** op复数伴奏学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function opaddstudent4($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 4,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 1

                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('复数伴奏学生上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** op一个伴奏学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function opaddstudent3($request,$number){
        try{


            $data = self::create(
                [
                    'type_id' => 4,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 1

                ]
            );


            return $data;
        }catch(\Exception $e){
            logError('伴奏学生上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** re复数参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function readdstudent($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 5,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 0
                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('复数戏曲参演学生信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** re参演学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function readdstudent2($request,$number){
        try{


            $data = self::create(
                [
                    'type_id' => 5,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 0

                ]
            );
            return $data;
        }catch(\Exception $e){
            logError('戏曲参演学生信息上传失败',[$e->getMessage()]);
            return null;
        }
    }

    /*** re复数伴奏学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function readdstudent4($request,$number){
        try{

            for($i=0;$i<$number;$i++) {
                $data = self::create(
                    [
                        'type_id' => 5,
                        'opus_id' => $request['opus_id'][$i],
                        'student_name' => $request['student_name'][$i],
                        'student_card' => $request['student_card'][$i],
                        'student_nation' => $request['student_nation'][$i],
                        'student_age' => $request['student_age'][$i],
                        'student_sex' => $request['student_sex'][$i],
                        'student_area' => $request['student_area'][$i],
                        'school_name' => $request['school_name'][$i],
                        'school_depa' => $request['school_depa'][$i],
                        'student_grade' => $request['student_grade'][$i],
                        'major_type' => $request['major_type'][$i],
                        'major_name' => $request['major_name'][$i],
                        'student_number' => $request['student_number'][$i],
                        'contact_number' => $request['contact_number'][$i],
                        'student_post' => 1

                    ]
                );
            }

            return $data;
        }catch(\Exception $e){
            logError('复数伴奏学生上传失败',[$e->getMessage()]);
            return null;
        }
    }


    /*** re一个伴奏学生入库
     * @author zuoshengyu
     * @param $type_id
     * @param $opus_id
     * @param $student_name
     * @param $student_card
     * @param $student_nation
     * @param $student_age
     * @param $student_sex
     * @param $student_area
     * @param $school_depa
     * @param $student_grade
     * @param $student_number
     * @param $major_type
     * @param $major_name
     * @param $contact_number
     * @param $student_post
     * @return null
     */
    public static function readdstudent3($request,$number){
        try{


            $data = self::create(
                [
                    'type_id' => 5,
                    'opus_id' => $request['opus_id'],
                    'student_name' => $request['student_name'],
                    'student_card' => $request['student_card'],
                    'student_nation' => $request['student_nation'],
                    'student_age' => $request['student_age'],
                    'student_sex' => $request['student_sex'],
                    'student_area' => $request['student_area'],
                    'school_name' => $request['school_name'],
                    'school_depa' => $request['school_depa'],
                    'student_grade' => $request['student_grade'],
                    'major_type' => $request['major_type'],
                    'major_name' => $request['major_name'],
                    'student_number' => $request['student_number'],
                    'contact_number' => $request['contact_number'],
                    'student_post' => 1

                ]
            );


            return $data;
        }catch(\Exception $e){
            logError('伴奏学生上传失败',[$e->getMessage()]);
            return null;
        }
    }

}
