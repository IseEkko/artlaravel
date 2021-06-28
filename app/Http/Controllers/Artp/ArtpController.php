<?php

namespace App\Http\Controllers\Artp;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Http\Requests\CaphyRequest;
use App\Http\Requests\demodRequest;
use App\Http\Requests\DesignRequest;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\PaintRequest;
use App\Http\Requests\PhophyRequest;
use App\Http\Requests\VocalStudentRequest;
use App\Models\Caphy;
use App\models\Design;
use App\models\Film;
use App\models\Painting;
use App\models\Phophy;
use App\models\Sauthor;
use App\Models\Student;
use App\Models\Vocality;
use Illuminate\Http\Request;

class ArtpController extends Controller
{
    //
    /***绘画作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function paint(PaintRequest $request){

        $date=Painting::add($request);

        return $date?
            json_success('绘画作品报名!',$date,200):
            json_fail('绘画作品报名!',null,100);

    }
    /***绘画作者入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function pauth(AuthorRequest $request){

        $student_number= $request->get('student_number');
        $number=count((array)$student_number);
        if ($number>1){
            $date=Sauthor::pauthor($request,$number);
        }
        else{
            $date=Sauthor::pauthor2($request,$number);
        }


        return $date?
            json_success('绘画作者入库成功!',$date,200):
            json_fail('绘画作者入库失败!',null,100);

    }
    /***书法作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function caphy(CaphyRequest $request){

        $date=Caphy::add($request);

        return $date?
            json_success('书法作品报名成功!',$date,200):
            json_fail('书法作品报名失败!',null,100);

    }
    /***书法作者入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function cauth(AuthorRequest $request){

        $student_number= $request->get('student_number');
        $number=count((array)$student_number);
        if ($number>1){
            $date=Sauthor::cauthor($request,$number);
        }
        else{
            $date=Sauthor::cauthor2($request,$number);
        }


        return $date?
            json_success('获取成功!',$date,200):
            json_fail('获取失败!',null,100);

    }

    /***摄影作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function phophy(PhophyRequest $request){

        $date=Phophy::add($request);

        return $date?
            json_success('摄影作品报名成功!',$date,200):
            json_fail('摄影作品报名失败!',null,100);

    }

    /***摄影作者入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function phauth(AuthorRequest $request){

        $student_number= $request->get('student_number');
        $number=count((array)$student_number);
        if ($number>1){
            $date=Sauthor::phauthor($request,$number);
        }
        else{
            $date=Sauthor::phauthor2($request,$number);
        }


        return $date?
            json_success('摄影作者入库成功!',$date,200):
            json_fail('摄影作者入库失败!',null,100);

    }

    /***设计作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function design(DesignRequest $request){

        $date=Design::add($request);

        return $date?
            json_success('计作品报名成功!',$date,200):
            json_fail('计作品报名失败!',null,100);

    }

    /***设计作者入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function deauth(AuthorRequest $request){

        $student_number= $request->get('student_number');
        $number=count((array)$student_number);
        if ($number>1){
            $date=Sauthor::deauthor($request,$number);
        }
        else{
            $date=Sauthor::deauthor2($request,$number);
        }


        return $date?
            json_success('设计作者入库成功!',$date,200):
            json_fail('设计作者入库失败!',null,100);

    }

    /***微电影作品报名
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function film(FilmRequest $request){

        $date=Film::add($request);

        return $date?
            json_success('微电影作品报名成功!',$date,200):
            json_fail('微电影作品报名失败!',null,100);

    }
    /***微电影作者入库
     * @author zuoshengyu
     * @param demodRequest $request
     * @return json
     */

    Public function fauth(AuthorRequest $request){

        $student_number= $request->get('student_number');
        $number=count((array)$student_number);
        if ($number>1){
            $date=Sauthor::fauthor($request,$number);
        }
        else{
            $date=Sauthor::fauthor2($request,$number);
        }


        return $date?
            json_success('微电影作者入库成功!',$date,200):
            json_fail('微电影作者入库失败!',null,100);

    }
}
