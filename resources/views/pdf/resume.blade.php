<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resume</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }
        h1 {
            margin-bottom: 5px;
        }
        .section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>{{ $resume->basics->name }}</h1>
<p>{{ $resume->basics->email }}</p>
<p>{{ $resume->basics->summary }}</p>

<div class="section">
    <h2>Skills</h2>
    <ul>
        @foreach($resume->skills as $skill)
            <li>{{ $skill->name }} ({{ $skill->level->value }})</li>
        @endforeach
    </ul>
</div>

</body>
</html>
