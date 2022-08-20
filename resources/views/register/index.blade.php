@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
<div class="col-md-5">

<main class="form-registration">
  <form class="col-ms-auto"action="/register" method="POST" >
 @csrf
    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>


    
    
    <div class="form-group">
     
     <select class="form-control @error('jenis')is-invalid @enderror" name="jenis" id="jenis">
     <option value="" >Pilih Jenis Kelamin</option>
     <option value="Putra">Putra</option>
     <option value="Putri">Putri</option>
     
   </select>

   
   @error('jenis')
   <div class=invalid-feedback>Anda belum memilih jenis kelamin
     
   </div>
   @enderror
 </div>  
     <div class="form-group">
     
        <select class="form-control @error('kategori')is-invalid @enderror" name="kategori" id="kategori">
        <option value="" >Pilih Kategori</option>
        <option value="Kadet">Kadet</option>
        <option value="Junior">Junior</option>
        <option value="Senior">Senior</option>
        <option value="Veteran">Veteran</option>
        
      </select>

      <i class="bi bi-info-circle"></i>
      <button type="button" class="btn btn-lg btn-danger ms-auto" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
      
      @error('kategori')
      <div class=invalid-feedback>Anda belum memilih kategori
        
      </div>
      @enderror
    </div> 
    <div class="form-floating">
      <input type="varchar"  name="NIK" class="form-control @error('NIK')is-invalid @enderror "  id="NIK" placeholder="NIK"  value="{{old ('NIK')}}">
      <label for="NIK">NIK</label>

      
      @error('NIK')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text"  name="name" class="form-control  @error('name')is-invalid @enderror" id="name" placeholder="Nama" value="{{old ('name')}}">
      <label for="name">Nama</label>
      @error('name')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text"  name="tmptlahir" class="form-control @error('tmptlahir')is-invalid @enderror" id="tmptlahir" placeholder="Tempat Lahir" value="{{old ('tmptlahir')}}">
      <label for="tmptlahir">Tempat Lahir</label>
      @error('tmptlahir')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="date"  name="tgllahir" class="form-control @error('tgllahir')is-invalid @enderror" id="tgllahir" placeholder="Tanggal Lahir" value="{{old ('tgllahir')}}">
      <label for="tgllahir">Tanggal Lahir</label>
      @error('tgllahir')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text"  name="coach" class="form-control @error('coach')is-invalid @enderror" id="coach" placeholder="Nama Pelatih"  value="{{old ('coach')}}">
      <label for="coach">Nama Pelatih</label>
      @error('coach')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
    
    
    
    
    <div class="form-floating">
      <input type="text"  name="institusi" class="form-control @error('institusi')is-invalid @enderror" id="institusi" placeholder="Club/Institusi" value="{{old ('institusi')}}">
      <label for="institusi">Institusi</label>
      @error('institusi')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div> 
     <div class="form-floating"> 
       <input type="text"  name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" value="{{old ('username')}}">
      <label for="username">Username</label>
      @error('username')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div> 
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old ('email')}}">
      <label for="floatingInput">Email address</label>
      @error('email')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{old ('password')}}">
      <label for="floatingPassword">Password</label>
      @error('password')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div>
   <div class="form-floating">
      <input type="tel"  name="CP" class="form-control @error('CP')is-invalid @enderror" id="CP" placeholder="Contact Person(WA)" value="{{old ('CP')}}">
      <label for="CP">Contact Person (WA)</label>
      @error('CP')
      <div class=invalid-feedback>{{$message}}
        
      </div>
      @enderror
    </div> 

    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    
  </form>

  <small class="d-block text-center">Already Have Account ? <a href="/login">Login!</a></small>
</main>
</div>

</div>
@endsection