@extends("template.master", ['title' => 'Página Inicial'])
@section('content')

    <section class="container-md d-flex align-items-center">

        {{-- Titulo Página --}}
        @include('template.hero', ['title' => 'Seja bem vindo', 'subtitle' => 'Dev: Danilo Santos'])

    </section>

@endsection
