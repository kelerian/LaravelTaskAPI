<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\Status;
use App\Models\Types;
use Illuminate\Http\Request;

class PushController extends Controller
{
    public function db_push(){
//
        if(Projects::all()->count() < 0){
            Projects::insert([
                ["name"=>"Первый проект"],
                ["name"=>"Второй проект"],
                ["name"=>"Третий проект"],
                ["name"=>"Четвертый проект"]
            ]);
        }
        if(Status::all()->count() <0 ){
            Status::insert([
                ["name"=>"Новая"],
                ["name"=>"Выполняется"],
                ["name"=>"Тестирование"],
                ["name"=>"Завершена"]
            ]);}
        if(Types::all()->count() < 0){
            Types::insert([
                ["name"=>"Пожелание"],
                ["name"=>"Ошибка"],
                ["name"=>"Авария"],

            ]);}

        return redirect()->route('projects');
}}
