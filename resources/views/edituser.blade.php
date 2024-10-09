@extends('layouts.backend.master')

@section('content')
        {{-- การส่ง $id เข้าไปที่ component --}}
@livewire('edituser',['id'=>$id])

@endsection
