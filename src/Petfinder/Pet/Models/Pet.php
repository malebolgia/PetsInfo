<?php

namespace Petfinder\Pet\Models;

use Lavalite\Filer\FilerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use FilerTrait;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Initialiaze page modal
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable             = config('pet.pet.fillable');
        $this->uploads              = config('pet.pet.uploadable');
        $this->uploadRootFolder     = config('pet.pet.upload_root_folder');
        $this->table                = config('pet.pet.table');
    }

    /**
     * The petImageChild that belong to the pet.
     */
    public function petImageChild(){
        return $this->hasMany('Pet\Pet\Models\petimage');
    }



}
