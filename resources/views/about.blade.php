@extends('layout')

@section('content')
<h2>about page</h2>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus facilis atque nobis aliquam porro! Maiores odio mollitia, quo sequi inventore quisquam et quod. Distinctio eius mollitia laborum similique animi facere illo ex, quidem accusamus odit repellat quod consequatur reprehenderit quibusdam quis sint pariatur voluptas nulla enim? Deserunt optio recusandae facilis voluptas sed, eius non blanditiis assumenda officiis quis aperiam unde natus, voluptates possimus iure! At tenetur id aliquam tempora expedita sapiente minima maxime, eius consequuntur sit rem laborum, autem sed nisi? Nemo, corporis voluptatibus quaerat repellat modi pariatur perferendis. Reiciendis quaerat, repellendus ipsum quod facere culpa labore laboriosam suscipit.
@endsection

@section('header')
<h2>this is about page header </h2>
@endsection

@section('page-title')
About
@endsection


@section('sidebar-right')
@parent
 <p> about page sidebar content</p>
@endsection