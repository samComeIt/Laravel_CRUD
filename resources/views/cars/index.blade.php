<!DOCTYPE html>
<html>
  <head>
    <title>Cars</title>
  </head>
  <body>
  <a href="{{ route('cars.create')}}" class="btn btn-info">Add New Car</a>

    @foreach ($allCars as $car)
    <tr>
    <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
   
   <a href="{{ route('cars.show', $car->id)}}" >Show Car</a>

   <a href="{{ route('cars.edit', $car->id)}}" >Edit Car</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
    </ul>
    </tr>
    @endforeach
  </body>
</html>