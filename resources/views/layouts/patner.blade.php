    @foreach ($projects as $project)
    @foreach($project->images as $image)
    <img class="w-100 h-50" src="{{ asset('/storage/' . $image) }}" alt="{{$project->name}}">
    @endforeach
@endforeach

