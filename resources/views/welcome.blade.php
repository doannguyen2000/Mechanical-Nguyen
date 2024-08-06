@php
    $bars = [
        ['color' => '#007bff', 'width' => 60, 'label' => 'Nhãn 1'],
        ['color' => '#28a745', 'width' => 80, 'label' => 'Nhãn 2'],
        ['color' => '#dc3545', 'width' => 40, 'label' => 'Nhãn 3'],
        ['color' => '#ffc107', 'width' => 70, 'label' => 'Nhãn 4'],
    ];
@endphp
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h5>Tên bảng </h5>
    <div class="container-fluid d-flex justify-content-between p-0"><x-filter :buttonSearch="1" />
        <div><x-button-link :buttonClass="'btn-outline-success'" :spanClass="'d-none d-md-inline-block'" :iconClass="'fa-solid fa-plus'" :buttonName="'Thêm mới'" /></div>
    </div>
    <x-data-sheet :columns="['cột 1', 'cột 2', 'cột 3', 'cột 4']" :data="[[1, 'Mark', 'Otto', '@mdo'], [2, 'Jacob', 'Thornton', '@fat'], [3, 'Larry the Bird', '', '@twitter']]" :showButton="[1, '#']" :editButton="[1, '#']" :deleteButton="[1, '#']" />
    <div class="container-fluid d-flex justify-content-between p-0"><x-filter />
        <x-pagination :totalPage="8" :currentPage="request()->get('page', 1)" />
    </div>
    <x-chart :bars="$bars" />
@endsection
