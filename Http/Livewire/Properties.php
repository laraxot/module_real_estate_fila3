<?php

namespace Modules\RealEstate\Http\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Modules\Cms\Actions\GetViewAction;
use Modules\RealEstate\Models\Property;
use Modules\Cms\Filament\Front\Pages\Welcome;

class Properties extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public string $tpl = 'properties';

    /**
     * Undocumented function.
     */
    public function render(): View
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $properties = Property::paginate();

        $view_params = [
            'view' => $view,
            'properties' => $properties
        ];

        return view($view, $view_params);
    }

    public function url(string $name, array $parameters = []): string {
        return app(Welcome::class)->url($name, $parameters);
    }
}