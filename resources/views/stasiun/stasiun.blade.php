@extends('layouts.partials.main')

@section('container')
    <div class="card">
        <div class="row">
                <div class="col-6">
                    <h5 class="card-header">Stasiun</h5>
                </div>
                <div class="col-6 p-3 d-flex justify-content-end">
                  <div class="me-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCenter">
                          Add
                        </button>

                        <!-- Modal -->
                        <form method="POST" action="{{ url('stasiun') }}">
                          @csrf
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">daop</label>
                                    <input type="text" name="daop" id="nameWithTitle" class="form-control" placeholder="Enter Name" autofocus/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6 mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">nama stasiun</label>
                                    <input type="text" name="nama_stasiun" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col-6 mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">kodkod</label>
                                    <input type="text" name="kodkod" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">kmtsta</label>
                                    <input type="text" name="kmtsta" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">line</label>
                                    <input type="text" name="line" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">remark</label>
                                    <input type="text" name="remark" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">rel aktif no bb</label>
                                    <input type="text" name="rel_aktif_no_bb" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">ring</label>
                                    <input type="text" name="ring" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">segmen</label>
                                    <input type="text" name="segmen" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
                  </div>
                </div>
            </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Daop</th>
                        <th>Nama Stasiun</th>
                        <th>Kodkod</th>
                        <th>Kmtsta</th>
                        <th>Line</th>
                        <th>Rel aktif no bb</th>
                        <th>Ring</th>
                        <th>Segmen</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $row->daop }}</td>
                            <td>{{ $row->nama_stasiun }}</td>
                            <td>{{ $row->kodkod }}</td>
                            <td>{{ $row->kmtsta }}</td>
                            <td>{{ $row->line }}</td>
                            <td>{{ $row->rel_aktif_no_bb}}</td>
                            <td>{{ $row->ring}}</td>
                            <td>{{ $row->segmen}}</td>
                            <td class="d-flex">
                              <div class="me-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalCenter2-{{ $row->id }}">
                                    <i class='bx bxs-edit-alt'></i>
                                </button>
                              </div>
                              <form method="POST" action="{{ url('stasiun/'.$row->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class='bx bx-trash'></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              @foreach ($data as $stasiun)
              <!-- Modal -->
                      <form method="POST" action="{{ url('stasiun/'.$stasiun->id) }}">
                          @csrf
                          @method('put')
                        <div class="modal fade" id="modalCenter2-{{ $stasiun->id }}" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Edit Stasiun</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">daop</label>
                                    <input type="text" name="daop" value="{{ $stasiun->daop }}" id="nameWithTitle" class="form-control" placeholder="Enter Name" autofocus/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6 mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">nama stasiun</label>
                                    <input type="text" name="nama_stasiun" value="{{ $stasiun->nama_stasiun }}" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col-6 mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">kodkod</label>
                                    <input type="text" name="kodkod" value="{{ $stasiun->kodkod }}" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">kmtsta</label>
                                    <input type="text" name="kmtsta" value="{{ $stasiun->kmtsta }}" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">line</label>
                                    <input type="text" name="line" value="{{ $stasiun->line }}" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">remark</label>
                                    <input type="text" name="remark" value="{{ $stasiun->remark }}" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">rel aktif no bb</label>
                                    <input type="text" name="rel_aktif_no_bb" value="{{ $stasiun->rel_aktif_no_bb }}" id="nameWithTitle" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">ring</label>
                                    <input type="text" name="ring" id="nameWithTitle" value="{{ $stasiun->ring }}" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                  <div class="col mb-lg-2 mb-1">
                                    <label for="nameWithTitle" class="form-label">segmen</label>
                                    <input type="text" name="segmen" id="nameWithTitle" value="{{ $stasiun->segmen }}" class="form-control" placeholder="Enter Name"/>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
              @endforeach
    </div>
@endsection