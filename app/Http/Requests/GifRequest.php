<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Gif;

class GifRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $gif= Gif::find($this->gif);


        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'title'=>'min:2|required|unique:gifs',
                    'description'=>'min:10|required',
                    'gif'=>'required|image'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                   'name'=> 'min:2|required|unique:gifs,title,'.$gif->id,
                   'description'=>'min:10|required'
                ];
            }
            default:break;
        }
    }
}
