<div class="row">
    <div class="col-md-6">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="street">Street</label>
            <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
        </div>
        <div class="form-group">
            <label for="zip">zip/code</label>
            <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}" required>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select name="country" id="country" class="form-control">
            @foreach ($countries as $key => $country)
                <option value="{{ $key }}">{{ $country }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" value="{{ old('description') }}" rows="10" required></textarea>
        </div>
    </div>
</div>