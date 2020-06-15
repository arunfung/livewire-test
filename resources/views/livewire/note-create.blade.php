<div class="mb-4">
    <form wire:submit.prevent="createNote">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">留言</label>
            <textarea wire:model.lazy="body"
                      class="form-control @error('body') is-invalid @enderror"
                      id="note-body" rows="3"
            ></textarea>
            @error('body')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn-secondary">创建留言</button>
    </form>
</div>
