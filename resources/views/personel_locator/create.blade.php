@extends('layouts.app')
@section('content')


<div class="container">
    <h2>Add Personnel Locator</h2>
    <form action="{{ route('personel_locator.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="monday">Monday</label>
            <select class="form-control" id="monday" name="monday" required>
            <option value="on leave">On Leave</option>
            <option value="on travel">On Travel</option>
            <option value="office">Office</option>
            <option value="work from home">Work From Home</option>
            <option value="workshop/training">Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tuesday">Tuesday</label>
            <select class="form-control" id="tuesday" name="tuesday" required>
            <option value="on leave">On Leave</option>
            <option value="on travel">On Travel</option>
            <option value="office">Office</option>
            <option value="work from home">Work From Home</option>
            <option value="workshop/training">Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="wednesday">Wednesday</label>
            <select class="form-control" id="wednesday" name="wednesday" required>
            <option value="on leave">On Leave</option>
            <option value="on travel">On Travel</option>
            <option value="office">Office</option>
            <option value="work from home">Work From Home</option>
            <option value="workshop/training">Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="thursday">Thursday</label>
            <select class="form-control" id="thursday" name="thursday" required>
            <option value="on leave">On Leave</option>
            <option value="on travel">On Travel</option>
            <option value="office">Office</option>
            <option value="work from home">Work From Home</option>
            <option value="workshop/training">Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="friday">Friday</label>
            <input type="text" class="form-control" id="friday" name="friday" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection