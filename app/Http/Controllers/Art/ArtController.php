<?php

namespace App\Http\Controllers\Art;

use App\Http\Controllers\Controller;
use App\Http\Requests\DanceRequest;
use App\Http\Requests\InMusicRequest;
use App\Http\Requests\OperaRequest;
use App\Http\Requests\RecitationRequest;
use App\Http\Requests\VocalmTRequest;
use App\Http\Requests\VocalStudentRequest;
use App\Models\Dance;
use App\Models\Insmusic;
use App\Models\Opera;
use App\Models\Recitation;
use App\Models\Student;
use App\models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\demodRequest;
use App\Models\Vocality;
use Illuminate\Support\Facades\DB;

class ArtController extends Controller
{
    //
    /***声乐作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */


    Public function vocalmusic(demodRequest $request){

        $date=Vocality::add($request);
        return $date?
            json_success('声乐作品报名成功!',$date,200):
            json_fail('声乐作品报名失败!',null,100);

    }


    /***声乐指导老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */
    Public function vguidance(VocalmTRequest $request){


        $teacher_name=$request->get('teacher_name');
        $teacher_card=$request->get('teacher_card');
        $teacher_nation=$request->get('teacher_nation');
        $teacher_age=$request->get('teacher_age');
        $teacher_area=$request->get('teacher_area');
        $school_name=$request->get('school_name');
        $school_depa=$request->get('school_depa');
        $contact_number=$request->get('contact_number');
        $opus_id=$request->get('opus_id');
        $number=count((array)$teacher_name);
        if ($number>1){
        $date=Teacher::vocalmusicadd($teacher_name,$teacher_card,$teacher_nation,$teacher_age,$teacher_area,$school_name,
        $school_depa,$contact_number,$number,$opus_id);

          }
        else{
            $date=Teacher::vocalmusicadd2($teacher_name,$teacher_card,$teacher_nation,$teacher_age,$teacher_area,$school_name,
                $school_depa,$contact_number,$number,$opus_id);
        }
        return $date?
            json_success('声乐指导老师入库成功!',$date,200):
            json_fail('声乐指导老师入库失败!',null,100);

    }

    /***声乐学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function vstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::addstudent($request,$number);
        }
       else{
           $date=Student::addstudent2($request,$number);
       }


        return $date?
            json_success('声乐学生入库成功!',$date,200):
            json_fail('声乐学生入库失败!',null,100);

    }

    /***声乐指挥老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */
    Public function vcommand(VocalmTRequest $request){



        $school_name=$request->get('school_name');
        $number=count((array)$school_name);
        if ($number>1){
            $date=Teacher::vocalmusicadd3($request,$number);

        }
        else{
            $date=Teacher::vocalmusicadd4($request,$number);
        }

        return $date?
            json_success('声乐指挥老师入库成功!',$date,200):
            json_fail('声乐指挥老师入库失败!',null,100);

    }

    /***声乐伴奏学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function vbstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::addstudent4($request,$number);
        }
        else{
            $date=Student::addstudent3($request,$number);
        }


        return $date?
            json_success('声乐伴奏学生入库成功!',$date,200):
            json_fail('声乐伴奏学生入库失败!',null,100);

    }

    /***声乐伴奏老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function vbteacher(VocalmTRequest $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::vocalmusicadd5($request,$number);
        }
        else{
            $date=Teacher::vocalmusicadd6($request,$number);
        }


        return $date?
            json_success('声乐伴奏老师入库成功!',$date,200):
            json_fail('声乐伴奏老师入库失败!',null,100);

    }

    /***器乐作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function inmusic(InMusicRequest $request){

        $date=Insmusic::add($request);

        return $date?
            json_success('器乐作品报名成功!',$date,200):
            json_fail('器乐作品报名失败!',null,100);

    }

    /***器乐指导老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function iguidance(Request $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::inmusicadd($request,$number);
        }
        else{
            $date=Teacher::inmusicadd2($request,$number);
        }


        return $date?
            json_success('器乐指导老师入库成功!',$date,200):
            json_fail('器乐指导老师入库失败!',null,100);

    }

    /***器乐参演学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function istudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::iaddstudent($request,$number);
        }
        else{
            $date=Student::iaddstudent2($request,$number);
        }
        return $date?
            json_success('器乐参演学生入库成功!',$date,200):
            json_fail('器乐参演学生入库失败!',null,100);

    }

    /***器乐指挥老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function ibteacher(VocalmTRequest $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::imusicadd($request,$number);
        }
        else{
            $date=Teacher::imusicadd2($request,$number);
        }


        return $date?
            json_success('器乐指挥老师入库成功!',$date,200):
            json_fail('器乐指挥老师入库失败!',null,100);

    }

    /***器乐指挥学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function ibstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
            $date=Student::inaddstudent($request);
        return $date?
            json_success('器乐指挥学生入库成功!',$date,200):
            json_fail('器乐指挥学生入库失败!',null,100);
    }

    /***舞蹈作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function dance(DanceRequest $request){

        $date=Dance::add($request);

        return $date?
            json_success('舞蹈作品报名成功!',$date,200):
            json_fail('舞蹈作品报名失败!',null,100);

    }

    /***舞蹈指导老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function dguidance(VocalmTRequest $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::dmusicadd($request,$number);
        }
        else{
            $date=Teacher::dmusicadd2($request,$number);
        }


        return $date?
            json_success('舞蹈指导老师入库成功!',$date,200):
            json_fail('舞蹈指导老师入库失败!',null,100);

    }

    /***舞蹈参演学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function dstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::daddstudent($request,$number);
        }
        else{
            $date=Student::iaddstudent2($request,$number);
        }
        return $date?
            json_success('舞蹈参演学生入库成功!',$date,200):
            json_fail('舞蹈参演学生入库失败!',null,100);

    }

    /***戏曲作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function opera(OperaRequest $request){

        $date=Opera::add($request);

        return $date?
            json_success('戏曲作品报名成功!',$date,200):
            json_fail('戏曲作品报名失败!',null,100);

    }


    /***戏曲指导老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function opguidance(Request $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::opmusicadd($request,$number);
        }
        else{
            $date=Teacher::opmusicadd2($request,$number);
        }


        return $date?
            json_success('获取成功!',$date,200):
            json_fail('获取失败!',null,100);

    }

    /***戏曲参演学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function opstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::opaddstudent($request,$number);
        }
        else{
            $date=Student::opaddstudent2($request,$number);
        }
        return $date?
            json_success('戏曲参演学生入库成功!',$date,200):
            json_fail('戏曲参演学生入库失败!',null,100);

    }

    /***戏曲伴奏学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function opbstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::opaddstudent4($request,$number);
        }
        else{
            $date=Student::opaddstudent3($request,$number);
        }


        return $date?
            json_success('戏曲伴奏学生入库成功!',$date,200):
            json_fail('戏曲伴奏学生入库失败!',null,100);

    }

    /***戏曲伴奏老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function opbteacher(VocalmTRequest $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::opadd5($request,$number);
        }
        else{
            $date=Teacher::opadd6($request,$number);
        }


        return $date?
            json_success('戏曲伴奏老师入库成功!',$date,200):
            json_fail('戏曲伴奏老师入库失败!',null,100);

    }

    /***朗诵作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function recitation(RecitationRequest $request){

        $date=Recitation::add($request);

        return $date?
            json_success('朗诵作品报名成功!',$date,200):
            json_fail('朗诵作品报名失败!',null,100);

    }

    /***朗诵指导老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function reguidance(VocalmTRequest $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::remusicadd($request,$number);
        }
        else{
            $date=Teacher::remusicadd2($request,$number);
        }


        return $date?
            json_success('朗诵指导老师入库成功!',$date,200):
            json_fail('朗诵指导老师入库失败!',null,100);

    }
    /***朗诵参演学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function restudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::readdstudent($request,$number);
        }
        else{
            $date=Student::readdstudent2($request,$number);
        }
        return $date?
            json_success('朗诵参演学生入库成功!',$date,200):
            json_fail('朗诵参演学生入库失败!',null,100);

    }



    /***朗诵伴奏老师入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function rebteacher(VocalmTRequest $request){

        $teacher_name= $request->get('teacher_name');
        $number=count((array)$teacher_name);
        if ($number>1){
            $date=Teacher::readd5($request,$number);
        }
        else{
            $date=Teacher::readd6($request,$number);
        }


        return $date?
            json_success('朗诵伴奏老师入库成功!',$date,200):
            json_fail('朗诵伴奏老师入库失败!',null,100);

    }

    /***朗诵伴奏学生入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function rebstudent(VocalStudentRequest $request){

        $student_name= $request->get('student_name');
        $number=count((array)$student_name);
        if ($number>1){
            $date=Student::readdstudent4($request,$number);
        }
        else{
            $date=Student::readdstudent3($request,$number);
        }


        return $date?
            json_success('获取成功!',$date,200):
            json_fail('获取失败!',null,100);

    }

}
