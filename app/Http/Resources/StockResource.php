<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        $result =  [
            'quantity' => $this->quantity,
            'color' => 'red',
            'material' => 'MDF'
        ];

        return $this->getAttributes($result);
    }

    /**
     * @param  array  $result
     * @return array
     */
    public function getAttributes(array $result): array
    {
        $attributes = json_decode($this->attributes);
        foreach ($attributes as $stocAttribute) {
            $attribute = Attribute::find($stocAttribute->attribute_id);
            $value = Value::find($stocAttribute->value_id);

            $result[$attribute->name] = $value->getTranslations('name');
        }
        return $result;
    }
}
