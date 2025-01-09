@extends('layouts.app')
@section('content')

    <div class="containerForm">
        <div class="backBtnStyle">
            <a href="{{ route('kidshome') }}" class="backBtnStyle">Back</a>
        </div>
    
        <div class="formCreateAndEdit container">
            <h2 class="form-title">New Kid</h2>
            <form action="{{ route('kidsstore') }}" method="POST" class="form-container">
    
                @csrf
    
                <div class="inputs">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
            
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="text" name="photo" id="photo" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" id="country" class="form-control">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" name="surname" id="surname" class="form-control">
                        </div>
            
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" id="age" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label for="behaviour" class="form-label">Behaviour</label>
                            <select name="behaviour" id="behaviour" class="form-select" required>
                                <option value="1">Good</option>
                                <option value="0">Bad</option>
                            </select>
                        </div>
                    </div>
                </div>
    
    
                <div class="form-actions">
                    <button type="submit" class="btn btn-create">Create</button>
                    <button type="reset" class="btn btn-reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection

