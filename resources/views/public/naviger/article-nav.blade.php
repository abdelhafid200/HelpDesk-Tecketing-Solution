@extends('public.ticket.ticket')

@section('content')




<div class="espace-article">
    <div class="d-flex justify-content-center">
        <h2 class="text-light fw-bold">Espace Article</h2>
    </div>
</div>
<div class="article-retour d-flex justify-content-between pb-4 pt-5">
    <div>
        <h3 class="ps-4"> <span> Artcile :</span> <span>{{$article->title}}</span> </h3>
    </div>
    <div>
        <a class="btn btn-secondary" href="  {{route('helpdesk.liste-article', ['id'=>$category->id])}}">
            Retour
        </a>
    </div>
</div>


    <div class="print-article">
        <div class="print-id d-flex justify-content-end">
            <a href="#" class="btn btn-sm btn-primary" onclick="print({{$article->id}})">
                <i class="fas fa-print fa-2x"></i>
            </a>
        </div>
        <div class="">
            <div class="consult-article" id="{{$article->id}}">
                    <h5>{{$article->title}} </h5>
                    <h6>Catégorie : {{$article->category->nom}} </h6>
                    <p>{{$article->content}} </p>
                <small class="d-flex justify-content-end"> Date de création :  {{$article->created_at }} </small>
            </div>
        </div>
    </div>


@endsection
@section('javascript')

    <script>
        function print(el){
            const page = document.body.innerHTML;
            const content = document.getElementById(el).innerHTML;
            document.body.innerHTML = content;
            window.print();
            document.body.innerHTML = page;


        }
    </script>


@endsection
