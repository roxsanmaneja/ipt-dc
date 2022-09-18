<div>
    {{-- Stop trying to control. --}}

    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-danger">Are you sure you want to delete this song?</h3>
            </div>

            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>
                            Title
                        </th>
                        <td>
                            {{ $this->post->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Singer
                        </th>
                        <td>
                            {{ $this->post->singer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Genre
                        </th>
                        <td>
                            {{ $this->post->genre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Writer
                        </th>
                        <td>
                            {{ $this->post->writer }}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger" wire:click="deletePost()">Delete</button>
                    <button class="btn btn-secondary mx-3" wire:click="backToPosts()">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
