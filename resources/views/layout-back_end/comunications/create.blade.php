@extends('layout-back_end.style-admin')

@section('content')
    <div class="container">

            <form method="post" action=" {{ route('admin.comunications.save') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <label for="title"><h3>titolo</h3></label>
                    <input class="form-control" type="text" name="title" placeholder="inserisci un titolo" required/>

                    <label for="author"><h3>Seleziona l'autore</h3></label>
                    <select class="form-control" name="author">

                    <select class="form-control" name="author">
                        @foreach ($comunications as $comunication)
                            <option value="{{ $comunication->author }}">{{ $comunication->author }}</option>
                        @endforeach
                    </select>


                    <label for="text"><h3>inserisci il testo</h3></label>
                    <textarea class="form-control" name="text" rows="8" cols="80"></textarea>

                    <label for="image"><h3>Inserisci un immagine</h3></label>
                    <input type="file" name="image" accept="image/*">


                   <div class="box-button">
                       <button type="submit" name="button" class="btn-save">Salva</button>
                   </div>

               </form>
    </div>
@endsection
