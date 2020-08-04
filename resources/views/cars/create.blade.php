<!DOCTYPE html>
<html>
<form action="{{ route('cars.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Make:</strong>
                <input type="text" name="make" class="form-control" placeholder="Make">
            </div>
            <div class="form-group">
                <strong>Model:</strong>
                <input type="text" name="model" class="form-control" placeholder="Model">
            </div>
            <div class="form-group">
                <strong>Produced On:</strong>
                <input type="date" name="produced_on" class="form-control" placeholder="Produced On">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('cars.index')}}" >See other cars</a>
        </div>
    </div>
   
</form>
</html>