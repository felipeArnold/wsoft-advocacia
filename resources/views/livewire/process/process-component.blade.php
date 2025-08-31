<?php

use Livewire\Volt\Component;

new class extends Component {
    public array $stats = [
        ['title' => 'Total de Processos', 'value' => 50, 'trendUp' => true, 'trend' => '5%'],
        ['title' => 'Processos Ativos', 'value' => 30, 'trendUp' => true, 'trend' => '10%'],
        ['title' => 'Processos Pendentes', 'value' => 15, 'trendUp' => false, 'trend' => '-2%'],
        ['title' => 'Com Prazos', 'value' => 5, 'trendUp' => true, 'trend' => '20%'],
    ];
}; ?>

<div>

    <div>

        <div class="flex justify-between">
            <div>
                <flux:heading>Processos</flux:heading>
                <flux:text class="mt-2">Gerencie todos os seus processos jurídicos</flux:text>
            </div>

            <flux:button variant="primary" icon="plus" wire:click="$emit('openModal', 'process.create-process-modal')">
                Novo Processo
            </flux:button>
        </div>

        <div class="mb-3 mt-3 flex gap-2">
            <div class="w-full md:w-1/3 lg:w-1/4">
                <flux:input icon="magnifying-glass" placeholder="Pesquisar..."/>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4">
                <flux:date-picker mode="range" min-range="3" />
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4">
                <flux:select variant="listbox" searchable placeholder="Status">
                    <flux:select.option>Todos</flux:select.option>
                    <flux:select.option>Ativo</flux:select.option>
                    <flux:select.option>Arquivado</flux:select.option>
                    <flux:select.option>Concluído</flux:select.option>
                    <flux:select.option>Pendente</flux:select.option>
                </flux:select>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4">
                <flux:select variant="listbox" searchable placeholder="Tags">
                    <flux:select.option>Todos</flux:select.option>
                    <flux:select.option>Ativo</flux:select.option>
                    <flux:select.option>Arquivado</flux:select.option>
                    <flux:select.option>Concluído</flux:select.option>
                    <flux:select.option>Pendente</flux:select.option>
                </flux:select>
            </div>
        </div>


        <!-- Create card process detail -->
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3 mt-3">
            @foreach (range(1, 6) as $process)
                <div class="rounded-lg border border-zinc-100 bg-zinc-50 p-4 dark:border-zinc-700 dark:bg-zinc-800">
                    <div class="flex justify-between">
                        <flux:badge color="green" size="sm">Ativo</flux:badge>

                        <flux:dropdown position="right" align="center">
{{--                            <flux:button variant="ghost" size="sm" icon="vertical" />--}}
                            <flux:menu>
                                <flux:menu.item icon="pencil-square" kbd="⌘S">Save</flux:menu.item>
                                <flux:menu.item icon="document-duplicate" kbd="⌘D">Duplicate</flux:menu.item>
                                <flux:menu.item icon="trash" variant="danger" kbd="⌘⌫">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </div>
                    <flux:heading size="lg" class="mt-2">Ação trabalhista {{ $process }}</flux:heading>
                    <flux:text class="mt-3 text-sm text-zinc-600 dark:text-zinc-400">
                        <b>Cliente:</b> Empresa XYZ
                    </flux:text>
                    <flux:text class="mt-3 text-sm text-zinc-600 dark:text-zinc-400">
                        TRT 3ª Região - Tribunal Regional do Trabalho
                    </flux:text>

                    <div class="flex gap-2 mt-3">
                        @for ($i = 0; $i < 3; $i++)
                            <flux:badge color="green" size="sm">
                                Etapa {{ $i + 1 }}
                            </flux:badge>
                        @endfor
                    </div>

                    <flux:text class="mt-3 text-sm text-red-500">
                        Prazo: 10 dias
                    </flux:text>

                    <flux:text class="mt-3 mb-3 text-sm text-zinc-600 dark:text-zinc-400">
                        <b>Documentos:</b> 5 anexados
                    </flux:text>


                    <flux:separator />

                    <div class="mt-3">
                        <flux:text class="text-sm text-zinc-600 dark:text-zinc-400">
                            <b>Próxima audiência:</b> 25/12/2024
                        </flux:text>
                        <flux:text class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">
                            <b>Responsável:</b> Dr. João Silva
                        </flux:text>
                    </div>
                </div>
            @endforeach
        </div>



    </div>

</div>
