@extends('public.ticket.ticket')

@section('content')



    {{-- <div class="">
        <div class="">
            @foreach ($sections as $section)
                <div class="row">
                    <div class="liste-category col-md-3">
                        <h3>
                            <span class="text-primary" style="padding-left: 30px;" data-bs-toggle="collapse" href="#securityChoices{{$section->id}}" role="button" aria-expanded="false" aria-controls="securityChoices{{$section->id}}">
                                {{$section->nom}}
                            </span>
                        </h3>
                        <ul class="list-unstyled collapse me-2" style="padding-left: 20px; font-size: medium;" id="securityChoices{{$section->id}}">
                            <li>choix1</li>
                            @foreach ($section->category as $cat)
                                <li>{{$cat->nom}}</li>
                            @endforeach
                            <!-- Ajoutez d'autres choix ici -->
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}


    {{-- <div class="espace-article">
        <div class="d-flex justify-content-center">
            <h2 class="text-light fw-bold">Espace Article</h2>
        </div>
    </div> --}}

    <div class="d-flex justify-content-end pt-2">
        {{-- <div> --}}
            <a class="btn btn-secondary" href="  {{route('helpdesk.section')}}">
                Retour
            </a>
        {{-- </div> --}}
    </div>

    <div class="all-liste">
        <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
            <h4>Liste des articles de Categorie: <span class="text-primary">{{ $category->nom }}</span>  </h4>
        </div>

        @if ($articles->count()>0)
        <div class="article-found">
            <div class="d-flex justify-content-center">
                <span><li>Toutes les articles de {{ $category->nom }}  {{ $articles->count()}} articles:</li> </span>
            </div>
            @foreach ($articles as $article)
            <div class="">

                @if ($article)
                {{-- <a href="{{ route('helpdesk.show-article', ['category_id' => $article->category_id, 'article_id' => $article->id]) }}" class="article-summary"> --}}
                    <a href="{{ route('helpdesk.show-article', ['category_id' => $category->id, 'article_id' => $article->id]) }}" class="article-summary">

                    {{ substr($article->content, 0, strpos($article->content, ' ', 50)) . '...' }}
                </a>
                @else
                    <h1>Not found</h1>
                @endif
            </div>
            @endforeach
        </div>
        @else

        <div class="article-vide">
            <div class="d-flex justify-content-center">
                <span>La categorie contient aucune article <small style="color:red;">{{ $articles->count()}}</small> </span>
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('images/empty.jpg') }}" style="width: 340px;" alt="">
            </div>
        </div>
        @endif

    </div>


@endsection
