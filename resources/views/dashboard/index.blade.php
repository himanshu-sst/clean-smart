@extends('layouts.app') 
@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Clients</h4>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                <div class="btn-toolbar" role="toolbar" id="lettersToolbar">
                    <div class="btn-group mr-2">
                        <button class="btn btn-default p2-1 pr-2" id="ALL">ALL</button>
                        <button class="btn btn-default pl-2 pr-2" id="A">A</button>
                        <button class="btn btn-default pl-2 pr-2" id="B">B</button>
                        <button class="btn btn-default pl-2 pr-2" id="C">C</button>
                        <button class="btn btn-default pl-2 pr-2" id="D">D</button>
                        <button class="btn btn-default pl-2 pr-2" id="E">E</button>
                        <button class="btn btn-default pl-2 pr-2" id="F">F</button>
                        <button class="btn btn-default pl-2 pr-2" id="G">G</button>
                        <button class="btn btn-default pl-2 pr-2" id="H">H</button>
                        <button class="btn btn-default pl-2 pr-2" id="I">I</button>
                        <button class="btn btn-default pl-2 pr-2" id="J">J</button>
                        <button class="btn btn-default pl-2 pr-2" id="K">K</button>
                        <button class="btn btn-default pl-2 pr-2" id="L">L</button>
                        <button class="btn btn-default pl-2 pr-2" id="M">M</button>
                        <button class="btn btn-default pl-2 pr-2" id="N">N</button>
                        <button class="btn btn-default pl-2 pr-2" id="O">O</button>
                        <button class="btn btn-default pl-2 pr-2" id="P">P</button>
                        <button class="btn btn-default pl-2 pr-2" id="Q">Q</button>
                        <button class="btn btn-default pl-2 pr-2" id="R">R</button>
                        <button class="btn btn-default pl-2 pr-2" id="S">S</button>
                        <button class="btn btn-default pl-2 pr-2" id="T">T</button>
                        <button class="btn btn-default pl-2 pr-2" id="U">U</button>
                        <button class="btn btn-default pl-2 pr-2" id="V">V</button>
                        <button class="btn btn-default pl-2 pr-2" id="W">W</button>
                        <button class="btn btn-default pl-2 pr-2" id="X">X</button>
                        <button class="btn btn-default pl-2 pr-2" id="Y">Y</button>
                        <button class="btn btn-default pl-2 pr-2" id="Z">Z</button>
                    </div>
                </div>
              </div>
              <div class="table-responsive">
                <table  class="table table-bordered table-centered mb-0">
                    <thead>
                        <tr>
                            <th width="80%">Clients</th>
                            <th class="text-center">Sites</th>
                            <th width="10%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td><a href="client-details.html">KFC</a></td>
                            <td class="text-center">3</td>
                            <td class="table-action text-center">
                                <div class="col-auto"> 
                                    <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="client-details.html">McDONALD</a></td>
                            <td class="text-center">4</td>
                            <td class="table-action text-center">
                                <div class="col-auto"> 
                                    <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="client-details.html">Britanica</a></td>
                            <td class="text-center">4</td>
                            <td class="table-action text-center">
                                <div class="col-auto"> 
                                    <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="client-details.html">Sandisk</a></td>
                            <td class="text-center">3</td>
                            <td class="table-action text-center">
                                <div class="col-auto"> 
                                    <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                </div>
                            </td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Toyota</a></td>
                            <td class="text-center">3</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Canon</a></td>
                            <td class="text-center">12</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Amazon</a></td>
                            <td class="text-center">30</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Ikea</a></td>
                            <td class="text-center">7</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Coca Cola</a></td>
                            <td class="text-center">3</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Samsung</a></td>
                            <td class="text-center">8</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Z-plus</a></td>
                            <td class="text-center">3</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                                <td><a href="client-details.html">Hyundaiv</a></td>
                            <td class="text-center">9</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">HipHop</a></td>
                            <td class="text-center">3</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Hetmayar</a></td>
                            <td class="text-center">13</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                            <td><a href="client-details.html">Cisco</a></td>
                            <td class="text-center">5</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
                        </tr>
                            <tr>
                                <td><a href="client-details.html">Deckan</a></td>
                            <td class="text-center">8</td>
                            <td class="table-action text-center"><div class="col-auto"> 
                                                <a href="chat.html" data-toggle="tooltip" data-placement="bottom" title="" class="btn btn-link text-muted btn-lg p-0" data-original-title="Chat"> <i class="mdi mdi-chat"></i> </a>
                                                </div></td>
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