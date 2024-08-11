@if(Auth::check())
    <p>Welcome, {{ Auth::user()->name }}</p>
    <a href="{{ route('logout') }}">Logout</a>
@else
    <a href="{{ url('auth/google') }}" class="btn btn-primary">Login with Google</a>
@endif

<div class="videos">
    @foreach($videos as $video)
        <!-- Tampilkan video di sini -->
        <div class="video">
            <h3>{{ $video->title }}</h3>
            <!-- Video content -->
        </div>
    @endforeach
</div>