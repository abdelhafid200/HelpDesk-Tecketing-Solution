@extends('public.ticket.ticket')

@section('content')


{{-- <div class="solution">
    <div>
            <div class="mb-3" id="icone_bare1">
                <input type="text"  id="search" placeholder="entrez ici le terme de recherche..." aria-label="Recherche" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="icone_search"><i class="fa fa-search"></i></button>
                </div>
            </div>
    </div>
    <div>
        <h3 class="base2">Base de connaissance</h3>
    </div>
</div> --}}
<div class="search-article">
    <div>
        <form action="{{ route('tickets.show') }}" method="post">
            @csrf
                <div class="mb-3 d-flex justify-content-end" style="margin-bottom: -30px !important;">
                    <div class="mt-2">
                        <input type="text"   id="search1" placeholder="entrez ici le terme de recherche..." name="titre" aria-label="Recherche" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group-append mt-1 ps-2 ">
                        <button class="btn btn-outline-secondary" type="submit" id="" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-light" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
        </form>
    </div>
    <div class="d-flex">
        <h3 class="text-light">Base de connaissance</h3>
    </div>
</div>

    <div class="d-flex row mb-2 justify-content-center">
        @foreach ($articles as $article)
        <div class="articles-all  col-md-5 me-2 mb-2">

            <div>
                <h5> {{$article->title}} </h5>
                <small>categorie : <span>{{$article->category->nom}} </span> </small>
                <p class="article-summary">{{ substr($article->content, 0, strpos($article->content, ' ', 100)) . '...' }}</p>
                <small class="date">date de creation : <span>{{$article->created_at}} </span> </small>
                <div class="row d-flex justify-content-center" >
                    <a href="{{route('tickets.article',['id'=>$article->id])}}" type="submit" class="btn btn-info col-md-10">
                    {{-- <a href="{{ route('helpdesk.show-article', ['category_id' => $category->id, 'article_id' => $article->id]) }}" type="submit" class="btn btn-info col-md-10"> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                            Consult l'article
                    </a>
                </div>
            </div>

        </div>
        @endforeach
    </div>



@endsection
