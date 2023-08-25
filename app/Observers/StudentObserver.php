<?php

namespace App\Observers;

use App\Models\Student;
use Illuminate\Support\Facades\Mail;

class StudentObserver
{
    /**
     * Handle the Student "created" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function created(Student $student)
    {
        //
    }

    /**
     * Handle the Student "updated" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the Student "deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function deleting(Student $student)
    {
        //
        $email = $student->email;
        $name = $student->name;
        $data = array('name' => $name);
        Mail::send(['html' => 'mail'], $data, function ($message) use ($email, $name) {
            $message->to($email, $name)->subject('laravel mail tutorial');
            $message->from('bhavikgrayja72650@gmail.com');
        });
    }

    /**
     * Handle the Student "restored" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the Student "force deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}