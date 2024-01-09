<?php

namespace Modules\RealEstate\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Filament\Front\Pages\Welcome;
use Modules\RealEstate\Models\Property;

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
            'properties' => $properties,
        ];

        return view($view, $view_params);
    }

    public function url(string $name, array $parameters = []): string
    {
        return app(Welcome::class)->url($name, $parameters);
    }
}
