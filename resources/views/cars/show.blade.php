<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $car->id }}</title>
  </head>
  <body>
    <h1>Car {{ $car->id }}</h1>
    <ul>
      <li>Make: {{ $car->make }}</li>
      <li>Model: {{ $car->model }}</li>
      <li>Produced on: {{ $car->produced_on }}</li>
    </ul>
  </body>
  <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
    <a href="{{ route('cars.index')}}" >See other cars</a>
    <a href="{{ route('cars.edit', $car->id)}}" >Edit Car</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
</html>