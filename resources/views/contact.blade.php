@extends('layouts.app')

@section('content')

    @sectionRow(['paralaxImage' => asset('storage/VOSTSITE_0060.jpg')])
        <div class="col-6">
            <div>
                <h2>Como nos contactar</h2>
                <h3>Queres juntar-te a nós?</h3>
                <p>
                    Na VOST Portugal estamos sempre à procura de pessoas que se queiram juntar à nossa equipa. Se sentes que podes ajudar de alguma maneira, seja com conteúdos, gestão de redes sociais, validação de informação, meteorologia, ou outros, e se o teu espírito é igual ao nosso seria um prazer ter-te connosco.
                    <br>Preenche este formulário.
                </p>
                <p>Se és developer, e queres ajudar, vai até ao nosso GitHub.</p>
                <p>Para qualquer outro tipo de contactos preenche por favor o formulário de contacto.</p>
            </div>
        </div>

        <div class="col-6">
            @include('partials.contactForm')
        </div>
    @endsectionRow

@endsection
