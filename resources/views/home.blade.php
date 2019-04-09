@extends('template')
@section('content')
      <div class="container">

         <section class="jumbotron text-center">
            <div class="container">
               <h1 class="jumbotron-heading">DropBix</h1>
               @if(Auth::user())
               <p class="lead text-muted">Sebuah website Indonesia yang mirip DropBox</p>
               <p class="lead text-muted">Selamat Datang, {{Auth::user()->name}} di Dropbix</p>
              @else
              <p class="lead text-muted">Sebuah website Indonesia yang mirip DropBox</p>
               <p>
                  <a href="#" class="btn btn-primary">Daftar Disini</a>
                  <a href="#" class="btn btn-secondary">Sudah Punya Akun? Login</a>
               </p>
               @endif
            </div>
         </section>
      </div>
	  <br>
	  <br>
	  <br>
	  <br>
@endsection