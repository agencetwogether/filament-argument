<?php

namespace App\Filament\Resources\Locations\Actions;

use App\Enums\DayOfWeek;
use App\Enums\Module;
use Filament\Schemas\Components\Text;
use App\Filament\Resources\Locations\LocationResource;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Scheduler extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'scheduler';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label(fn (array $arguments) => __('app.actions.scheduler.label.button', ['module' => $arguments['module']->getPluralLabel()]));

        $this->modalHeading(fn (array $arguments) => __('app.actions.scheduler.modal.heading', ['module' => $arguments['module']->getPluralLabel()]));

        $this->modalDescription(fn (array $arguments) => __('app.actions.scheduler.modal.description', ['module' => $arguments['module']->getPluralLabel()]));

        $this->modalSubmitActionLabel(__('app.actions.scheduler.label.submit'));

        $this->modalSubmitAction(fn (Action $action): Action => $action
            ->color('primary'));

        $this->successNotificationTitle(fn (array $arguments) => __('app.actions.scheduler.notification.success', ['module' => $arguments['module']->getPluralLabel()]));

        $this->failureNotificationTitle(__('app.actions.scheduler.notification.failed'));

        $this->color(fn (array $arguments): string => $arguments['module']->getColor());

        $this->icon(Heroicon::OutlinedClock);

        $this->schema(function (array $arguments) {
            return [
                Text::make('Some fields here, but no mandatory to this issue')
            ];
        });

        $this->action(function (array $arguments) {

            //dd($arguments);

            $this->success();

        });

        $this->slideOver();

        $this->outlined();

        $this->modal();

        $this->visible(function (array $arguments): bool {

            return match ($arguments['module']) {
                Module::FUNERAL => true,
                Module::BAPTISM => true,
                Module::WEDDING => false,
            };

        });
    }
}
