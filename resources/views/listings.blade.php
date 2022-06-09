<h1>{{$heading}}</h1>

@foreach ($listings as $listing) <!--Start--->

<h2>{{$listing['title']}}</h2> <!--way-1--->

<p><?php echo $listing['desc'];?></p><!--way-2--->

@endforeach <!--end-->

<h1>my name is nayem</h1> 