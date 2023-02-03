@foreach ($projects as $project)
@foreach($project->images as $image)
<img src="{{ asset('/storage/' . $image) }}" alt="{{$project->name}}" class="transition duration-200 hover:opacity-75">
@endforeach
@endforeach
