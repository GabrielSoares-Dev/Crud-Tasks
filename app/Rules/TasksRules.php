<?php


namespace App\Rules;


class TasksRules
{
    public  function getRules(){
        return [
            'title'=> 'required',
            'description'=> 'required',
            'importance' => ['required','in:HIGH,MEDIUM,LOW']
        ];
    }
}


