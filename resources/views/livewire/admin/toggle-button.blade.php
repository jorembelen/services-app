<div>

        <input id="{{ $model->id }}" wire:model.lazy="status" class="check"  type="checkbox" {{ $status ? 'checked' : null }}>
        <label for="{{ $model->id }}" class="checktoggle">checkbox</label>

</div>
