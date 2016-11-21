@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="content-wrapper">
          <div class="panel panel-default">

              <div class="panel-body">
                <section class="content-header">
                  <h1>
                    Dashboard
                    <small>Control panel</small>
                  </h1>
                </section>

                <section class="content">
                  <div class="row">
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <h3>{{ $usersTotal }}</h3>

                          <p>Usuários Registrados</p>
                        </div>
                        <div class="icon">
                          <i class="ion-person-stalker"></i>
                        </div>
                        <a href="{{ url('/users') }}" class="small-box-footer">Ver Todos <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h3>{{ $peixesTotal }}</h3>

                          <p>Peixes Cadastrados</p>
                        </div>
                        <div class="icon">
                          <i class="ion-bug"></i>
                        </div>
                        <a href="{{ url('/peixes') }}" class="small-box-footer">Ver Todos <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3>{{ $produtosTotal }}</h3>

                          <p>Produtos Cadastrados</p>
                        </div>
                        <div class="icon">
                          <i class="ion-android-cart"></i>
                        </div>
                        <a href="{{ url('/produtos') }}" class="small-box-footer">Ver Todos <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3>{{ $plantasTotal }}</h3>

                          <p>Plantas Cadastradas</p>
                        </div>
                        <div class="icon">
                          <i class="ion-leaf"></i>
                        </div>
                        <a href="{{ url('/plantas') }}" class="small-box-footer">Ver Todas <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-lg-4 col-xs-6">
                      <!-- PRODUCT LIST -->
                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Peixes Adicionados Recentemente</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <ul class="products-list product-list-in-box">
                            @foreach($peixesRecentes as $peixe)
                            <li class="item">
                              <div class="product">
                                <a href="javascript:void(0)" class="product-title">{{ $peixe->nome_peixe }}
                                  @if($peixe->status == "Não")
                                    <span class="label label-danger pull-right">Não Disponível</span></a>
                                  @else
                                    <span class="label label-success pull-right">Disponível</span></a>
                                  @endif
                                    <span class="product-description">
                                      {{ $peixe->descricao_peixe }}
                                    </span>
                              </div>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                          <a href="{{ url('/peixes') }}" class="uppercase">Ver Todos</a>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->

                    </div>
                    <div class="col-lg-4 col-xs-6">
                      <!-- PRODUCT LIST -->
                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Produtos Adicionados Recentemente</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <ul class="products-list product-list-in-box">
                            @foreach($produtosRecentes as $produto)
                            <li class="item">
                              <div class="product">
                                <a href="javascript:void(0)" class="product-title">{{ $produto->nome_produto }}
                                  @if($produto->status == "Não")
                                    <span class="label label-danger pull-right">Não Disponível</span></a>
                                  @else
                                    <span class="label label-success pull-right">Disponível</span></a>
                                  @endif
                                    <span class="product-description">
                                      {{ $produto->descricao_produto }}
                                    </span>
                              </div>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                          <a href="{{ url('/produtos') }}" class="uppercase">Ver Todos</a>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->
                    </div>
                    <div class="col-lg-4 col-xs-6">
                      <!-- PRODUCT LIST -->
                      <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Plantas Adicionadas Recetemente</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <ul class="products-list product-list-in-box">
                            @foreach($plantasRecentes as $planta)
                            <li class="item">
                              <div class="product">
                                <a href="javascript:void(0)" class="product-title">{{ $planta->nome_planta }}
                                  @if($planta->status == "Não")
                                    <span class="label label-danger pull-right">Não Disponível</span></a>
                                  @else
                                    <span class="label label-success pull-right">Disponível</span></a>
                                  @endif
                                    <span class="product-description">
                                      {{ $planta->nome_planta_cientifico }}
                                    </span>
                              </div>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                          <a href="{{ url('/plantas') }}" class="uppercase">Ver Todas</a>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>
                </section>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
