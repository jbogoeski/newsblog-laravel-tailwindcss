<?php

namespace App\Http\Requests;

use Illuminate\Support\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        return [
            'category_id' => 'required',
            'area_id' => 'required',
            'title_en' => 'required',
            'title_mk' => 'required',
            'subcategory_id',
            'subarea_id',
            // 'description_en' => 'required',
            // 'description_mk' => 'required',
            'status',
            'headline',
            'first_section',
            'first_section_thumbnail',
            'bigthumbnail',
            'timestamps',
            'image' => 'image',

        ];
    }
}
