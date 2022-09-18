<div>
    {{-- In work, do what you enjoy. --}}
    <div class="edit container col-md-6 offset-md-3">
        <div class="card ">
            <div class="card-header">
                <h3>Edit Post</h3>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="title">
                    <label for="title">Title</label>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="genre">
                    <label for="genre">Genre</label>
                    @error('genre')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="singer">
                    <label for="singer">Singer</label>
                    @error('singer')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="writer">
                    <label for="writer">Writer</label>
                    @error('writer')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit" wire:click="editPost()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
   
    <style>
        div.edit{
            /* color: white; */
            margin-top: 50px;
        }
        /* input{
            color: black;
        } */
    </style>
</div>
