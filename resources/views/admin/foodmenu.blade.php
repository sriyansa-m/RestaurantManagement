<x-app-layout>
   
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    	<div class="container-scroller">

      @include("admin.navbar")

      <div style="position: relative; top: 60px; right: -150px">

      	<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

      		@csrf

      		<div>
      			<label>Title</label>
      			<input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
      		</div>

      		<div>
      			<label>Price</label>
      			<input style="color:blue;" type="num" name="price" placeholder="Cost" required>
      		</div>


      		<div>
      			<label>Image</label>
      			<input type="file" name="image" required>
      		</div>


      		<div>
      			<label>Description</label>
      			<input style="color:blue;" type="text" name="description" placeholder="Description" required>
      		</div>


      		<div>
      			<input style="color: black" type="submit" value="Save">
      		</div>


      	</form>

      	<div>
      		<br> <br>
      		<table bgcolor="black">
      			<tr>
      				<th stlye="padding: 50px;">Food Name</th>
      				<th stlye="padding: 50px;">Price</th>
      				<th stlye="padding: 50px;">Description</th>
     				<th stlye="padding: 50px;">Image</th>
     				<th stlye="padding: 50px;">Action</th>
      			</tr>

				@foreach($data as $data)
      			<tr align="center">
      				<td>{{$data->title}}</td>
      				<td>{{$data->price}}</td>
      				<td>{{$data->description}}</td>
      				<td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
      				<td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
      			</tr>

      			@endforeach
      		</table>
      	</div>
      </div>

  </div>

    @include("admin.adminscript")


  </body>
</html>