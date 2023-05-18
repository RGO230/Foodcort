@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>Шаверма</h2>  
            <a href="/shawarma/create" class="btn btn-primary"> + Добавить новый</a>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Фотография</th>
                    <th>Адрес</th>
                    <th>Доставка</th>
                    <th>Наличие места для трапезы</th>
                    <th>Цена от</th>
                    <th>Цена до</th>
                    <th>Качество сервиса</th>
                    <th>Ассортимент</th>
                    <th>Район</th>
                    <th>Долгота</th>
                    <th>Широта</th>
                    <th>Общий рейтинг</th>
                </tr>
                </thead>
                <tbody>
                @foreach($shawarma as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->descr }}</td>
                        <td><img width="100" src="{{$item->img}}"></td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->delivery}}</td>
                        <td>{{$item->foodcort}}</td>
                        <td>{{$item->price_from}}</td>
                        <td>{{$item->price_to}}</td>
                        <td>{{$item->service_quality}}</td>
                        <td>{{$item->assortment}}</td>
                        <td>{{$item->district_id}}
                        <td>{{$item->longitude}}</td>
                        <td>{{$item->latitude}}</td>
                        <th>{{$item->overall_rating}}</th>
                        <td style="text-align:right;">
                            <a href="/shawarma/{{ $item->id }}/edit" class="btn btn-primary">Редактировать</a>
                            <a href="/shawarma/{{ $item->id }}/destroy" class="btn btn-danger">Удалить</a>
                        </td>
                       
                       
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    table {
        width: 90%;
        margin-top: 20px;
    }
    table, th, td {
      border: 1px solid grey !important;
    }
    thead {
      position: sticky;
      top: 0;
      background: #2B2F33;
      color: white;
      border-color:white;
    }
    .wrap {
      margin: 0 !important;
      padding: 0 !important;
    }
    main {
        width: 100%;
        display:flex;
        flex-direction: column;
        align-items:center;
    }
    .panel {
        width: 95%;
    }
  </style>