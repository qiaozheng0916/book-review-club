<div style="background-color: #F2F9F7">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
  
        </div>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><img src="/images/logo.png" style="height: 53px"></li>
        </ul>
  
        
            @guest
            <div class="col-md-3 text-end" style="padding-right:50px">
                <button type="button" class="btn btn-success rounded-pill" onclick="location.href='{{ url('/login') }}';">Login</button>
                <button type="button" class="btn btn-primary  rounded-pill" onclick="location.href='{{ url('/register') }}';">Sign-up</button>
            </div>
            @endguest
  
            @auth
            <div class="col-md-3 text-end" style="padding-right:50px">
                Welcome, {{ auth()->user()->name }}
                <form method="POST" action="{{ url('/logout') }}">
                    @csrf
                    @if (auth()->user()->is_admin)
                        <a href="{{ url('/admin/books/create') }}" class="btn btn-primary rounded-pill">Add New Book</a>
                    @endif
                    <button type="submit" class="btn btn-danger rounded-pill">Logout</button>
                </form>
            </div>
          @endauth
        
        </div>
    </header>
  </div>
  