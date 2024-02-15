<?php

declare(strict_types=1);

namespace Modules\RealEstate\View\Components\Re;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\RealEstate\Models\Property as Patrimony;
use Modules\Xot\Actions\GetViewAction;

class Property extends Component
{
    public Patrimony $property;

    public function __construct(Patrimony $property)
    {
        $this->property = $property;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute();
        $view_params = [
            'view' => $view,
            'property' => $this->property,
        ];

        return view($view, $view_params);
    }
}
