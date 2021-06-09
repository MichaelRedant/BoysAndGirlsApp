<!DOCTYPE html>
<html lang="nl">
<head>
    @include('Pages.meta')
    @include('Pages.links')
    <link href="signin.css" rel="stylesheet">
    <title>Boys and Girls Admin</title>
</head>
<body>
<section id="login">
   <body class="text-center">
    
    <main class="form-signin">
      <div class="container">
        <form action="{{url('login')}}" method="POST">
          @csrf
        <img class="m-4" src="/img/boysandgirls.jpg" alt="logo boys and girls" width="auto" height="auto">
        <h1 class="h3 mb-3 fw-normal">Admin login</h1>
       
        <div class="form-floating m-2">
          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating m-2">
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Paswoord</label>
        </div>
    
        <button class="m-5 w-50 btn btn-lg btn-primary" type="submit">Sign in</button>
        <br>
        <a href="{{Route('home')}}" class="m-2 btn btn-sm btn-secondary">Back</a>
        <p class="mt-5 mb-3 text-muted">&copy; Xinu</p>
      </form>
      </div>
      
    </main>
      </body> 
</section>
</body>
@include('Pages.scripts')
</html>
