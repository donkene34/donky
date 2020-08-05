<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class VideoRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $array_extention = ['mp4','3gp','mkv'];

        $file_extention = strtolower(substr(strrchr($_FILES['video']['name'],"."), 1 ));

        if(in_array($file_extention, $array_extention))
        {
            return true ;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'le fichier doit etre du format 3gp, mkv ou mp4';
    }
}
