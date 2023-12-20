<?php

declare(strict_types=1);

namespace Modules\RealEstate\View\Components\Re;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Cms\Actions\GetViewAction;
use Modules\RealEstate\Models\Agent as Ag;

class Agent extends Component
{
    public Ag $agent;

    public function __construct(Ag $agent)
    {
        $this->agent = $agent;
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
            'agent' => $this->agent,
        ];

        return view($view, $view_params);
    }
}
