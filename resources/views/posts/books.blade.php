@extends('layouts.master')

@section('contentA')


<nav class="navbar navbar-expand-md bg-secondary navbar-light fw-bold">
    <div class="container">

      <button class="navbar-toggler mx-auto m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu2">
        Catégories
      </button>

      <div class="collapse navbar-collapse" id="navmenu2">
        <ul class="navbar-nav w-100 nav-justified">
          <li class="nav-item">
            <a href="#" class="nav-link">Arts</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Culture</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Biographies</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Romans</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Enfants</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Scolaire</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Santé</a>
          </li>
        </ul>
      </div>
        <div class="input-group rounded m-3">
          <input type="search" class="form-control rounded" placeholder="Chercher un livre" aria-label="Search"
          aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
          </span>
        </div>
    </div>
  </nav>
  <button href="{{url('addboo')}}" class="btn btn-secondary m-4">
    Ajouter
  </button>

  <table class="table table-success table-hover m-1" border=1>
    @foreach($books as $book)
    <tr>
      <td>ID</td>
      <td>Titre</td>
      <td>Auteur</td>
      <td>catégorie</td>
    </tr>
    <tr>
      <td>{{$book->id}}</td>
      <td>{{$book->titre}}</td>
      <td>{{$book->auteurs}}</td>
      <td>{{$book->category['nom']}}</td>
    </tr>
    @endforeach
  </table>
@endsection