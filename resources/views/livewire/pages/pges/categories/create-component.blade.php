<div>
       <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="card">
        <div class="cardbdy">
            <form wire:submit="create" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label">Name Categoris</label>
                    <input type="text" wire:model="name" class="form-control" name="example-text-input" placeholder="Input placeholder">
                        @error('name')
                        <span class="error">{{ $message }}</span>
                         @enderror
                         <div class="mt-3"></div>
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
