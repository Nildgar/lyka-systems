@extends('layout.master')
<!-- Page Title -->
@section('title', 'Relatório de problemas')
<!-- Page Content -->
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Relatório de erros</h1>
        <a data-toggle="modal" data-target="#infoModal" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" title="Informações"><i class="fas fa-info-circle text-white-50"></i></a>
    </div>
    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Visualização - Relatório de erros</h6>
        </div>
        <div class="card-body">
            <p class="text-gray-800"><b>Nome:</b> {{$bugreport->nome}}</p>
            <p class="text-gray-800"><b>Endereço eletrónico:</b> {{$bugreport->email}}</p>
            @if ($bugreport->telemovel)
            <p class="text-gray-800"><b>Telemóvel:</b> {{$bugreport->telemovel}}</p>
            @endif
            <p class="text-gray-800"><b>Estado:</b> <span @if($bugreport->estado == "Pendente") class="text-danger" @elseif($bugreport->estado == "Resolvido") class="text-success" @else class="text-warning" @endif>{{$bugreport->estado}}</span></p>
            @if ($bugreport->screenshot)
            <p class="text-gray-800"><b>Imagem do erro:</b> <a href="{{route("bugreport.download", $bugreport)}}">{{$bugreport->screenshot}}</a></p>
            @endif
            <p class="text-gray-800"><b>Relatório:</b> {{$bugreport->relatorio}}</p>
        </div>
    </div>
</div>
<!-- End of container-fluid -->
@endsection
<!-- End of Page Content -->
