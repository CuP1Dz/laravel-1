<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Форма участия') }}
        </h2>
    </x-slot>

    <form class="mx-auto max-w-2xl p-4 md:p-5 space-y-4 flex flex-col gap-5" method="POST" action="{{route('works.store')}}">
        @csrf
        <div>
            <div class="mt-4">
                <select name="service_id" id="service_id">
                    @foreach ($category as $item)
                        <option id="{{ $item->id }}" value="{{ $item->id }}"> 
                            {{ $item->title }} 
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</x-app-layout>
