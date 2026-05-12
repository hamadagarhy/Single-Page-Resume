<h1>{{ $resume->basics->name }}</h1>
<p>{{ $resume->basics->summary }}</p>

@foreach($resume->profiles as $profile)
    <a href="{{ $profile->url }}">
        {{ $profile->network }}
    </a>
@endforeach

<a href="{{ URL::signedRoute('resume.download') }}">
    Download PDF
</a>
