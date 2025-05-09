@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Edit Personnel Locator</h2>
    <form action="{{ route('personel_locator.update', $personelLocator->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $personelLocator->fullname }}" required>
        </div>
        <div class="form-group">
            <label for="monday">Monday</label>
            <select class="form-control" id="monday" name="monday" required>
                <option value="on leave" {{ $personelLocator->monday == 'on leave' ? 'selected' : '' }}>On Leave</option>
                <option value="on travel" {{ $personelLocator->monday == 'on travel' ? 'selected' : '' }}>On Travel</option>
                <option value="office" {{ $personelLocator->monday == 'office' ? 'selected' : '' }}>Office</option>
                <option value="work from home" {{ $personelLocator->monday == 'work from home' ? 'selected' : '' }}>Work From Home</option>
                <option value="workshop/training" {{ $personelLocator->monday == 'workshop/training' ? 'selected' : '' }}>Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tuesday">Tuesday</label>
            <select class="form-control" id="tuesday" name="tuesday" required>
                <option value="on leave" {{ $personelLocator->tuesday == 'on leave' ? 'selected' : '' }}>On Leave</option>
                <option value="on travel" {{ $personelLocator->tuesday == 'on travel' ? 'selected' : '' }}>On Travel</option>
                <option value="office" {{ $personelLocator->tuesday == 'office' ? 'selected' : '' }}>Office</option>
                <option value="work from home" {{ $personelLocator->tuesday == 'work from home' ? 'selected' : '' }}>Work From Home</option>
                <option value="workshop/training" {{ $personelLocator->tuesday == 'workshop/training' ? 'selected' : '' }}>Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="wednesday">Wednesday</label>
            <select class="form-control" id="wednesday" name="wednesday" required>
                <option value="on leave" {{ $personelLocator->wednesday == 'on leave' ? 'selected' : '' }}>On Leave</option>
                <option value="on travel" {{ $personelLocator->wednesday == 'on travel' ? 'selected' : '' }}>On Travel</option>
                <option value="office" {{ $personelLocator->wednesday == 'office' ? 'selected' : '' }}>Office</option>
                <option value="work from home" {{ $personelLocator->wednesday == 'work from home' ? 'selected' : '' }}>Work From Home</option>
                <option value="workshop/training" {{ $personelLocator->wednesday == 'workshop/training' ? 'selected' : '' }}>Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="thursday">Thursday</label>
            <select class="form-control" id="thursday" name="thursday" required>
                <option value="on leave" {{ $personelLocator->thursday == 'on leave' ? 'selected' : '' }}>On Leave</option>
                <option value="on travel" {{ $personelLocator->thursday == 'on travel' ? 'selected' : '' }}>On Travel</option>
                <option value="office" {{ $personelLocator->thursday == 'office' ? 'selected' : '' }}>Office</option>
                <option value="work from home" {{ $personelLocator->thursday == 'work from home' ? 'selected' : '' }}>Work From Home</option>
                <option value="workshop/training" {{ $personelLocator->thursday == 'workshop/training' ? 'selected' : '' }}>Workshop/Training</option>
            </select>
        </div>
        <div class="form-group">
            <label for="friday">Friday</label>
            <input type="text" class="form-control" id="friday" name="friday" value="{{ $personelLocator->friday }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection