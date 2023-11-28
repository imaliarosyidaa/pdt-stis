<x-app-layout>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold">Tabel Testimoni dan Feedback</h5>
                <div class="d-flex align-items-center">
                  <div class="dropdown me-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      Urut dari yang terbaru
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortingDropdown">
                      <li><a class="dropdown-item" href="#">Urut dari yang terbaru</a></li>
                      <li><a class="dropdown-item" href="#">Urut dari yang terlama</a></li>
                    </ul>
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari tahun pendaftaran" aria-label="Search" aria-describedby="searchButton">
                    <button class="btn btn-primary" type="button" id="searchButton">Cari</button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">User ID</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Testimoni</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Feedback</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Created at</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Update at</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($feedback as $f)
                      <tr>
                        <td class="border-bottom-0">{{ $f->id_user}}</td>
                        <td class="border-bottom-0">{{ $f->testimoni}}</td>
                        <td class="border-bottom-0">{{ $f->feedback}}</td>
                        <td class="border-bottom-0">{{ $f->created_at}}</td>
                        <td class="border-bottom-0">{{ $f->updated_at}}</td>
                        <td class="border-bottom-0">
                          <form method="post" action="{{ route('feedback.editview', ['id' => $f->id]) }}">
                            @csrf
                            <input type="hidden" name="status" value="{{ $f->status }}">
                            <button type="submit" name="tampilkan" class="btn btn-primary mr-2">Tampilkan</button>
                          </form>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>