<?php
declare(strict_types=1);

namespace  Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
   

    protected $guarded = ['created_at', 'updated_at', 'id'];

    protected $fillable = ['name','email','phone_no'];

    
}
