@extends('template')
@section('content')
<div class="jumbotron mt-3">
    <!-- <h1 class="display-4">Only Admin</h1>
    <p>Lorem ipsum....</p> -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Nama-Nama Penulis</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No
                      </th>
                      <th style="width: 20%">
                          Nama Penulis
                      </th>
                      <th style="width: 30%">
                          Foto Profile
                      </th>
                      <th>
                          Rating Cerita
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          <a>
                              Rifa Aditia Nugroho
                          </a>
                          <br/>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{ asset('adminlte/dist/img/avatar5.png') }}">
                                </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                              </div>
                          </div>
                          <small>
                              90% Complete
                          </small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          <a>
                              Meisha Krisuci
                          </a>
                          <br/>
                          <small>
                              Created 01.03.2020
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{ asset('adminlte/dist/img/avatar2.png') }}">
                                </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              </div>
                          </div>
                          <small>
                              60% Complete
                          </small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          <a>
                              Jessie Lemuella
                          </a>
                          <br/>
                          <small>
                              Created 05.07.2020
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{ asset('adminlte/dist/img/avatar3.png') }}">
                                </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                              </div>
                          </div>
                          <small>
                              77% Complete
                          </small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          <a>
                              Juna Daviandra
                          </a>
                          <br/>
                          <small>
                              Created 10.08.2020
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{ asset('adminlte/dist/img/avatar4.png') }}">
                                </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              </div>
                          </div>
                          <small>
                              60% Complete
                          </small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          5
                      </td>
                      <td>
                          <a>
                              Tenzana Albertcio
                          </a>
                          <br/>
                          <small>
                              Created 15.12.2020
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ asset('adminlte/dist/img/avatar.png') }}">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              </div>
                          </div>
                          <small>
                              40% Complete
                          </small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>
@endsection