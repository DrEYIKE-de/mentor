@extends('../layouts/layout')

@section('content')
   <div class="container mt-3">
       
       <div class="mt-2 text-center row">
           <h1 class=" display-4">Votre email</h1>
       </div>
       
       <hr class="mr-3">
       
       <div class="row ">
           <div class="mt-5 col-8 alert alert-secondary">
            <form method="post" action="{{ action([App\Http\Controllers\ContactController::class, 'create']) }}">
                @csrf
                <div class="form-group">
                  <label for="" >Votre nom</label>
                  <input type="text" name="name" id="" class="form-control @error('name')
                      
                  @enderror" placeholder="Andre, Francois" aria-describedby="helpId" value='{{ old('name') }}'>
                   
                  @error('name')
                    <div class="mt-2 alert is-invalid alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormInputEmail1">Votre email</label>
                    <input type="email" name="email" id="exampleFormInputEmail1" class="form-control @error('emain')
                        
                    @enderror" placeholder="test@test.com" aria-describedby="helpId" value='{{ old('email') }}'>
                     
                    @error('email')
                      <div class="mt-2 alert is-invalid alert-danger">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                        <label for="my-textarea">Votre message</label>
                        <textarea id="my-textarea" class="form-control" name="message" rows="3">
                            {{ old('message') }}
                        </textarea>
                   
                    @error('message')
                      <div class="mt-2 alert is-invalid alert-danger">
                          {{ $message }}
                      </div>
                    @enderror
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
           </div>
       </div>
   </div>
@endsection