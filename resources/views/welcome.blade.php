<x-layout title="Home">
    <p>
        {{ $greeting }} {{ $person }}
        @foreach ($tasks ?? [] as $t)
        <li> {{ $t }}</li>

        @endforeach

    </p>
    
</x-layout>