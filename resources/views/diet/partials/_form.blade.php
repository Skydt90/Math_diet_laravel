<div class="form-row">
    <div class="form-group col-md-6">
        <label for="first_name">Diet Name</label>
        <input class="form-control" type="text" value="{{ old('name', $diet->diet_name ?? null) }}" placeholder="" name="name">
    </div>
    <div class="form-group col-md-6">
        <label for="start_weight">Current Weight</label>
        <input class="form-control" type="number" step="0.1" value="{{ old('start_weight', $diet->start_weight ?? null) }}" placeholder="" name="start_weight">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="desired_weight">Desired Weight</label>
        <input class="form-control" type="number" step="0.1" value="{{ old('desired_weight', $diet->desired_weight ?? null) }}" placeholder="" name="desired_weight">
    </div>
    <div class="form-group col-md-6">
        <label for="number_of_days">Number of Days</label>
        <input class="form-control" type="number" value="{{ old('number_of_days', $diet->number_of_days ?? null) }}" placeholder="" name="number_of_days">
    </div>
</div>
<div class="form-group row">
    <label for="height" class="col-md-8 col-form-label text-md-left">Height</label>
    <div class="col-md-12">
        <input class="form-control" type="number" value="" placeholder="" name="height">
    </div>
</div>
<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-0">
        <a href="{{ route('/') }}" class="btn btn-danger">Annullér</a>
        <button type="submit" class="btn btn-primary">Opret</button>
    </div>
</div>