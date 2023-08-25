<div class="d-flex">
    <div>
        <a href=""class="btn btn-outline-light bg-info btn-sm me-2">
            <i class="bi-person-lines-fill"></i>
        </a>
    </div>
    <div>
        <a href=""class="btn btn-outline-warning btn-sm me-2">
            <i class="bi-pencil-square"></i>
        </a>
    </div>
    <div>
        <form action="" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger btn-sm me-2 btn-delete"
                data-name="">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
