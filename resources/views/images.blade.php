<h1>Images</h1>
@foreach($images as $image)
<img src="{{ asset('storage/upload').'/'.$image->img_name}}" name="{{$image->img_name}}" height="300" width="300"><br/>
{{"storage/upload/".$image->img_name}}<br/>
@endforeach