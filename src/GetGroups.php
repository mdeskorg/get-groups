<?php

namespace Mdeskorg\GetGroups;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class GetGroups extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'get-groups';

    public function link($closure)
    {
        return $this->withMeta([
            'link' => $closure(),
        ]);
    }

    protected function fillAttributeFromRequest(
        NovaRequest $request,
        $requestAttribute,
        $model,
        $attribute
    ) {
    }
}
