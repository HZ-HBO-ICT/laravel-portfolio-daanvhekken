@extends('layout')
@section('content')
    <div>
        <iframe src="https://discord.com/widget?id=408639599909535746&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </div>
    <a href="{{ url('/files/Profile.pdf') }}" target="_blank" class="button">
        Open pdf in a new tab<i class="bi bi-file-earmark-pdf ms-2"></i>
    </a>
    <a href="{{ url('/files/Profile.pdf') }}" class="button" download>
        Download pdf<i class="bi bi-download ms-2"></i>
    </a>
@endsection
