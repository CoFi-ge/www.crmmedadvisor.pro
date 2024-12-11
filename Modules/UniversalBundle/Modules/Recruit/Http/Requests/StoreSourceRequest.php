<?php

namespace Modules\Recruit\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Recruit\Entities\ApplicationSource;

class StoreSourceRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $companyId = auth()->user()->company_id;

        return [
            'source' => [
                'required',
                'unique:application_sources,application_source,NULL,id,company_id,' . $companyId,
            ],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
