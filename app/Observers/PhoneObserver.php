<?php

namespace App\Observers;

use App\Models\Phone;

class PhoneObserver
{
    /**
     * Handle the Phone "created" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function creating(Phone $phone)
    {
        //
        $reference = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $phone->phone = $reference;
    }

    /**
     * Handle the Phone "updated" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function updated(Phone $phone)
    {
        //
    }

    /**
     * Handle the Phone "deleted" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function deleted(Phone $phone)
    {
        //
    }

    /**
     * Handle the Phone "restored" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function restored(Phone $phone)
    {
        //
    }

    /**
     * Handle the Phone "force deleted" event.
     *
     * @param  \App\Models\Phone  $phone
     * @return void
     */
    public function forceDeleted(Phone $phone)
    {
        //
    }
}