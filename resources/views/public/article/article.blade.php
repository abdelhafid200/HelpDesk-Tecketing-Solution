@extends('public.ticket.ticket')

@section('content')

    <div>
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-sm btn-primary" onclick="print({{$article->id}})">
                <i class="fas fa-print fa-2x"></i>
            </a>
        </div>
        <div class="consult-article" id="{{$article->id}}">
            <h5>{{$article->title}} </h5>
            <h6>Catégorie : {{$article->category->nom}} </h6>
            <p>{{$article->content}} </p>
            <small class="d-flex justify-content-end"> Date de création :  {{$article->created_at }} </small>
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
