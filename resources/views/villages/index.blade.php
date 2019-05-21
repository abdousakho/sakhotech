@extends("layout.default")
@section('content') 
<div  class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                        NOM
                        </th>
                        <th>
                          Pays
                        </th>
                        <th>
                          Cité
                        </th>
                        <th>
                          Actions
                        </th>
                        <th class="text-center">
                          Salaire
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          abdou sakho
                        </td>
                        <td>
                          senegal
                        </td>
                        <td>
                          Dakar
                        </td>
                        <td>
                            <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                            <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                        </td>

                        <td class="text-center">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          aziz
                        </td>
                        <td>
                          senegal
                        </td>
                        <td>
                          dakar
                        </td>
                        <td>
                          <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                          <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                      </td>
                        <td class="text-center">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                         coumba sakho
                        </td>
                        <td>
                         senegal
                        </td>
                        <td>
                         parcelles assainies
                        </td>
                        <td>
                          <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                          <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                      </td>
                        <td class="text-center">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          el hadji
                        </td>
                        <td>
                        usa
                        </td>
                        <td>
                          las vegas
                        </td>
                        <td>
                          <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                          <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                      </td>
                        <td class="text-center">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                         Mor
                        </td>
                        <td>
                          france
                        </td>
                        <td>
                          paris
                        </td>
                        <td>
                          <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                          <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                      </td>
                        <td class="text-center">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td>
                          <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                          <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                      </td>
                        <td class="text-center">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td>
                          <a class="btn btn-success" > <i class="fa fa-edit"></i></div>
                          <a  class="btn btn-primary"><i class="fa fa-trash"></i></a>
                      </td>
                        <td class="text-center">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
@endsection