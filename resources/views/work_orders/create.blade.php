<form action="{{ route('work_order.store') }}" method="post">
    @csrf
    <input name="id" type="hidden" value="{{ $id }}">
    <div class="form form-group">
        <label for="description">description</label>
        <input type="text" name="description">
    </div>
    <div class="form form-group">
        <input type="submit" class="btn btn-primary">
    </div>
</form>

