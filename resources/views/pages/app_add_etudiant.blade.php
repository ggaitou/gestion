
@extends('layout.app',['title'=>config('app.name')])

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Etudiant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestion Etudiant</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Ajouter Etudiant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <!-- message de reussite du formulaire -->
            @if(session()->has("success"))

     

            <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alerte!</h5>
                  {{session()->get("success") }}
                </div>

            @endif
            <!-- FIN message de reussite du formulaire -->

             <!-- message de eRREUR du formulaire -->
              @if($errors->any())

              

              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Alerte!</h5>
                 <ul>

                  @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                  @endforeach
              </ul>
                </div>

              @endif

              <!-- FIN  message de eRREUR du formulaire -->

              <form method="POST" action="{{route('app_ajouter_etudiant')}}">

              <!-- '@csrf' PERMET DE VERIFIER AUTHENTICITER D'UN FORMULAIRE -->
              @csrf


                <div class="card-body">
                  <div class="form-group">
                    <label for="nom_etudiant">Nom</label>
                    <input type="text" class="form-control" id="nom_etudiant" placeholder="Entrez Le Nom" name="nom">
                  </div>
                  <div class="form-group">
                    <label for="prenom_etudiant">Prenom</label>
                    <input type="text" class="form-control" id="prenom_etudiant" placeholder="Entrez Le Prenom" name="prenom">
                  </div>

                  <div class="form-group">
                    <label for="classe_etudiant">Classe</label>

                    <select class="form-control" id="classe_etudiant" name="classe_id">
                    <option value=""></option>
                    @foreach( $classes as $classe )

                    <option value="{{ $classe->id }}">{{ $classe->libele }}</option>

                    @endforeach
                    </select>
                    
                  </div>
                  <!--<div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>-->
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <a href="{{route('app_etudiant')}}"  class="btn btn-danger">Annuler</a>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

            
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection