<div class="mb-4">
    <form wire:submit.prevent="createNote">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">留言</label>
            <textarea wire:model.lazy="body"
                class="form-control" id="exampleFormControlTextarea1" rows="3"
            ></textarea>
        </div>
        <button type="submit" class="btn-secondary">创建留言</button>
    </form>
</div>
