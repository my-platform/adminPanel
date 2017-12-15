@extends('admin.addMovie')
@section('movieId',$movie->id)
@section('movieName',$movie->title)
@section('movieDescription',$movie->description)
@section('editMethod')
    {{method_field('PUT')}}
    @show

