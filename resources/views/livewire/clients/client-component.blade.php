<div>
    <div class="flex items-center justify-between mb-3">
        <div>
            <flux:heading size="xl" level="1">Cadastro cliente</flux:heading>
            <flux:text class="text-base">Gerencie seus clientes e contatos</flux:text>
        </div>

        <flux:button variant="primary" icon="plus">
            Novo cliente
        </flux:button>
    </div>
    <flux:separator />

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8 mt-3">
        <div class="dark:border-zinc-700 dark:bg-zinc-500 bg-white rounded-xl shadow p-3 flex gap-3 items-center">
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-md">
                <flux:icon name="user" class="text-blue-600" />
            </div>

            <div class="flex flex-col">
                <span class="text-2xl font-bold">2</span>
                <span class="text-gray-500">Pessoa Física</span>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-3 flex gap-3 items-center">
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-md">
                <flux:icon name="building-office" class="text-blue-600" />
            </div>

            <div class="flex flex-col">
                <span class="text-2xl font-bold">1</span>
                <span class="text-gray-500">Pessoa Jurídica</span>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-3 flex gap-3 items-center">
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-md">
                <flux:icon name="users" class="text-green-600" />
            </div>

            <div class="flex flex-col">
                <span class="text-2xl font-bold">11</span>
                <span class="text-gray-500">Clientes Ativos</span>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-3 flex gap-3 items-center">
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-md">
                <flux:icon name="clipboard-document-list" class="text-blue-600" />
            </div>

            <div class="flex flex-col">
                <span class="text-2xl font-bold">100</span>
                <span class="text-gray-500">Total de processos</span>
            </div>
        </div>

    </div>

    <div class="flex items-center gap-4 mb-6">
        <div class="flex-1">
            <flux:input placeholder="Buscar por nome, documento ou e-mail..." class="w-full" />
        </div>
        <div class="w-full md:w-1/3 lg:w-1/4">
            <flux:date-picker mode="range" min-range="3" />
        </div>
        <flux:button variant="primary" class="!px-6">
            Filtrar
        </flux:button>
    </div>

    <flux:separator class="mb-6" />

    <flux:tabs variant="segmented" class="mb-6">
        <flux:tab>Ativos</flux:tab>
        <flux:tab>Inativos</flux:tab>
        <flux:tab>Todos</flux:tab>
    </flux:tabs>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        @for ($i = 0; $i < 12; $i++)
            <div class="border-zinc-100 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-800 rounded-md shadow p-3 flex flex-col gap-2">
                <div class="flex items-start justify-between gap-2">
                    <div class="flex gap-2">
                        <flux:avatar src="https://unavatar.io/x/calebporzio" />
                       <div>
                           <flux:link href="#" variant="ghost" class="mb-2">
                               João Silva Santos
                            </flux:link>
                           <div class="text-gray-500 text-sm">123.456.789-00</div>
                       </div>
                    </div>

                    <flux:badge color="lime" size="sm">Ativo</flux:badge>
                </div>

                <flux:text class="gap-1 flex items-center">
                    <flux:icon name="envelope" variant="micro" />
                    joao.silva@email.com
                </flux:text>
                <flux:text class="gap-1 flex items-center">
                    <flux:icon name="phone" variant="micro" />
                    (11) 99999-9999
                </flux:text>
                <div class="flex items-center text-gray-500 text-sm justify-between">
                    <flux:text class="mt-2 gap-1 flex items-center">
                        <flux:icon name="folder" variant="micro" />
                        5 processos
                    </flux:text>
                    <flux:text class="mt-2 gap-1 flex items-center">
                        <flux:icon name="calendar" variant="micro" />
                        15/03/2023
                    </flux:text>
                </div>
            </div>
        @endfor

    </div>
</div>
