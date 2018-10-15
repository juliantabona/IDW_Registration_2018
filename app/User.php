<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait { restore as private restoreA; }
    use SoftDeletes { restore as private restoreB; }

    public function restore()
    {
        $this->restoreA();
        $this->restoreB();
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'days_attending', 'event_attending', 'first_name', 'last_name', 'gender', 'affiliation', 'position',
        'country', 'organisation_type', 'address', 'address_2', 'city', 'state', 'zip_code', 'phone', 'username',
        'email', 'password', 'additional_email', 'twitter_handle', 'organisation_affiliation', 'communication_channel',
        'accessibility', 'allergies', 'send_future_updates', 'send_data_science_journal_updates',
        'agree_to_addon_list', 'agree_to_details_on_list',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
