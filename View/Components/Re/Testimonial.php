<?php

declare(strict_types=1);

namespace Modules\RealEstate\View\Components\Re;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Cms\Actions\GetViewAction;
use Modules\RealEstate\Models\Testimonial as Celebrity;

class Testimonial extends Component
{
    public Celebrity $testimonial;

    public function __construct(Celebrity $testimonial)
    {
        $this->testimonial = $testimonial;
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
            'testimonial' => $this->testimonial,
        ];

        return view($view, $view_params);
    }
}
