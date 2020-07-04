<?php

namespace App\Observers;

use App\Models\Student;

class StudentObserver
{

    public function retrieved(Student $student)
    {
        dump('this is observer');
    }
    /**
     * Handle the student "created" event.
     *
     * @param  \App\Modles\Student  $student
     * @return void
     */
    public function created(Student $student)
    {
        dump('this is observer  ---- addd');
    }


    /**
     * Handle the student "updated" event.
     *
     * @param  \App\Modles\Student  $student
     * @return void
     */
    public function updated(Student $student)
    {
        //
    }

    /**
     * Handle the student "deleted" event.
     *
     * @param  \App\Modles\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        //
    }

    /**
     * Handle the student "restored" event.
     *
     * @param  \App\Modles\Student  $student
     * @return void
     */
    public function restored(Student $student)
    {
        //
    }

    /**
     * Handle the student "force deleted" event.
     *
     * @param  \App\Modles\Student  $student
     * @return void
     */
    public function forceDeleted(Student $student)
    {
        //
    }
}
