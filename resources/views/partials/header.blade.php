<header>
   {{-- Logo --}}
   <div class="logo d-flex justify-content-center">
      <img src="{{ asset('img/logo.png') }}" alt="">
   </div> 

   {{-- Navbar --}}
   <nav class="d-flex justify-content-center align-items-center">
      <ul>
         <li><a href="{{ route('home') }}" class=" {{ Route::currentRouteName() === 'home' ? 'active' : ''}}">Home</a></li>
         <li><a href="{{ route('products') }}" class=" {{ Route::currentRouteName() === 'products' ? 'active' : ''}}">Prodotti</a></li>
         <li><a href="{{ route('contacts') }}" class=" {{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}">Contatti</a></li>
      </ul>
   </nav>
</header>