<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route("home")}}">LoginApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if (Auth()->check())
        <li class="nav-item">
          <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
        </li>
        @endif
        @if (Auth()->user()['role'] === 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin')}}">Admin</a>
        </li>
        @endif
@if (Auth()->check())
<li class="nav-item">
    <a class="nav-link" href="{{route("logout")}}">Logout</a>
  </li>
  @endif

  @if (!Auth()->check())
<li class="nav-item">
    <a class="nav-link" href="{{route("acc.index")}}"> Register </a>
  </li>
@endif

@if (!Auth()->check())
<li class="nav-item">
    <a class="nav-link" href="{{route("login")}}"> Login </a>
  </li>
@endif




      </ul>
    </div>
  </nav>
