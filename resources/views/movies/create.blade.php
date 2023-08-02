@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action=" {{ route('movies.store') }} " method="POST">
                    @csrf
                    <div class="form-group border p-4 my-3">
                        <div class="row">
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Titolo film</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo"
                                    class="form-control" required>
                            </div>
                            <div class="col-12 my-3 mt-3">
                                <label class="control-label my-3">Immagine</label>
                                <input type="url" name="image" id="image"
                                    placeholder="Inserisci l'immagine di copertina" class="form-control" required>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Trama del film</label>
                                <textarea name="description" id="description" placeholder="Inserisci la trama" cols="30" rows="10"
                                    class="form-control" required></textarea>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Direttore</label>
                                <input type="text" name="director" id="director"
                                    placeholder="Inserisci il nome del Regista" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Voto della Critica</label>
                                <input type="text" name="vote" id="vote"
                                    placeholder="Inserisci il voto della critica" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Data di Uscita</label>
                                <input type="date" name="sale_date" id="sale_date"
                                    placeholder="Inserisci la data di lancio del film" class="form-control" required>
                            </div>
                            <div class="col-12 text-center my-5">
                                <button type="submit" class="btn btn-success">Salva Film</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
