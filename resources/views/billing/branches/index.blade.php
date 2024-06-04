<x-billing-layout :company="$company"
:breadcrumb="[
    [
        'name' => 'Dashboard',
        'url' => route('billing.dashboard', $company),
    ],
    [
        'name' => 'Sucursales',
    ]
]">

    <x-slot name="action">

        <x-wire-button dark href="{{route('billing.branches.create', $company)}}">
            Nuevo
        </x-wire-button>

    </x-slot>

   <x-slot name="header">

        <x-button href="{{route('billing.branches.create', $company)}}">
            Nuevo
        </x-button>

   </x-slot>

   @livewire('billing.branches.branch-table', compact('company'))

</x-billing-layout>