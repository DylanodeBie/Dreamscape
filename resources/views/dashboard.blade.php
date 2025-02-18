@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Inventaris Overzicht</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white uppercase text-sm">
                <tr>
                    <th class="py-3 px-4 text-left">Item</th>
                    <th class="py-3 px-4 text-left">Beschrijving</th>
                    <th class="py-3 px-4 text-left">Type</th>
                    <th class="py-3 px-4 text-left">Zeldzaamheid</th>
                    <th class="py-3 px-4 text-left">Kracht</th>
                    <th class="py-3 px-4 text-left">Snelheid</th>
                    <th class="py-3 px-4 text-left">Duurzaamheid</th>
                    <th class="py-3 px-4 text-left">Speciale Eigenschap</th>
                    <th class="py-3 px-4 text-left">Aantal</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($inventory as $inv)
                    <tr class="border-t border-gray-200 hover:bg-gray-100 transition">
                        <td class="py-3 px-4">{{ $inv->item->name ?? 'Onbekend' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->description ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->type ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->rarity ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->power ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->speed ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->durability ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $inv->item->special_property ?? '-' }}</td>
                        <td class="py-3 px-4 font-bold">{{ $inv->quantity ?? 0 }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center py-4 text-gray-500">Geen items gevonden</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection