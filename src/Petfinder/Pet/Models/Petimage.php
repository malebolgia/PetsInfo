<?php

namespace Petfinder\Pet\Models;

use Lavalite\Filer\FilerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petimage extends Model
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
        $this->fillable             = config('pet.petimage.fillable');
        $this->uploads              = config('pet.petimage.uploadable');
        $this->uploadRootFolder     = config('pet.petimage.upload_root_folder');
        $this->table                = config('pet.petimage.table');
    }

    

}
