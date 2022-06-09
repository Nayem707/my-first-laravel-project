<h1>{{$heading}}</h1>

@foreach ($listings as $listing) <!--Start--->

<h2> <a href="/listings/{{$listing['id']}}">
  {{$listing['title']}}</a></h2> <!--way-1--->

<p><?php echo $listing['desc'];?></p><!--way-2--->

@endforeach <!--end-->

