<div>
    <a href="{{ route('categories.create') }}" class="btn btn-success">Create a new</a>
    <div class="mt-2">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="coL-Lg-12 mt-3"></div>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="w-1"></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($allCategories as $item)

                   <tr>
                       <th>{{ $loop->iteration }}</th>
                       <th>{{ $item->name }}</th>

                  <td class="d-flex gap-1">
                   <a href="{{ route('categories.update',$item->id) }}" class="btn btn-yellow">Edit</a>
                   <a href="#" class="btn btn-red">Delete</a>
                  </td>
                  </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
