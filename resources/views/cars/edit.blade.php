<!DOCTYPE html>
<html>
<form action="{{ route('cars.update', $car->id)}}" method="POST">
    @csrf
   @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" class="form-control" placeholder={{ $car->id}}>
            </div>
            <div class="form-group">
                <strong>Make:</strong>
                <input type="text" name="make" class="form-control" placeholder={{ $car->make}}>
            </div>
            <div class="form-group">
                <strong>Model:</strong>
                <input type="text" name="model" class="form-control" placeholder={{ $car-> model }}>
            </div>
            <div class="form-group">
                <strong>Produced On:</strong>
                <input type="date" name="produced_on" class="form-control" placeholder={{ $car->produced_on}}>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a href="{{ route('cars.show', $car->id)}}" >Cancel Edit</a>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</html>