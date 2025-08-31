<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class PrazosListagem extends Component
{
    public function render()
    {
        $prazos = \App\Models\Prazo::orderByDesc('data_limite')->get();

        return view('livewire.prazos-listagem', compact('prazos'));
    }
}
