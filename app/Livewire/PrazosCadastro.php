<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class PrazosCadastro extends Component
{
    public array $form = [
        'processo_numero' => '',
        'descricao' => '',
        'data_limite' => '',
        'responsavel' => '',
        'status' => 'pendente',
    ];

    public function salvar(): void
    {
        $this->validate([
            'form.processo_numero' => ['required', 'string', 'max:255'],
            'form.descricao' => ['required', 'string'],
            'form.data_limite' => ['required', 'date'],
            'form.responsavel' => ['nullable', 'string', 'max:255'],
            'form.status' => ['required', 'in:pendente,cumprido,adiado'],
        ]);

        \App\Models\Prazo::create($this->form);
        $this->dispatch('prazoSalvo');
        $this->form = [
            'processo_numero' => '',
            'descricao' => '',
            'data_limite' => '',
            'responsavel' => '',
            'status' => 'pendente',
        ];
    }

    public function render()
    {
        return view('livewire.prazos-cadastro');
    }
}
